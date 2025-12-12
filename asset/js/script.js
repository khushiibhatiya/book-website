function normalizePath(path) {
    if (!path) return '/index.html';
    const cleanPath = path.split('?')[0].split('#')[0] || '/index.html';
    if (cleanPath === '/' || cleanPath === '') {
        return '/index.html';
    }
    return cleanPath.endsWith('/') ? cleanPath.slice(0, -1) : cleanPath;
}

function applyActiveNavLink() {
    const navLinks = document.querySelectorAll('.nav-link');
    if (!navLinks.length) {
        return false;
    }

    const currentPath = normalizePath(window.location.pathname);
    let matched = false;

    navLinks.forEach(link => {
        const linkPath = normalizePath(new URL(link.href).pathname);
        const isMatch = currentPath === linkPath || currentPath.endsWith(linkPath);

        if (isMatch && !matched) {
            link.classList.add('active');
            matched = true;
        } else {
            link.classList.remove('active');
        }
    });

    // If nothing matched (e.g., custom pages), keep the first link highlighted as fallback
    if (!matched && navLinks[0]) {
        navLinks[0].classList.add('active');
    }

    return true;
}

document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Custom Cursor "Reading Light" ---
    const cursor = document.createElement('div');
    cursor.classList.add('cursor-light');
    document.body.appendChild(cursor);

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    // --- 2. 3D Tilt Effect for Hero Book ---
    const heroSection = document.querySelector('.hero');
    const bookContainer = document.querySelector('.book-stack-container');

    if (heroSection && bookContainer) {
        heroSection.addEventListener('mousemove', (e) => {
            const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
            const yAxis = (window.innerHeight / 2 - e.pageY) / 25;

            // Limit the rotation to avoid breaking the illusion
            const clampX = Math.max(-20, Math.min(20, xAxis));
            const clampY = Math.max(-20, Math.min(20, yAxis));

            bookContainer.style.transform = `rotateY(${clampX}deg) rotateX(${20 + clampY}deg)`;
        });

        // Reset on mouse leave
        heroSection.addEventListener('mouseleave', () => {
            bookContainer.style.transform = `rotateY(-30deg) rotateX(20deg)`; /* Matches CSS default */
            bookContainer.style.transition = 'transform 0.5s ease';
        });

        heroSection.addEventListener('mouseenter', () => {
            bookContainer.style.transition = 'none'; /* Remove transition for instant tracking */
        });
    }

    // --- Navigation & Link Fixing Helper ---
    function fixNavLinks() {
        // Determine if we are in the 'asset/pages/' directory structure
        const isPagesDir = window.location.pathname.includes('/asset/pages/');
        // Target both Header, Footer, and Cart Icon links
        // Note: We use a broader selector because footer might not have ID 'footer' on the UL itself, 
        // but is inside div#footer or footer.magic-footer
        const navLinks = document.querySelectorAll('.nav-menu a, #footer a, .magic-footer a, .cart-wrapper');

        navLinks.forEach(link => {
            // Check if already fixed to avoid infinite loops or double-prefixing
            if (link.dataset.fixed === 'true') return;

            const href = link.getAttribute('href');
            if (!href || href.startsWith('http') || href.startsWith('#') || href.startsWith('javascript')) return;

            if (isPagesDir) {
                // We are in asset/pages/
                if (href.includes('asset/pages/')) {
                    // Link to sibling page (e.g. "asset/pages/shop.html") -> "shop.html"
                    if (!href.startsWith('..')) {
                        link.setAttribute('href', href.replace('asset/pages/', ''));
                    }
                } else if (!href.startsWith('../')) {
                    // Link to root (e.g. "index.html") -> "../../index.html"
                    link.setAttribute('href', '../../' + href);
                }
            }

            // Mark as fixed
            link.dataset.fixed = 'true';
        });

        applyActiveNavLink(); // Re-apply active state after fixing links
    }

    // Initial fix
    fixNavLinks();

    // Observe for async loaded content (Header/Footer)
    const contentObserver = new MutationObserver((mutations) => {
        let shouldUpdate = false;
        mutations.forEach(mutation => {
            if (mutation.addedNodes.length > 0) {
                shouldUpdate = true;
            }
        });

        if (shouldUpdate) {
            fixNavLinks();
        }
    });

    contentObserver.observe(document.body, {
        childList: true,
        subtree: true
    });

    // --- 3. Scroll Reveal Animations ---
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        threshold: 0.15,
        rootMargin: "0px"
    });

    revealElements.forEach(el => revealObserver.observe(el));


    // --- 4. Magnetic Buttons (Optional fun) ---
    const buttons = document.querySelectorAll('.btn-primary');
    buttons.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            btn.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0, 0)';
        });
    });

    if (!applyActiveNavLink()) {
        const headerObserver = new MutationObserver((mutations, observer) => {
            if (applyActiveNavLink()) {
                observer.disconnect();
            }
        });

        headerObserver.observe(document.body, {
            childList: true,
            subtree: true
        });
    }

    // --- Mobile Menu Logic (Event Delegation) ---
    // Using delegation avoids async loading issues entirely
    document.body.addEventListener('click', (e) => {
        const hamburger = e.target.closest('.hamburger');
        const navLink = e.target.closest('.nav-link');
        const navMenu = document.querySelector('.nav-menu');
        const hamburgerBtn = document.querySelector('.hamburger');

        // Toggle Menu
        if (hamburger && navMenu) {
            e.preventDefault(); // Prevent default if it's a link/button
            // Use the found hamburger button specifically, not just what was clicked
            const activeBtn = hamburger.closest('.hamburger');
            if (activeBtn) {
                navMenu.classList.toggle('active');
                activeBtn.classList.toggle('active');

                // Animate bars
                const bars = activeBtn.querySelectorAll('.bar');
                if (bars.length >= 3) {
                    if (activeBtn.classList.contains('active')) {
                        bars[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                        bars[1].style.opacity = '0';
                        bars[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
                    } else {
                        bars[0].style.transform = 'none';
                        bars[1].style.opacity = '1';
                        bars[2].style.transform = 'none';
                    }
                }
            }
        }

        // Close Menu on Link Click
        else if (navLink && navMenu && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            if (hamburgerBtn) {
                hamburgerBtn.classList.remove('active');
                const bars = hamburgerBtn.querySelectorAll('.bar');
                if (bars.length >= 3) {
                    bars[0].style.transform = 'none';
                    bars[1].style.opacity = '1';
                    bars[2].style.transform = 'none';
                }
            }
        }
    });
});

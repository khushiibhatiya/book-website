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

});

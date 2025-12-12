// ==================== GLOBAL CART MANAGEMENT ====================
// This script manages the shopping cart across all pages using localStorage

class ShoppingCart {
    constructor() {
        this.storageKey = 'cartItems';
        this.items = JSON.parse(localStorage.getItem(this.storageKey)) || [];
    }

    // Add item to cart
    addItem(product) {
        this.items.push(product);
        this.save();
        return this.items.length;
    }

    // Remove item from cart
    removeItem(index) {
        this.items.splice(index, 1);
        this.save();
        return this.items.length;
    }

    // Clear cart
    clearCart() {
        this.items = [];
        this.save();
    }

    // Get all items
    getItems() {
        return this.items;
    }

    // Get item count
    getCount() {
        return this.items.length;
    }

    // Save to localStorage
    save() {
        localStorage.setItem(this.storageKey, JSON.stringify(this.items));
    }
}

// Create global cart instance
const cart = new ShoppingCart();

// Update cart badge on all pages
function updateCartBadge() {
    const badge = document.querySelector('.cart-badge');
    if (badge) {
        badge.innerText = cart.getCount();
        if (cart.getCount() > 0) {
            badge.classList.add('show');
            badge.style.opacity = '1';
        } else {
            badge.classList.remove('show');
            badge.style.opacity = '0';
        }
    }
}

// Initialize cart on page load
document.addEventListener('DOMContentLoaded', () => {
    updateCartBadge();

    // Add to cart button listeners for all pages
    document.querySelectorAll('.add-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const card = btn.closest('.book-card');
            if (card) {
                const product = {
                    title: card.querySelector('.book-title')?.innerText || 'Unknown Title',
                    author: card.querySelector('.book-author')?.innerText || 'Unknown Author',
                    price: card.querySelector('.book-price')?.innerText || '$0.00',
                    image: card.querySelector('.book-image')?.src || ''
                };

                cart.addItem(product);
                updateCartBadge();

                // Feedback Animation
                const originalIcon = btn.innerHTML;
                btn.innerHTML = '<ion-icon name="checkmark-outline"></ion-icon>';
                btn.style.background = '#6BCB77';

                setTimeout(() => {
                    btn.innerHTML = originalIcon;
                    btn.style.background = '';
                }, 1000);
            }
        });
    });
});

// Open cart in modal or navigate to cart page
function openCart() {
    window.location.href = 'asset/component/cart.html';
}

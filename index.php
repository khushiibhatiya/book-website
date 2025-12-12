<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookLover - Learn, Grow, Succeed</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>

    <!-- Header -->
    <?php include 'asset/component/header.html'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <span class="hero-tag">🚀 Start your journey today</span>
                <h1>Learn, Grow, <br><span>Succeed.</span></h1>
                <p>Dive into a world of knowledge with our top-rated books and courses. Tailored learning paths to help
                    you achieve your goals.</p>

                <div class="hero-actions">
                    <a href="#" class="btn btn-primary">Explore Now</a>
                    <div class="play-demo">
                        <div class="play-icon">
                            <ion-icon name="play" size="small"></ion-icon>
                        </div>
                        See how it works
                    </div>
                </div>

                <div style="margin-top: 40px; display: flex; align-items: center; gap: 15px;">
                    <div style="display: flex;">
                        <img src="https://i.pravatar.cc/100?img=1"
                            style="width: 40px; height: 40px; border-radius: 50%; border: 3px solid white;" alt="User">
                        <img src="https://i.pravatar.cc/100?img=5"
                            style="width: 40px; height: 40px; border-radius: 50%; border: 3px solid white; margin-left: -15px;"
                            alt="User">
                        <img src="https://i.pravatar.cc/100?img=8"
                            style="width: 40px; height: 40px; border-radius: 50%; border: 3px solid white; margin-left: -15px;"
                            alt="User">
                    </div>
                    <div>
                        <strong style="color: var(--text-main);">50k+</strong>
                        <span style="font-size: 14px; display: block;">Happy Readers</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <!-- Background Blob -->
                <div class="hero-blob"></div>

                <div class="book-stack-container">
                    <!-- Books in stack -->
                    <div class="book"></div>
                    <div class="book"></div>
                    <div class="book"></div>
                    <div class="book"></div>
                    <div class="book"></div>

                    <!-- Floating Open Book -->
                    <div class="open-book">
                        <div class="page-left"></div>
                        <div class="page-right"></div>
                    </div>
                </div>

                <!-- Floating Decorative Icons -->
                <div class="floating-icon float-1">
                    <ion-icon name="bulb-outline" style="color: #F48C06; font-size: 24px;"></ion-icon>
                </div>
                <div class="floating-icon float-2">
                    <ion-icon name="pencil" style="color: #65C9FF;"></ion-icon>
                </div>
                <div class="floating-icon float-3"></div>

                <!-- New Particles -->
                <div class="particle p-1"></div>
                <div class="particle p-2"></div>
                <div class="particle p-3"></div>
                <div class="particle p-4"></div>
            </div>
        </div>

        <!-- Background Decorations -->
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
    </section>

    <!-- Popular Categories / Cards Section -->
    <section class="popular-section container">
        <div class="section-header">
            <h2>Explore Our Top Categories</h2>
            <p>From critical thinking to mastering new languages, find the perfect book for your next adventure.</p>
        </div>

        <div class="cards-grid">
            <!-- Card 1 -->
            <div class="card card-bg-1 card-bg-gradient reveal">
                <div class="card-icon" style="background: rgba(255,255,255,0.2); color: white;">
                    <ion-icon name="bulb"></ion-icon>
                </div>
                <h3>Critical Thinking</h3>
                <p>Master the art of analysis and problem solving.</p>
            </div>

            <!-- Card 2 -->
            <div class="card card-bg-2 card-bg-gradient reveal">
                <div class="card-icon" style="background: rgba(255,255,255,0.2); color: white;">
                    <ion-icon name="code-slash"></ion-icon>
                </div>
                <h3>Programming</h3>
                <p>Unlock the power of code with Python & JS.</p>
            </div>

            <!-- Card 3 -->
            <div class="card card-bg-3 card-bg-gradient reveal">
                <div class="card-icon" style="background: rgba(255,255,255,0.2); color: white;">
                    <ion-icon name="language"></ion-icon>
                </div>
                <h3>Languages</h3>
                <p>Learn Spanish, French, and more like a pro.</p>
            </div>

            <!-- Card 4 -->
            <div class="card card-bg-4 card-bg-gradient reveal">
                <div class="card-icon" style="background: rgba(255,255,255,0.2); color: white;">
                    <ion-icon name="rocket"></ion-icon>
                </div>
                <h3>Space Science</h3>
                <p>Explore the universe and beyond.</p>
            </div>
        </div>
    </section>

    <!-- Core Values Section (Based on Reference Image) -->
    <section class="core-values container reveal">
        <div class="section-header">
            <h2>Our Core Principles</h2>
            <p>Guided by values that put creators and learners first.</p>
        </div>

        <div class="values-grid">
            <!-- Value 1: Orange -->
            <div class="value-card val-orange">
                <div class="val-icon">
                    <ion-icon name="diamond-outline"></ion-icon>
                </div>
                <h3>Quality First</h3>
                <p>We believe in premium content that stands the test of time. Excellence is our baseline.</p>
                <div class="val-arrow">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </div>

            <!-- Value 2: Purple -->
            <div class="value-card val-purple">
                <div class="val-icon">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
                <h3>Community Led</h3>
                <p>Built by learners, for learners. We foster a supportive environment for growth.</p>
                <div class="val-arrow">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </div>

            <!-- Value 3: Green -->
            <div class="value-card val-green">
                <div class="val-icon">
                    <ion-icon name="leaf-outline"></ion-icon>
                </div>
                <h3>Sustainable Growth</h3>
                <p>Learning at your own pace with resources that evolve with you.</p>
                <div class="val-arrow">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us (Vertical Strips from Reference) -->
    <section class="benefits-section container reveal">
        <div class="section-header">
            <h2>Why Readers Choose Us</h2>
            <p>Experience the difference of a platform built for passion.</p>
        </div>

        <div class="benefits-grid">
            <!-- Strip 1 -->
            <div class="benefit-card">
                <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=600&q=80"
                    alt="Library" class="benefit-bg">
                <div class="benefit-overlay"></div>
                <div class="benefit-content">
                    <div class="benefit-icon">
                        <ion-icon name="library-outline"></ion-icon>
                    </div>
                    <h3>Curated Collections</h3>
                    <p>Hand-picked libraries ensuring you only read the best.</p>
                    <a href="#" class="benefit-link">
                        Learn More <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
            </div>

            <!-- Strip 2 -->
            <div class="benefit-card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80"
                    alt="Community" class="benefit-bg">
                <div class="benefit-overlay"></div>
                <div class="benefit-content">
                    <div class="benefit-icon">
                        <ion-icon name="people-circle-outline"></ion-icon>
                    </div>
                    <h3>Global Community</h3>
                    <p>Connect with millions of readers and authors worldwide.</p>
                    <a href="#" class="benefit-link">
                        Join Discussion <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
            </div>

            <!-- Strip 3 -->
            <div class="benefit-card">
                <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?auto=format&fit=crop&w=600&q=80"
                    alt="Growth" class="benefit-bg">
                <div class="benefit-overlay"></div>
                <div class="benefit-content">
                    <div class="benefit-icon">
                        <ion-icon name="trending-up-outline"></ion-icon>
                    </div>
                    <h3>Personal Growth</h3>
                    <p>Track your reading stats and achieve your goals.</p>
                    <a href="#" class="benefit-link">
                        View Stats <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: Book Spotlight / Featured (Creative 3D) -->
    <section class="spotlight-section reveal">
        <div class="container spotlight-content">
            <div class="spotlight-visual">
                <div class="spotlight-circle"></div>
                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&q=80&w=600"
                    alt="Book of the Month" class="spotlight-book">
                <div class="floating-badge">
                    <span>#1 Best Seller</span>
                </div>
            </div>
            <div class="spotlight-text">
                <span class="pill">Book of the Month</span>
                <h2>The Art of Impossible</h2>
                <p>Unlock your hidden potential with this groundbreaking guide to peak performance. A masterpiece of
                    flow psychology.</p>
                <div class="spotlight-stats">
                    <div class="stat">
                        <strong>4.9</strong>
                        <span>Rating</span>
                    </div>
                    <div class="stat">
                        <strong>2M+</strong>
                        <span>Sold</span>
                    </div>
                </div>
                <div class="spotlight-actions">
                    <a href="#" class="btn btn-primary">Read Preview</a>
                    <a href="#" class="btn btn-secondary">Add to List</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Moving Testimonials (Marquee style) -->
    <section class="reviews-section reveal">
        <div class="container">
            <div class="section-header">
                <h2>Voices of Our Community</h2>
            </div>
        </div>
        <div class="marquee-container">
            <div class="marquee-track">
                <!-- Duplicate cards for seamless loop -->
                <div class="review-card glass">
                    <div class="stars">★★★★★</div>
                    <p>"This platform changed how I read forever. The dashboard is pure magic!"</p>
                    <div class="reviewer">
                        <img src="https://i.pravatar.cc/100?img=12" alt="User">
                        <span>Alex M.</span>
                    </div>
                </div>
                <div class="review-card glass">
                    <div class="stars">★★★★★</div>
                    <p>"Finally, a book site that feels modern and alive. Love the community."</p>
                    <div class="reviewer">
                        <img src="https://i.pravatar.cc/100?img=32" alt="User">
                        <span>Sarah J.</span>
                    </div>
                </div>
                <div class="review-card glass">
                    <div class="stars">★★★★★</div>
                    <p>"The curated lists are spot on. I found my favorite author here."</p>
                    <div class="reviewer">
                        <img src="https://i.pravatar.cc/100?img=41" alt="User">
                        <span>David K.</span>
                    </div>
                </div>
                <div class="review-card glass">
                    <div class="stars">★★★★★</div>
                    <p>"Premium feel, premium content. Worth every penny."</p>
                    <div class="reviewer">
                        <img src="https://i.pravatar.cc/100?img=11" alt="User">
                        <span>Emily R.</span>
                    </div>
                </div>
                <!-- Repeat for loop visual -->
                <div class="review-card glass">
                    <div class="stars">★★★★★</div>
                    <p>"This platform changed how I read forever. The dashboard is pure magic!"</p>
                    <div class="reviewer">
                        <img src="https://i.pravatar.cc/100?img=12" alt="User">
                        <span>Alex M.</span>
                    </div>
                </div>
                <div class="review-card glass">
                    <div class="stars">★★★★★</div>
                    <p>"Finally, a book site that feels modern and alive. Love the community."</p>
                    <div class="reviewer">
                        <img src="https://i.pravatar.cc/100?img=32" alt="User">
                        <span>Sarah J.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'asset/component/footer.html'; ?>

    <!-- Interactions Script -->
    <script src="asset/js/script.js"></script>
</body>

</html>
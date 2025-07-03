<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Photo Factory Studio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/about.css">
  
</head>
<body>
    <!-- Navigation -->
    <?php include('includes/navbar.php');?>
  
    <!-- Breadcrumb -->
    <div class="about-hero">
        <div class="container">
            <nav aria-label="breadcrumb" class="position-absolute" style="top: 100px; left: 0; right: 0;">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
        <div class="about-hero-content fade-in-up">
            <h1 class="font-playfair">About Photo Factory Studio</h1>
            <p>Discover the passion, artistry, and dedication behind every frame we capture</p>
        </div>
    </div>

    <!-- Studio Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-in-left">
                    <div class="story-content">
                        <h2 class="font-playfair mb-4" style="font-size: 3rem; color: var(--text-dark);">Our Story</h2>
                        <p class="story-text">
                            Founded in 2014, Photo Factory Studio began as a dream shared by two passionate photographers who believed that every moment deserves to be captured with artistry and emotion. What started as a small studio in the heart of Mumbai has grown into one of India's most trusted photography brands.
                        </p>
                        <p class="story-text">
                            Our journey has been one of constant evolution, learning, and growth. We've had the privilege of documenting thousands of love stories, celebrations, and milestones, each one unique and special in its own way.
                        </p>
                        <div class="story-highlight">
                            <p class="mb-0" style="font-style: italic; font-size: 1.1rem; color: var(--text-dark);">
                                "We don't just take photographs; we create visual poetry that tells your story for generations to come."
                            </p>
                        </div>
                        <p class="story-text">
                            Today, we continue to push the boundaries of creative photography, combining traditional techniques with cutting-edge technology to deliver images that are not just beautiful, but truly extraordinary.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 fade-in-right">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1556800882-1f0d41d51c93?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                             alt="Our Studio" 
                             class="img-fluid" 
                             style="border-radius: var(--border-radius-lg); box-shadow: var(--shadow-heavy);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="text-center mb-5 fade-in-up">
                <h2 class="font-playfair mb-4" style="font-size: 3.5rem; background: linear-gradient(135deg, var(--text-light) 0%, var(--accent-light) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Our Values</h2>
                <p style="font-size: 1.3rem; color: rgba(255, 255, 255, 0.8); max-width: 600px; margin: 0 auto;">
                    The principles that guide every decision we make and every photograph we create
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.1s;">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="value-title">Passion</h3>
                        <p class="value-description">
                            Every photograph we take is infused with genuine passion for the art of storytelling through imagery.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.2s;">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3 class="value-title">Excellence</h3>
                        <p class="value-description">
                            We strive for perfection in every detail, from composition to post-processing, ensuring exceptional quality.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.3s;">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="value-title">Trust</h3>
                        <p class="value-description">
                            Building lasting relationships with our clients through transparency, reliability, and consistent delivery.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.4s;">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="value-title">Innovation</h3>
                        <p class="value-description">
                            Constantly evolving our techniques and embracing new technologies to stay ahead of industry trends.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.5s;">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="value-title">Collaboration</h3>
                        <p class="value-description">
                            Working closely with our clients to understand their vision and bring it to life through our lens.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.6s;">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-infinity"></i>
                        </div>
                        <h3 class="value-title">Timelessness</h3>
                        <p class="value-description">
                            Creating images that transcend trends and remain beautiful and meaningful for generations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Unique Selling Points Section -->
    <section class="usp-section">
        <div class="container">
            <div class="text-center mb-5 fade-in-up">
                <h2 class="font-playfair mb-4" style="font-size: 3.5rem; color: var(--text-dark);">Why Choose Us</h2>
                <p style="font-size: 1.3rem; color: var(--text-secondary); max-width: 700px; margin: 0 auto;">
                    Discover what sets Photo Factory Studio apart in the world of professional photography
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.1s;">
                    <div class="usp-card">
                        <div class="usp-number">01</div>
                        <h3 class="usp-title">Award-Winning Team</h3>
                        <p class="usp-description">
                            Our photographers have won multiple national and international awards for their exceptional work in wedding and portrait photography.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.2s;">
                    <div class="usp-card">
                        <div class="usp-number">02</div>
                        <h3 class="usp-title">Cutting-Edge Equipment</h3>
                        <p class="usp-description">
                            We use the latest professional cameras, lenses, and lighting equipment to ensure the highest quality images in any condition.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.3s;">
                    <div class="usp-card">
                        <div class="usp-number">03</div>
                        <h3 class="usp-title">Personalized Approach</h3>
                        <p class="usp-description">
                            Every client receives a customized photography experience tailored to their unique style, preferences, and vision.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.4s;">
                    <div class="usp-card">
                        <div class="usp-number">04</div>
                        <h3 class="usp-title">Quick Turnaround</h3>
                        <p class="usp-description">
                            We deliver edited photos within 2-3 weeks for most projects, with sneak peeks available within 48 hours.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.5s;">
                    <div class="usp-card">
                        <div class="usp-number">05</div>
                        <h3 class="usp-title">Comprehensive Packages</h3>
                        <p class="usp-description">
                            From pre-wedding shoots to reception coverage, we offer complete photography solutions for all your needs.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="transition-delay: 0.6s;">
                    <div class="usp-card">
                        <div class="usp-number">06</div>
                        <h3 class="usp-title">Lifetime Support</h3>
                        <p class="usp-description">
                            We provide ongoing support for reprints, additional edits, and archival services to preserve your memories forever.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote/Testimonial Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-content fade-in-up">
                <div class="quote-icon">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="quote-text font-playfair">
                    "Photo Factory Studio didn't just capture our wedding day; they captured our souls. Every image tells a story, every frame holds an emotion. Ten years later, we still get goosebumps looking at our wedding album."
                </p>
                <div class="quote-author">Arjun & Priya Mehta</div>
                <div class="quote-role">Wedding Clients, 2014</div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="text-center mb-5 fade-in-up">
                <h2 class="font-playfair mb-4" style="font-size: 3.5rem; color: var(--text-dark);">Meet Our Team</h2>
                <p style="font-size: 1.3rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">
                    The creative minds behind every stunning photograph
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 fade-in-up" style="transition-delay: 0.1s;">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Rahul Sharma">
                        </div>
                        <h3 class="team-name">Rahul Sharma</h3>
                        <div class="team-role">Lead Photographer & Founder</div>
                        <p class="team-description">
                            With 12 years of experience, Rahul specializes in wedding photography and has captured over 500 weddings across India and abroad.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in-up" style="transition-delay: 0.2s;">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Sneha Patel">
                        </div>
                        <h3 class="team-name">Sneha Patel</h3>
                        <div class="team-role">Portrait Specialist & Co-Founder</div>
                        <p class="team-description">
                            Sneha's expertise in portrait and maternity photography has made her one of the most sought-after photographers in Mumbai.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in-up" style="transition-delay: 0.3s;">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Vikram Singh">
                        </div>
                        <h3 class="team-name">Vikram Singh</h3>
                        <div class="team-role">Commercial & Event Photographer</div>
                        <p class="team-description">
                            Vikram brings a unique perspective to commercial and event photography, with a keen eye for capturing candid moments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content fade-in-up">
                <h2 class="font-playfair text-dark mb-4" style="font-size: 3rem;">Ready to Create Magic Together?</h2>
                <p class="text-dark mb-4" style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem;">
                    Let's discuss your photography needs and create something beautiful that you'll treasure forever.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="index.html#contact" class="btn btn-primary-custom btn-lg">
                        <i class="fas fa-calendar me-2"></i>Book a Consultation
                    </a>
                    <a href="index.html#gallery" class="btn btn-outline-custom btn-lg" style="border-color: var(--primary-color); color: var(--primary-color);">
                        <i class="fas fa-images me-2"></i>View Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <?php include('includes/footer.php');?>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right');
            animateElements.forEach(el => {
                observer.observe(el);
            });

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(10, 10, 10, 0.98)';
                    navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.2)';
                } else {
                    navbar.style.background = 'rgba(10, 10, 10, 0.95)';
                    navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
                }
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const href = this.getAttribute('href');
                    
                    if (href === '#') {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                        return;
                    }
                    
                    const target = document.querySelector(href);
                    if (target) {
                        const offsetTop = target.offsetTop - 80;
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add hover effects to cards
            const cards = document.querySelectorAll('.value-card, .usp-card, .team-member');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Parallax effect for hero section
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.about-hero');
                if (hero && scrolled < window.innerHeight) {
                    hero.style.transform = `translateY(${scrolled * 0.3}px)`;
                }
            });
        });
    </script>
</body>
</html>
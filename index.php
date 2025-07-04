<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Factory Studio - Premium Photography Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Navigation -->
      <?php include('includes/navbar.php');?>
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="font-playfair">Capturing Life's Most Beautiful Moments</h1>
            <p>Professional photography services that turn your precious memories into timeless art</p>
            <div class="hero-buttons">
               <a href="contact.php"> <button class="btn btn-primary-custom" onclick="scrollToSection('contact')">
                    <i class="fas fa-calendar me-2"></i>Book Your Session
                </button></a>
                <button class="btn btn-outline-custom" onclick="scrollToSection('gallery')">
                    <i class="fas fa-images me-2"></i>View Gallery
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="font-playfair">About Photo Factory Studio</h2>
                        <p>At Photo Factory Studio, we believe every moment tells a story. With over a decade of experience in professional photography, we specialize in capturing the essence of your most cherished moments.</p>
                        <p>Our team of skilled photographers combines artistic vision with technical expertise to create stunning visual narratives that you'll treasure forever.</p>
                        <div class="stats-row">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Happy Clients</div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-number">1000+</div>
                                    <div class="stat-label">Events Covered</div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-number">10+</div>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1606216794074-735e91aa2c92?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="About Us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="gallery-title">
                <h2 class="font-playfair">Our Portfolio</h2>
                <p>Discover the magic we create through our lens</p>
            </div>
        </div>
        
        <div class="infinite-gallery">
            <div class="scroll-container" id="scrollContainer1">
                <!-- First set of images -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Wedding Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Portrait Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Pre-wedding Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Destination Wedding">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Portrait Session">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1516475080664-ed2fc6a32937?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Maternity Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1606216794074-735e91aa2c92?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Product Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Interior Photography">
                </div>
                <!-- Duplicate set for seamless loop -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Wedding Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Portrait Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Pre-wedding Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Destination Wedding">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Portrait Session">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1516475080664-ed2fc6a32937?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Maternity Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1606216794074-735e91aa2c92?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Product Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Interior Photography">
                </div>
            </div>
        </div>
        
        <div class="infinite-gallery reverse">
            <div class="scroll-container reverse" id="scrollContainer2">
                <!-- Second set of images -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Baby Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Event Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1556800882-1f0d41d51c93?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Commercial Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1579952363873-27d3bfad9c0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Real Estate Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1543267185-b9e6e0cc8b98?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Birthday Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1496307653780-42ee777d4833?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Corporate Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Aerial Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Wedding Ceremony">
                </div>
                <!-- Duplicate set for seamless loop -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Baby Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Event Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1556800882-1f0d41d51c93?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Commercial Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1579952363873-27d3bfad9c0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Real Estate Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1543267185-b9e6e0cc8b98?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Birthday Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1496307653780-42ee777d4833?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Corporate Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Aerial Photography">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Wedding Ceremony">
                </div>
            </div>
        </div>
        
        <div class="explore-btn">
            <button class="btn btn-explore" onclick="openPhotoGallery()">
                <i class="fas fa-images me-2"></i>Explore More
            </button>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="font-playfair text-center mb-5">Our Services</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Destination Wedding</h4>
                        <p>Capture your dream wedding in the most beautiful locations around the world with our expert destination wedding photography.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-camera-retro"></i>
                        </div>
                        <h4>Pre Wedding</h4>
                        <p>Romantic and creative pre-wedding shoots that tell your unique love story in the most beautiful way.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-rings-wedding"></i>
                        </div>
                        <h4>Wedding</h4>
                        <p>Complete wedding photography coverage for your special day, capturing every precious moment and emotion.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-birthday-cake"></i>
                        </div>
                        <h4>Birthday</h4>
                        <p>Celebrate life's milestones with vibrant and joyful photography that captures the essence of your special day.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h4>Maternity & Baby Shoot</h4>
                        <p>Tender moments of motherhood and precious newborn memories captured with care and artistic vision.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Home Inauguration</h4>
                        <p>Document the beginning of your new chapter with beautiful home photography that captures this milestone.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-couch"></i>
                        </div>
                        <h4>Interior Shoot</h4>
                        <p>Showcase your space with professional interior photography that highlights design and ambiance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h4>Product Shoot</h4>
                        <p>High-quality product photography for your business needs, showcasing your products in the best light.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Commercial Aerial Shoot</h4>
                        <p>Stunning aerial photography for real estate and commercial properties using advanced drone technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="font-playfair text-center mb-5">What Our Clients Say</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-text">
                            "Photo Factory Studio captured our wedding day perfectly. Every emotion, every moment was preserved beautifully. We couldn't be happier with the results!"
                        </div>
                        <div class="testimonial-author">- Sarah & Michael Johnson</div>
                        <div class="testimonial-role">Wedding Clients</div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-text">
                            "The team was professional, creative, and made us feel so comfortable during our maternity shoot. The photos are absolutely stunning and we'll treasure them forever!"
                        </div>
                        <div class="testimonial-author">- Priya Sharma</div>
                        <div class="testimonial-role">Maternity Client</div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-text">
                            "Outstanding work on our corporate event. The photos perfectly captured the essence of our company culture and the professionalism was top-notch."
                        </div>
                        <div class="testimonial-author">- Tech Solutions Inc.</div>
                        <div class="testimonial-role">Corporate Client</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section id="contact" class="contact-cta">
        <div class="container text-center">
            <h2 class="font-playfair text-white mb-4">Ready to Create Magic?</h2>
            <p class="text-white mb-4" style="font-size: 1.2rem;">Let's discuss your photography needs and create something beautiful together.</p>
            <div class="cta-buttons">
                <a href="tel:+911234567890" class="btn btn-primary-custom btn-lg me-3 mb-3">
                    <i class="fas fa-phone me-2"></i>Call Now
                </a>
                <a href="mailto:info@photofactorystudio.com" class="btn btn-outline-custom btn-lg mb-3">
                    <i class="fas fa-envelope me-2"></i>Email Us
                </a>
                <a href="https://wa.me/911234567890" class="btn btn-success btn-lg mb-3" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Photo Gallery Modal -->
    <div class="photo-gallery" id="photoGallery">
        <div class="gallery-header">
            <div class="container">
                <h3 class="font-playfair text-white text-center">Our Complete Gallery</h3>
                <div class="close-gallery" onclick="closePhotoGallery()">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="photo-grid" id="photoGrid">
                <!-- Photos will be loaded here -->
            </div>
            
            <div class="loading" id="loading">
                <div class="spinner"></div>
                <p>Loading more photos...</p>
            </div>
            
            <div class="contact-cta text-center mt-5">
                <button class="btn btn-primary-custom btn-lg" onclick="scrollToSection('contact'); closePhotoGallery();">
                    <i class="fas fa-phone me-2"></i>Book Your Session
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
     <?php include('includes/footer.php');?>
   
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
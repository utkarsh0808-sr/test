<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Find Top Talent with Staffing Solutions</h1>
        <p>We connect businesses with exceptional professionals across all industries.</p>
        <a href="<?php echo home_url('/careers'); ?>" class="btn-primary">Browse Careers</a>
    </div>
</section>

<!-- Services Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Our Staffing Services</h2>
        <p class="section-subtitle">Comprehensive recruitment solutions tailored to your business needs.</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">👥</div>
                <h3>Temporary Staffing</h3>
                <p>Flexible staffing solutions for short-term projects and seasonal needs.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">💼</div>
                <h3>Permanent Placement</h3>
                <p>Find the perfect long-term employees for your organization.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🎯</div>
                <h3>Executive Search</h3>
                <p>Specialized recruitment for C-level and leadership positions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <h3 data-target="5000">0</h3>
                <p>Talents Placed</p>
            </div>
            <div class="stat-item">
                <h3 data-target="1000">0</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-item">
                <h3 data-target="98">0</h3>
                <p>% Satisfaction</p>
            </div>
            <div class="stat-item">
                <h3 data-target="24">0</h3>
                <p>Hours Response</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

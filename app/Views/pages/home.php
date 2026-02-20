  <!-- ╔═ HERO ═╗ -->
  <header class="hero">
    <div class="hero-grid-lines"></div>
    <div class="floating-leaf" style="top: 20%; left: 5%; animation-delay: 0s;">🌿</div>
    <div class="floating-leaf" style="bottom: 15%; left: 40%; animation-delay: 2s; font-size: 1.8rem;">🍃</div>
    <div class="floating-leaf" style="top: 15%; right: 10%; animation-delay: 4s;">🌿</div>
    <div class="hero-content">
      <div class="hero-left animate">
        <div class="hero-tag">
          <div class="hero-tag-dot"></div>
          <span class="hero-tag-text">Tanzania's Premier Produce Exporter</span>
        </div>
        <h1>Tanzania's<br/><em>Finest</em><br/>Harvests,<br/>Global Reach.</h1>
        <p class="hero-desc">
          Fruitline Trading connects the fertile lands of Tanzania to discerning buyers worldwide —
          delivering premium Avocados, Mangoes, Coconuts, and Fresh Produce with unmatched quality and care.
        </p>
        <div class="hero-actions">
          <a href="<?= $url('contact') ?>" class="btn btn-primary">Request a Quote →</a>
          <a href="<?= $url('products') ?>" class="btn btn-outline">Explore Products</a>
        </div>
        <div class="hero-stats">
          <div>
            <div class="hero-stat-number">12<span>+</span></div>
            <div class="hero-stat-label">Export Markets</div>
          </div>
          <div>
            <div class="hero-stat-number">500<span>T</span></div>
            <div class="hero-stat-label">Annual Volume</div>
          </div>
          <div>
            <div class="hero-stat-number">8</div>
            <div class="hero-stat-label">Years Exporting</div>
          </div>
        </div>
      </div>
      <div class="hero-visual animate delay-3">
        <div class="avo-ring avo-ring-1"></div>
        <div class="avo-ring avo-ring-2"></div>
        <div class="avo-ring avo-ring-3"></div>
        <img src="<?= $asset('images/avocado_isolated.webp') ?>" alt="Premium Avocado" class="hero-main-img">
        <!-- Floating info badges -->
        <div class="hero-badge hero-badge-1">
          <div class="badge-label">Origin</div>
          <div class="badge-value">🌍 Arusha Region</div>
        </div>
        <div class="hero-badge hero-badge-2">
          <div class="badge-label">Next Harvest</div>
          <div class="badge-value"><span class="badge-accent">Apr–Aug</span> 2025</div>
        </div>
      </div>
    </div>
  </header>

  <!-- ╔═ TICKER ═╗ -->
  <div class="ticker">
    <div class="ticker-track">
      <!-- duplicated for seamless loop -->
      <span class="ticker-item">🥑 Avocados <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥭 Mangoes <span class="ticker-dot"></span></span>
      <span class="ticker-item">🍍 Pineapples <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥥 Coconuts <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥦 Fresh Vegetables <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌿 Fresh Herbs <span class="ticker-dot"></span></span>
      <span class="ticker-item">🇹🇿 Tanzania Origin <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌡️ Cold Chain Maintained <span class="ticker-dot"></span></span>
      <!-- duplicated -->
      <span class="ticker-item">🥑 Avocados <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥭 Mangoes <span class="ticker-dot"></span></span>
      <span class="ticker-item">🍍 Pineapples <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥥 Coconuts <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥦 Fresh Vegetables <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌿 Fresh Herbs <span class="ticker-dot"></span></span>
      <span class="ticker-item">🇹🇿 Tanzania Origin <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌡️ Cold Chain Maintained <span class="ticker-dot"></span></span>
    </div>
  </div>

  <!-- ╔═ SUMMARY ABOUT ═╗ -->
  <section class="about" id="about">
    <div class="container">
      <div class="grid-2">
        <div class="about-visual reveal">
          <div class="about-img-frame">
            <img src="<?= $asset('images/field_view.webp') ?>" alt="Fruitline Farms" class="about-img">
          </div>
        </div>
        <div class="about-content reveal">
          <div class="section-label">Our Story</div>
          <h2 class="section-title">Rooted in Tanzania.<br/>Trusted Worldwide.</h2>
          <p style="color:var(--text-light); line-height:1.8; margin-bottom:24px;">
            Founded in Dar es Salaam, Fruitline Trading was built on a simple promise: to share Tanzania's exceptional agricultural bounty with the world — without compromising on quality, ethics, or relationships.
          </p>
          <a href="<?= $url('about') ?>" class="btn btn-navy">Learn More About Us</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ SUMMARY PRODUCTS ═╗ -->
  <section class="products" id="products">
    <div class="section-divider divider-top">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 60px;">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="divider-white"></path>
      </svg>
    </div>
    <div class="container">
      <div class="section-header centered reveal">
        <div class="section-label">Our Products</div>
        <h2 class="section-title">Premium Export Grade</h2>
        <p class="section-subtitle">From creamy Hass Avocados to sweet Apple Mangoes.</p>
      </div>
      <div class="grid-3 reveal">
        <!-- Hass -->
        <div class="product-card">
          <div class="product-img product-img-hass">
            <img src="<?= $asset('images/avocado_sliced.webp') ?>" alt="Hass Avocado" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Hass Avocado</h3>
            <p>Tanzania's most exported variety — rich, creamy flesh with long shelf life.</p>
          </div>
        </div>
        <!-- Mangoes -->
        <div class="product-card">
          <div class="product-img" style="background: var(--light-gray);">
            <img src="<?= $asset('images/mangoes_fresh_1.webp') ?>" alt="Premium Mangoes" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Premium Mangoes</h3>
            <p>Sweet, fiberless, and perfect for international export markets.</p>
          </div>
        </div>
        <!-- Coconuts -->
        <div class="product-card">
          <div class="product-img" style="background: var(--light-gray);">
            <img src="<?= $asset('images/coconuts_fresh.webp') ?>" alt="Mature Coconuts" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Mature Coconuts</h3>
            <p>Standardized sizes for processing and retail. Coastal origin.</p>
          </div>
        </div>
      </div>
      <div style="text-align:center; margin-top:60px;" class="reveal">
        <a href="<?= $url('products') ?>" class="btn btn-primary">View Full Catalogue</a>
      </div>
    </div>
  </section>

  <!-- ╔═ CTA BANNER ═╗ -->
  <div class="cta-banner">
    <div class="container">
      <h2>Ready to Source<br/>Tanzanian Produce?</h2>
      <p>Join 40+ buyers who trust Fruitline Trading for consistent quality and reliable supply.</p>
      <a href="<?= $url('contact') ?>" class="btn btn-navy">Get Started — Request a Quote</a>
    </div>
  </div>

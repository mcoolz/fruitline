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
        <img src="<?= $asset('images/avocado-hass-featured-product.webp') ?>" alt="Premium Avocado" class="hero-main-img">
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
            <img src="<?= $asset('images/packaging-in-facility.jpg') ?>" alt="Fruitline Facility" class="about-img">
          </div>
          <div class="about-stats-card reveal delay-1">
            <div class="asc-item">
              <strong>100%</strong>
              <span>Traceability</span>
            </div>
            <div class="asc-item">
              <strong>50+</strong>
              <span>Partner Farms</span>
            </div>
          </div>
        </div>
        <div class="about-content reveal">
          <div class="section-label">Our Story</div>
          <h2 class="section-title">Rooted in Tanzania.<br/>Trusted Worldwide.</h2>
          <p style="color:var(--text-light); line-height:1.8; margin-bottom:24px;">
            Founded in Dar es Salaam, Fruitline Trading was built on a simple promise: to share Tanzania's exceptional agricultural bounty with the world — without compromising on quality, ethics, or relationships.
          </p>
          <p style="color:var(--text-light); line-height:1.8; margin-bottom:32px;">
            We operate at the intersection of traditional Tanzanian farming wisdom and modern global export standards, ensuring every piece of fruit meets the highest international benchmarks.
          </p>
          <div class="about-features">
            <div class="feature-mini">
              <span class="fm-icon">🛡️</span>
              <div>
                <strong>Quality Guaranteed</strong>
                <p>Multi-stage inspection process before every shipment.</p>
              </div>
            </div>
            <div class="feature-mini">
              <span class="fm-icon">🚚</span>
              <div>
                <strong>Reliable Logistics</strong>
                <p>Full cold-chain management from farm to port.</p>
              </div>
            </div>
          </div>
          <a href="<?= $url('about') ?>" class="btn btn-forest" style="margin-top:20px;">Learn More About Us</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ PROCESS SUMMARY ═╗ -->
  <section class="process-home" style="padding: 100px 0; background: var(--soft-green);">
    <div class="container">
      <div class="section-header centered reveal">
        <div class="section-label">How We Work</div>
        <h2 class="section-title">Streamlined Export Process</h2>
        <p class="section-subtitle">We manage the complexity of international trade so you don't have to.</p>
      </div>
      <div class="grid-4 reveal">
        <div class="step-card">
          <div class="step-num">01</div>
          <h3>Sourcing</h3>
          <p>Carefully selected harvests from our certified partner farms across Tanzania.</p>
        </div>
        <div class="step-card">
          <div class="step-num">02</div>
          <h3>Processing</h3>
          <p>Grading, cleaning, and packing at our Arusha facility to your exact specs.</p>
        </div>
        <div class="step-card">
          <div class="step-num">03</div>
          <h3>Compliance</h3>
          <p>Rigorous phytosanitary checks and documentation for smooth customs clearance.</p>
        </div>
        <div class="step-card">
          <div class="step-num">04</div>
          <h3>Logistics</h3>
          <p>Temperature-controlled sea or air freight to your destination port.</p>
        </div>
      </div>
      <div style="text-align:center; margin-top:50px;" class="reveal">
        <a href="<?= $url('process') ?>" class="btn btn-outline">See Full Process Details</a>
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
            <img src="<?= $asset('images/avocado-hass-featured-product.webp') ?>" alt="Hass Avocado" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Hass Avocado</h3>
            <p>Tanzania's most exported variety — rich, creamy flesh with long shelf life.</p>
          </div>
        </div>
        <!-- Mangoes -->
        <div class="product-card">
          <div class="product-img" style="background: var(--light-gray);">
            <img src="<?= $asset('images/mangoes-packaged.jpg') ?>" alt="Premium Mangoes" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Premium Mangoes</h3>
            <p>Sweet, fiberless, and perfect for international export markets.</p>
          </div>
        </div>
        <!-- Pineapples -->
        <div class="product-card">
          <div class="product-img" style="background: var(--light-gray);">
            <img src="<?= $asset('images/pineapple-featured-product.png') ?>" alt="Fresh Pineapples" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Fresh Pineapples</h3>
            <p>High sugar content and aromatic flavor. Coastal Tanzanian origin.</p>
          </div>
        </div>
      </div>
      <div style="text-align:center; margin-top:60px;" class="reveal">
        <a href="<?= $url('products') ?>" class="btn btn-primary">View Full Catalogue</a>
      </div>
    </div>
  </section>

  <!-- ╔═ GLOBAL REACH ═╗ -->
  <section class="reach-home" style="padding: 100px 0; background: #fff; overflow: hidden;">
    <div class="container">
      <div class="grid-2 align-center">
        <div class="reveal">
          <div class="section-label">Global Reach</div>
          <h2 class="section-title">Connecting Tanzania<br/>to the World</h2>
          <p style="color:var(--text-light); margin-bottom:30px; line-height:1.7;">
            Our strategic location in Dar es Salaam and Arusha allows us to efficiently serve major markets across three continents. We are proud to be a key link in the global food supply chain.
          </p>
          <ul class="reach-list" style="list-style:none; padding:0; margin-bottom:40px;">
            <li style="margin-bottom:15px; display:flex; align-items:center; gap:12px;">
              <span style="color:var(--accent); font-weight:bold;">✓</span>
              <span><strong>Europe:</strong> Netherlands, UK, Germany, France</span>
            </li>
            <li style="margin-bottom:15px; display:flex; align-items:center; gap:12px;">
              <span style="color:var(--accent); font-weight:bold;">✓</span>
              <span><strong>Middle East:</strong> UAE (Dubai), Qatar, Saudi Arabia</span>
            </li>
            <li style="margin-bottom:15px; display:flex; align-items:center; gap:12px;">
              <span style="color:var(--accent); font-weight:bold;">✓</span>
              <span><strong>Asia:</strong> Singapore, Hong Kong, Malaysia</span>
            </li>
          </ul>
          <a href="<?= $url('markets') ?>" class="btn btn-forest">View Market Details</a>
        </div>
        <div class="reveal">
          <div class="map-visual-simple">
             <img src="<?= $asset('images/warehouse-export-pallets.jpg') ?>" alt="Export Logistics" style="width:100%; border-radius:30px; box-shadow: 0 30px 60px rgba(0,0,0,0.1);">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ CERTIFICATIONS BAR ═╗ -->
  <div class="certs-bar" style="padding: 40px 0; background: var(--forest); color: white;">
    <div class="container">
      <div class="cert-flex" style="display:flex; justify-content: space-between; align-items:center; flex-wrap:wrap; gap:30px; opacity: 0.8;">
         <span style="font-weight:600; text-transform:uppercase; letter-spacing:1px; font-size:0.8rem;">Our Standards:</span>
         <span style="display:flex; align-items:center; gap:8px;">GLOBALG.A.P.</span>
         <span style="display:flex; align-items:center; gap:8px;">HACCP</span>
         <span style="display:flex; align-items:center; gap:8px;">EU ORGANIC</span>
         <span style="display:flex; align-items:center; gap:8px;">ISO 22000</span>
         <span style="display:flex; align-items:center; gap:8px;">PHYTOSANITARY</span>
      </div>
    </div>
  </div>

  <!-- ╔═ CTA BANNER ═╗ -->
  <div class="cta-banner">
    <div class="container">
      <h2>Ready to Source<br/>Tanzanian Produce?</h2>
      <p>Join 40+ buyers who trust Fruitline Trading for consistent quality and reliable supply.</p>
      <a href="<?= $url('contact') ?>" class="btn btn-forest">Get Started — Request a Quote</a>
    </div>
  </div>

  <!-- ╔═ PRODUCTS ═╗ -->
  <section class="products" id="products" style="padding-top: 140px;">
    <div class="bg-grain"></div>
    <div class="blob" style="bottom: 0; left: -10%; opacity: 0.4;"></div>
    <div class="container" style="position:relative; z-index:2;">
      <div class="section-header centered reveal">
        <div class="section-label">Our Products</div>
        <h2 class="section-title">Premium Tanzanian Export Grade</h2>
        <p class="section-subtitle">A diverse portfolio of high-quality produce, sourced from the most fertile regions of Tanzania, handled with precision.</p>
      </div>
      <div class="grid-3 reveal">
        <!-- Hass -->
        <div class="product-card">
          <div class="product-img product-img-hass">
            <span class="tag tag-green">Best Seller</span>
            <img src="<?= $asset('images/avocado_sliced.webp') ?>" alt="Hass Avocado" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Hass Avocado</h3>
            <p>Tanzania's most exported variety — rich, creamy flesh with long shelf life. Ideal for European and Asian markets.</p>
            <div class="product-specs">
              <span class="product-spec">120–250g</span>
              <span class="product-spec">12–15% Oil</span>
              <span class="product-spec">Apr – Aug</span>
            </div>
            <div class="product-cta">
              <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="<?= $url('contact') ?>" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>
        <!-- Fuerte -->
        <div class="product-card">
          <div class="product-img product-img-fuerte">
            <span class="tag tag-navy">Available Now</span>
            <img src="<?= $asset('images/avocado_basket.webp') ?>" alt="Fuerte Avocado" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Fuerte Avocado</h3>
            <p>Smooth, pear-shaped with thin skin. Preferred in the UK and Gulf markets for its mild, buttery flavour.</p>
            <div class="product-specs">
              <span class="product-spec">200–400g</span>
              <span class="product-spec">10–13% Oil</span>
              <span class="product-spec">May – Sep</span>
            </div>
            <div class="product-cta">
              <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="<?= $url('contact') ?>" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>

        <!-- Mangoes -->
        <div class="product-card">
          <div class="product-img" style="background: var(--light-gray);">
            <span class="tag tag-green">Seasonal</span>
            <img src="<?= $asset('images/mangoes_fresh_1.webp') ?>" alt="Premium Mangoes" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Premium Mangoes</h3>
            <p>Including Tommy Atkins, Keitt, and Kent varieties. Sweet, fiberless, and perfect for export markets.</p>
            <div class="product-specs">
              <span class="product-spec">Apple Mango</span>
              <span class="product-spec">Keitt</span>
              <span class="product-spec">Nov – Mar</span>
            </div>
            <div class="product-cta">
              <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="<?= $url('contact') ?>" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>

        <!-- Pineapples -->
        <div class="product-card">
          <div class="product-img" style="background: var(--soft-green);">
            <span class="tag tag-navy">Sweet Grade</span>
            <img src="<?= $asset('images/avocado_orchard.webp') ?>" alt="Fresh Pineapples" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Fresh Pineapples</h3>
            <p>High sugar content and aromatic flavor. Harvested from the coastal plains of Tanzania.</p>
            <div class="product-specs">
              <span class="product-spec">1.2kg – 2.5kg</span>
              <span class="product-spec">MD2 Variety</span>
              <span class="product-spec">Year Round</span>
            </div>
            <div class="product-cta">
              <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="<?= $url('contact') ?>" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>

        <!-- Coconuts -->
        <div class="product-card">
          <div class="product-img" style="background: var(--light-gray);">
            <span class="tag tag-green">Bulk Supply</span>
            <img src="<?= $asset('images/coconuts_fresh.webp') ?>" alt="Mature Coconuts" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Mature Coconuts</h3>
            <p>Standardized sizes for processing and retail. Sourced from the coastal belt of Tanga and Dar es Salaam.</p>
            <div class="product-specs">
              <span class="product-spec">Semi-Husked</span>
              <span class="product-spec">600g+</span>
              <span class="product-spec">Year Round</span>
            </div>
            <div class="product-cta">
              <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="<?= $url('contact') ?>" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>

        <!-- Vegetables & Herbs -->
        <div class="product-card">
          <div class="product-img" style="background: var(--prominent-green);">
            <span class="tag tag-navy">Fresh Picked</span>
            <img src="<?= $asset('images/avocado_sorting.webp') ?>" alt="Vegetables & Herbs" class="product-real-img">
          </div>
          <div class="product-body">
            <h3>Vegetables & Herbs</h3>
            <p>Fine Beans, Chilies, Basil, Mint, and more. Export-standard packaging for maximum shelf life.</p>
            <div class="product-specs">
              <span class="product-spec">French Beans</span>
              <span class="product-spec">Fresh Herbs</span>
              <span class="product-spec">Daily Supply</span>
            </div>
            <div class="product-cta">
              <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="<?= $url('contact') ?>" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>
        <!-- Organic -->
        <div class="product-card">
          <div class="product-img product-img-organic">
            <span class="tag tag-green">🌱 Organic</span>
            <img src="<?= $asset('images/avocado_isolated.webp') ?>" alt="Certified Organic" class="product-real-img" style="object-fit: contain; padding: 20px;">
          </div>
          <div class="product-body">
            <h3>Certified Organic</h3>
            <p>Grown without synthetic inputs, fully certified for EU organic import. Commands premium shelf positioning.</p>
            <div class="product-specs">
              <span class="product-spec">Hass / Fuerte</span>
              <span class="product-spec">EU Organic</span>
              <span class="product-spec">Limited Vol.</span>
            </div>
            <div class="product-cta">
              <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Inquire</a>
              <a href="<?= $url('contact') ?>" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

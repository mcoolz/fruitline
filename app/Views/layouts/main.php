<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?? 'Fruitline Trading' ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $asset('css/style.css') ?>">
</head>
<body>

  <!-- ╔═ NAVBAR ═╗ -->
  <nav>
    <a href="/" class="nav-logo">
      <div class="nav-logo-icon">🍃</div>
      <div class="nav-logo-text">
        <span class="nav-logo-name">Fruitline Trading</span>
        <span class="nav-logo-sub">Dar es Salaam, Tanzania</span>
      </div>
    </a>
    <ul class="nav-links">
      <li><a href="/about">About</a></li>
      <li><a href="/products">Products</a></li>
      <li><a href="/markets">Markets</a></li>
      <li><a href="/gallery">Gallery</a></li>
      <li><a href="/process">Process</a></li>
      <li><a href="/contact">Contact</a></li>
      <li class="mobile-only"><a href="/contact" class="btn btn-primary" style="color:white; margin-top: 20px;">Request a Quote</a></li>
    </ul>
    <div class="nav-cta">
      <a href="/contact" class="btn btn-primary" style="padding:10px 22px;font-size:0.8rem;">Request a Quote</a>
    </div>
    <button class="menu-toggle" aria-label="Toggle Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>

  <?= $content ?>

  <!-- ╔═ FOOTER ═╗ -->
  <footer>
    <div class="blob" style="bottom: 0; right: 0; opacity: 0.1; width: 800px; height: 800px; background: radial-gradient(circle, var(--accent) 0%, transparent 70%);"></div>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="footer-logo">
            <div class="footer-logo-icon">🍃</div>
            <span class="footer-logo-name">Fruitline Trading</span>
          </div>
          <p>Tanzania's trusted partner for premium fruit and vegetable exports. Connecting East African growers to global markets with integrity and care.</p>
          <div class="footer-socials">
            <a href="#" class="social-btn">𝕏</a>
            <a href="#" class="social-btn">in</a>
            <a href="#" class="social-btn">f</a>
            <a href="#" class="social-btn">✉</a>
          </div>
        </div>
        <div class="footer-col">
          <h5>Products</h5>
          <ul>
            <li><a href="/products">Premium Avocados</a></li>
            <li><a href="/products">Mangoes & Pineapples</a></li>
            <li><a href="/products">Vegetables & Herbs</a></li>
            <li><a href="#">Custom Packaging</a></li>
            <li><a href="#">Product Catalogue</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Company</h5>
          <ul>
            <li><a href="/about">About Us</a></li>
            <li><a href="#">Our Farms</a></li>
            <li><a href="#">Certifications</a></li>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Trade Info</h5>
          <ul>
            <li><a href="/markets">Export Markets</a></li>
            <li><a href="#">Incoterms & Pricing</a></li>
            <li><a href="#">Logistics Partners</a></li>
            <li><a href="#">Quality Standards</a></li>
            <li><a href="/contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Sister Company</h5>
          <ul>
            <li><a href="https://primeroductinternational.co.ke" target="_blank" rel="noopener">Prime Products International Ltd (Kenya)</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2025 Fruitline Trading Ltd. All rights reserved. Dar es Salaam, Tanzania.</span>
        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top">↑</a>

  <script>
    // Back to top visibility
    const btt = document.querySelector('.back-to-top');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 500) {
        btt.classList.add('visible');
      } else {
        btt.classList.remove('visible');
      }
    });

    // Scroll-reveal
    const reveals = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries) => {
      entries.forEach((e, i) => {
        if (e.isIntersecting) {
          e.target.style.transitionDelay = (i % 3) * 0.08 + 's';
          e.target.classList.add('visible');
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(el => io.observe(el));

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      navLinks.classList.toggle('active');
    });

    // Close menu when link is clicked
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        navLinks.classList.remove('active');
      });
    });

    // Market item interactivity
    document.querySelectorAll('.market-item').forEach(item => {
      item.addEventListener('click', () => {
        document.querySelectorAll('.market-item').forEach(i => i.classList.remove('active'));
        item.classList.add('active');
      });
    });

    // Smooth nav link behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  </script>
</body>
</html>

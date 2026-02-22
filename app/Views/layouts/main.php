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
    <a href="<?= $url('/') ?>" class="nav-logo">
      <div class="nav-logo-icon">🍃</div>
      <div class="nav-logo-text">
        <span class="nav-logo-name">Fruitline Trading</span>
        <span class="nav-logo-sub">Dar es Salaam, Tanzania</span>
      </div>
    </a>
    <ul class="nav-links">
      <li class="mobile-only"><a href="<?= $url('/') ?>">Home</a></li>
      <li><a href="<?= $url('about') ?>">About</a></li>
      <li><a href="<?= $url('products') ?>">Products</a></li>
      <li><a href="<?= $url('markets') ?>">Markets</a></li>
      <li><a href="<?= $url('gallery') ?>">Gallery</a></li>
      <li><a href="<?= $url('process') ?>">Process</a></li>
      <li><a href="<?= $url('contact') ?>">Contact</a></li>
      <li class="mobile-only"><a href="<?= $url('contact') ?>" class="btn btn-primary" style="color:white; margin-top: 20px;">Request a Quote</a></li>
    </ul>
    <div class="nav-cta">
      <a href="<?= $url('contact') ?>" class="btn btn-primary" style="padding:10px 22px;font-size:0.8rem;">Request a Quote</a>
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
          <p>Your trusted partner for premium fruit and vegetable exports. Connecting East African growers to global markets with integrity and care.</p>
        </div>
        <div class="footer-col">
          <h5>Products</h5>
          <ul>
            <li><a href="<?= $url('products') ?>">Premium Avocados</a></li>
            <li><a href="<?= $url('products') ?>">Mangoes & Pineapples</a></li>
            <li><a href="<?= $url('products') ?>">Vegetables & Herbs</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Company</h5>
          <ul>
            <li><a href="<?= $url('about') ?>">About Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Trade Info</h5>
          <ul>
            <li><a href="<?= $url('markets') ?>">Export Markets</a></li>
            <li><a href="<?= $url('contact') ?>">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Sister Company</h5>
          <ul>
            <li><a href="https://primeproductinternational.co.ke" target="_blank" rel="noopener">Prime Products International Ltd (Kenya)</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2026 Fruitline Trading Ltd. All rights reserved. Dar es Salaam, Tanzania.</span>
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

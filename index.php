<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fruitline Trading — Premium Avocado Exports from Tanzania</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <style>
    /* ─── Design Tokens (60-30-10) ─── */
    :root {
      /* Base & Neutral */
      --white:       #FAFAF7;
      --soft-green:  #ECF2E8; /* 15% Target color */
      --light-gray:  #F0EEE9;
      --mid-gray:    #D8D5CE;
      --text-light:  #888480;

      /* 30% Primary — Deep Navy */
      --navy:        #0F2143;
      --navy-80:     rgba(15,33,67,0.8);
      --navy-10:     rgba(15,33,67,0.08);

      /* 10% Secondary — Avocado Green */
      --green:       #558B2F;
      --green-dark:  #33691E;
      --green-10:    rgba(85,139,47,0.12);

      /* 10% Accent — Safety Orange */
      --accent:      #FF8C00;
      --accent-dark: #D97400;
      --accent-10:   rgba(255,140,0,0.12);

      /* Utility */
      --text-dark:   #1A1612;
      --text-body:   #3D3A35;
      --radius:      6px;
      --radius-lg:   20px;
      --shadow:      0 4px 30px rgba(15,33,67,0.08);
      --shadow-lg:   0 20px 60px rgba(15,33,67,0.12);
      --glass:       rgba(255,255,255,0.7);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; scroll-padding-top: 80px; }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--white);
      color: var(--text-body);
      overflow-x: hidden;
    }

    /* ─── Typography ─── */
    .display {
      font-family: 'Playfair Display', serif;
      font-weight: 900;
      line-height: 1.05;
      letter-spacing: -0.02em;
    }
    .serif { font-family: 'Playfair Display', serif; }
    h1, h2, h3 { line-height: 1.15; }
    p { line-height: 1.7; }

    /* ─── Layout Helpers ─── */
    .container {
      max-width: 1180px;
      margin: 0 auto;
      padding: 0 32px;
    }
    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
    .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
    .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }

    @media (max-width: 991px) {
      .container { padding: 0 24px; }
      .grid-2, .grid-3, .grid-4 { grid-template-columns: 1fr; gap: 40px; }
    }

    /* ─── Buttons ─── */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 14px 28px;
      border-radius: var(--radius);
      font-family: 'DM Sans', sans-serif;
      font-weight: 600;
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      border: none;
    }
    .btn-primary {
      background: var(--accent);
      color: var(--white);
    }
    .btn-primary:hover {
      background: var(--accent-dark);
      transform: translateY(-4px) scale(1.02);
      box-shadow: 0 15px 30px rgba(255,140,0,0.4);
    }
    .btn-outline {
      background: transparent;
      color: var(--white);
      border: 1.5px solid rgba(255,255,255,0.45);
    }
    .btn-outline:hover {
      background: rgba(255,255,255,0.1);
      border-color: rgba(255,255,255,0.8);
    }
    .btn-navy {
      background: var(--navy);
      color: var(--white);
    }
    .btn-navy:hover {
      background: #1a3060;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(15,33,67,0.3);
    }

    /* ─── Tag / Badge ─── */
    .tag {
      display: inline-block;
      padding: 5px 14px;
      border-radius: 100px;
      font-size: 0.73rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }
    .tag-accent { background: var(--accent-10); color: var(--accent-dark); }
    .tag-navy  { background: var(--navy-10); color: var(--navy); }
    .tag-green { background: var(--green-10); color: var(--green); }

    .blob {
      position: absolute;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, var(--green-10) 0%, var(--accent-10) 50%, transparent 70%);
      border-radius: 50%;
      z-index: 0;
      pointer-events: none;
      filter: blur(100px);
      opacity: 0.6;
      animation: blobFloat 20s ease-in-out infinite alternate;
    }
    @keyframes blobFloat {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(40px, -60px) scale(1.1); }
    }

    .bg-grain {
      position: absolute;
      inset: 0;
      opacity: 0.2;
      pointer-events: none;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
      mix-blend-mode: overlay;
      z-index: 1;
    }

    .section-divider {
      position: absolute;
      left: 0;
      width: 100%;
      height: 60px;
      z-index: 5;
      pointer-events: none;
    }
    .divider-top { top: -1px; transform: rotate(180deg); }
    .divider-bottom { bottom: -1px; }
    .divider-soft-green { fill: var(--soft-green); }
    .divider-white { fill: var(--white); }
    .divider-navy { fill: var(--navy); }

    /* ────────────────────────────────────────
       NAVBAR
    ──────────────────────────────────────── */
    nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1000;
      padding: 0 32px;
      background: rgba(15,33,67,0.85);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(255,255,255,0.08);
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 80px;
      transition: all 0.3s ease;
    }
    .nav-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
    }
    .nav-logo-icon {
      width: 42px; height: 42px;
      background: linear-gradient(135deg, var(--green) 0%, var(--green-dark) 100%);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      box-shadow: 0 4px 12px rgba(85,139,47,0.3);
    }
    .nav-logo-text {
      display: flex; flex-direction: column;
      gap: 1px;
    }
    .nav-logo-name {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.05rem;
      color: var(--white);
      letter-spacing: 0.01em;
    }
    .nav-logo-sub {
      font-size: 0.62rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.45);
    }
    .nav-links {
      display: flex;
      align-items: center;
      gap: 36px;
      list-style: none;
    }
    .nav-links a {
      color: rgba(255,255,255,0.7);
      text-decoration: none;
      font-size: 0.85rem;
      font-weight: 500;
      letter-spacing: 0.03em;
      transition: color 0.2s;
    }
    .nav-links a:hover { color: var(--white); }
    .nav-cta { display: flex; align-items: center; gap: 12px; }

    .menu-toggle {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      background: none;
      border: none;
      padding: 5px;
    }
    .menu-toggle span {
      display: block;
      width: 25px;
      height: 2px;
      background: var(--white);
      transition: 0.3s;
    }

    .mobile-only { display: none; }

    @media (max-width: 991px) {
      nav { padding: 0 20px; }
      .menu-toggle { display: flex; z-index: 1001; }
      .nav-links {
        position: fixed;
        top: 0; right: -100%;
        width: 80%; height: 100vh;
        background: var(--navy);
        flex-direction: column;
        justify-content: center;
        gap: 30px;
        transition: 0.4s cubic-bezier(0.77, 0.2, 0.05, 1);
        box-shadow: -10px 0 30px rgba(0,0,0,0.3);
        padding-left: 0;
      }
      .nav-links.active { right: 0; }
      .nav-links a { font-size: 1.2rem; }
      .nav-cta { display: none; }
      .mobile-only { display: block; }

      .menu-toggle.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
      .menu-toggle.active span:nth-child(2) { opacity: 0; }
      .menu-toggle.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
    }

    /* ────────────────────────────────────────
       HERO
    ──────────────────────────────────────── */
    .hero {
      min-height: 100vh;
      background: var(--navy);
      position: relative;
      display: flex;
      align-items: center;
      overflow: hidden;
      padding-top: 80px;
    }

    /* Textured background pattern */
    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        radial-gradient(ellipse 80% 60% at 75% 50%, rgba(85,139,47,0.15) 0%, transparent 60%),
        radial-gradient(ellipse 40% 40% at 15% 85%, rgba(255,140,0,0.1) 0%, transparent 50%);
    }
    .hero-grid-lines {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
      background-size: 60px 60px;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 80px 0;
      max-width: 1180px;
      margin: 0 auto;
      padding-left: 32px; padding-right: 32px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }
    @media (max-width: 991px) {
      .hero-content {
        grid-template-columns: 1fr;
        gap: 60px;
        padding-top: 40px;
        padding-bottom: 60px;
        text-align: center;
      }
      .hero-desc { margin: 0 auto 40px; }
      .hero-actions { justify-content: center; }
      .hero-stats { justify-content: center; gap: 20px; flex-wrap: wrap; }
    }
    .hero-left { }
    .hero-tag {
      margin-bottom: 28px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .hero-tag-dot {
      width: 10px; height: 10px;
      border-radius: 50%;
      background: var(--green);
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.6; transform: scale(1.3); }
    }
    .hero-tag-text {
      font-size: 0.73rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--green);
      font-weight: 700;
    }
    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(3rem, 5.5vw, 5.2rem);
      font-weight: 900;
      color: var(--white);
      line-height: 1.0;
      letter-spacing: -0.03em;
      margin-bottom: 28px;
    }
    .hero h1 em {
      font-style: italic;
      color: var(--green);
    }
    .hero-desc {
      font-size: 1.05rem;
      color: rgba(255,255,255,0.6);
      line-height: 1.75;
      max-width: 480px;
      margin-bottom: 40px;
    }
    .hero-actions {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }
    .hero-stats {
      display: flex;
      gap: 36px;
      margin-top: 60px;
      padding-top: 40px;
      border-top: 1px solid rgba(255,255,255,0.1);
      position: relative;
      z-index: 2;
    }
    .hero-stat-number {
      font-family: 'Playfair Display', serif;
      font-size: 2.4rem;
      font-weight: 900;
      color: var(--white);
      line-height: 1;
      margin-bottom: 4px;
    }
    .hero-stat-number span { color: var(--accent); }
    .hero-stat-label {
      font-size: 0.76rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.4);
    }

    .floating-leaf {
      position: absolute;
      font-size: 2.5rem;
      opacity: 0.12;
      z-index: 1;
      animation: leafFloat 8s ease-in-out infinite;
      pointer-events: none;
      filter: blur(1px);
    }
    @keyframes leafFloat {
      0%, 100% { transform: translate(0, 0) rotate(0deg); }
      33% { transform: translate(30px, -40px) rotate(15deg); }
      66% { transform: translate(-20px, 20px) rotate(-10deg); }
    }

    /* Avocado Illustration (CSS Art) */
    .hero-visual {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 520px;
    }
    @media (max-width: 991px) {
      .hero-visual { height: 400px; }
      .avo-scene { transform: scale(0.8); }
      .hero-badge-1 { left: 0; }
      .hero-badge-2 { right: 0; }
    }
    .avo-scene {
      position: relative;
      width: 340px;
      height: 440px;
      perspective: 1000px;
    }
    /* Main avocado shape */
    .avo-outer {
      position: absolute;
      top: 0; left: 50%;
      transform: translateX(-50%) rotateY(-5deg);
      width: 230px;
      height: 310px;
      background: linear-gradient(160deg, #2d5a1b 0%, #1a3d0d 40%, #0f2a06 100%);
      border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
      box-shadow:
        inset -10px -10px 30px rgba(0,0,0,0.5),
        inset 10px 10px 30px rgba(255,255,255,0.1),
        0 30px 60px rgba(0,0,0,0.4),
        0 0 100px var(--green-10);
      animation: float 5s ease-in-out infinite;
    }
    @keyframes float {
      0%, 100% { transform: translateX(-50%) translateY(0px) rotate(0deg); }
      50% { transform: translateX(-50%) translateY(-20px) rotate(2deg); }
    }
    .avo-inner {
      position: absolute;
      top: 25px;
      left: 50%;
      transform: translateX(-50%);
      width: 170px;
      height: 240px;
      background: linear-gradient(160deg, #f0f9e0 0%, #d8efb0 30%, #a8d080 100%);
      border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
      box-shadow: inset 0 0 15px rgba(85,139,47,0.2);
    }
    .avo-seed {
      position: absolute;
      bottom: 40px;
      left: 50%;
      transform: translateX(-50%);
      width: 90px;
      height: 110px;
      background: radial-gradient(circle at 30% 30%, #b87b45 0%, #7a4520 50%, #5a3010 100%);
      border-radius: 50%;
      box-shadow:
        inset -10px -15px 25px rgba(0,0,0,0.4),
        5px 5px 15px rgba(0,0,0,0.2);
    }
    .avo-stem {
      position: absolute;
      top: -15px;
      left: 50%;
      width: 12px;
      height: 25px;
      background: #4a3010;
      border-radius: 4px;
      transform: translateX(-50%);
    }
    .avo-leaf {
      position: absolute;
      top: -20px;
      left: 55%;
      width: 30px;
      height: 15px;
      background: var(--green);
      border-radius: 0 100% 0 100%;
      transform: rotate(-15deg);
    }
    /* Half avocado */
    .avo-half {
      position: absolute;
      bottom: -20px; right: -30px;
      width: 180px;
      height: 240px;
      background: linear-gradient(160deg, #3d7a22 0%, #234d10 60%, #172f09 100%);
      border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
      box-shadow: 10px 10px 50px rgba(0,0,0,0.5);
      clip-path: inset(0 0 0 50%);
      animation: float 5s ease-in-out infinite;
      animation-delay: 0.7s;
      transform: rotate(15deg);
    }
    .avo-half-inner {
      position: absolute;
      bottom: 0; right: 0;
      width: 126px;
      height: 175px;
      background: linear-gradient(160deg, #f0f9e0 0%, #d8efb0 50%, #a8d080 100%);
      border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
      clip-path: inset(0 0 0 50%);
    }
    /* Decorative rings */
    .avo-ring {
      position: absolute;
      border-radius: 50%;
      border: 1px solid rgba(255,140,0,0.2);
      animation: ringExpand 3s ease-out infinite;
    }
    .avo-ring-1 { width: 300px; height: 300px; top: 50%; left: 50%; transform: translate(-50%,-50%); animation-delay: 0s; }
    .avo-ring-2 { width: 380px; height: 380px; top: 50%; left: 50%; transform: translate(-50%,-50%); animation-delay: 0.8s; }
    .avo-ring-3 { width: 460px; height: 460px; top: 50%; left: 50%; transform: translate(-50%,-50%); animation-delay: 1.6s; }
    @keyframes ringExpand {
      0% { opacity: 0.5; transform: translate(-50%,-50%) scale(0.9); }
      100% { opacity: 0; transform: translate(-50%,-50%) scale(1.1); }
    }
    /* Floating badges */
    .hero-badge {
      position: absolute;
      background: rgba(255,255,255,0.05);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: var(--radius-lg);
      padding: 16px 24px;
      white-space: nowrap;
      animation: float 4s ease-in-out infinite;
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    }
    .hero-badge-1 { top: 60px; left: -40px; animation-delay: 1s; }
    .hero-badge-2 { bottom: 100px; right: -20px; animation-delay: 2s; }
    .badge-label {
      font-size: 0.68rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.45);
      margin-bottom: 2px;
    }
    .badge-value {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.1rem;
      color: var(--white);
    }
    .badge-accent { color: var(--accent); }

    /* ────────────────────────────────────────
       TICKER / MARQUEE
    ──────────────────────────────────────── */
    .ticker {
      background: var(--green-dark);
      color: var(--white);
      padding: 16px 0;
      overflow: hidden;
      position: relative;
      border-top: 1px solid rgba(255,255,255,0.1);
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .ticker-track {
      display: flex;
      gap: 0;
      animation: ticker 30s linear infinite;
      white-space: nowrap;
    }
    .ticker-item {
      display: inline-flex;
      align-items: center;
      gap: 20px;
      padding: 0 40px;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.15em;
      text-transform: uppercase;
    }
    .ticker-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--accent); opacity: 0.8; }
    @keyframes ticker {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    /* ────────────────────────────────────────
       SECTION COMMONS
    ──────────────────────────────────────── */
    section { padding: 140px 0; position: relative; }
    @media (max-width: 768px) {
      section { padding: 80px 0; }
    }
    .section-label {
      font-size: 0.7rem;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--accent-dark);
      font-weight: 600;
      margin-bottom: 14px;
    }
    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 3.5vw, 3rem);
      font-weight: 900;
      color: var(--navy);
      line-height: 1.1;
      letter-spacing: -0.02em;
      margin-bottom: 20px;
    }
    .section-subtitle {
      font-size: 1.05rem;
      color: var(--text-light);
      line-height: 1.7;
      max-width: 540px;
    }
    .section-header { margin-bottom: 64px; }
    @media (max-width: 768px) {
      .section-header { margin-bottom: 40px; }
    }
    .section-header.centered { text-align: center; }
    .section-header.centered .section-subtitle { margin: 0 auto; }

    /* ────────────────────────────────────────
       ABOUT / MISSION
    ──────────────────────────────────────── */
    .about { background: var(--white); }
    .about-visual {
      position: relative;
    }
    .about-img-frame {
      width: 100%;
      aspect-ratio: 4/5;
      background: var(--light-gray);
      border-radius: var(--radius-lg);
      overflow: hidden;
      position: relative;
    }
    /* CSS avocado field illustration */
    .about-illustration {
      width: 100%;
      height: 100%;
      background: linear-gradient(180deg, #87CEEB 0%, #aee5f5 35%, #8fbc5a 35%, #6a9940 50%, #4a7a25 65%, #2a5a10 100%);
      position: relative;
      overflow: hidden;
    }
    /* Sun */
    .about-illustration::before {
      content: '';
      position: absolute;
      top: 30px; right: 50px;
      width: 70px; height: 70px;
      background: radial-gradient(circle, #FFD700, #FFA500);
      border-radius: 50%;
      box-shadow: 0 0 40px rgba(255,165,0,0.5);
    }
    /* Trees */
    .about-tree {
      position: absolute;
      bottom: 0;
    }
    .about-tree-trunk {
      width: 16px;
      background: #5a3a1a;
      margin: 0 auto;
      border-radius: 4px 4px 0 0;
    }
    .about-tree-canopy {
      background: radial-gradient(ellipse, #3d7a22 0%, #2d5a18 60%, #1d3d0d 100%);
      border-radius: 50% 50% 40% 40%;
      margin: 0 auto;
      position: relative;
    }
    .about-tree-canopy::after {
      content: '🥑';
      position: absolute;
      font-size: 12px;
      bottom: 8px; right: 10px;
    }

    .about-floating-card {
      position: absolute;
      bottom: -20px;
      right: -20px;
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 20px 24px;
      box-shadow: var(--shadow-lg);
      min-width: 200px;
    }
    @media (max-width: 768px) {
      .about-floating-card {
        right: 0;
        bottom: 0;
        min-width: auto;
        padding: 12px 16px;
      }
      .about-top-card {
        left: 0;
        top: 0;
      }
    }
    .afc-number {
      font-family: 'Playfair Display', serif;
      font-size: 2.2rem;
      font-weight: 900;
      color: var(--navy);
      line-height: 1;
      margin-bottom: 2px;
    }
    .afc-number span { color: var(--accent); }
    .afc-label {
      font-size: 0.8rem;
      color: var(--text-light);
      letter-spacing: 0.04em;
    }

    .about-top-card {
      position: absolute;
      top: -18px;
      left: -18px;
      background: var(--navy);
      border-radius: var(--radius-lg);
      padding: 16px 20px;
      box-shadow: var(--shadow-lg);
    }
    .atc-icon { font-size: 1.4rem; margin-bottom: 4px; }
    .atc-text { font-size: 0.72rem; letter-spacing: 0.08em; color: rgba(255,255,255,0.6); line-height: 1.4; }
    .atc-text strong { color: var(--white); display: block; font-size: 0.85rem; }

    .about-content { }
    .about-features {
      margin-top: 36px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .about-feature {
      display: flex;
      gap: 18px;
      align-items: flex-start;
      padding: 24px;
      border-radius: var(--radius-lg);
      background: var(--soft-green);
      transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      border: 1px solid transparent;
    }
    .about-feature:hover {
      background: var(--white);
      transform: translateX(10px);
      box-shadow: var(--shadow);
      border-color: var(--green-10);
    }
    .af-icon {
      width: 44px; height: 44px;
      border-radius: 10px;
      background: var(--navy);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.2rem;
      flex-shrink: 0;
    }
    .af-text h4 {
      font-weight: 600;
      color: var(--navy);
      margin-bottom: 4px;
      font-size: 0.95rem;
    }
    .af-text p { font-size: 0.87rem; color: var(--text-light); }

    /* ────────────────────────────────────────
       PRODUCTS
    ──────────────────────────────────────── */
    .products { background: var(--soft-green); }
    .product-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      overflow: hidden;
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      border: 1px solid rgba(15,33,67,0.05);
      box-shadow: var(--shadow);
    }
    .product-card:hover {
      transform: translateY(-12px);
      box-shadow: var(--shadow-lg);
      border-color: var(--green-10);
    }
    .product-img {
      height: 200px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .product-img-hass { background: linear-gradient(135deg, #1a3d0d 0%, #2d5a18 40%, #3d7a22 100%); }
    .product-img-fuerte { background: linear-gradient(135deg, #0d3a1a 0%, #1a5a28 40%, #2a7a38 100%); }
    .product-img-organic { background: linear-gradient(135deg, #2a3d0d 0%, #4a6018 40%, #5a7a22 100%); }
    .product-avo-emoji {
      font-size: 5rem;
      filter: drop-shadow(0 8px 24px rgba(0,0,0,0.3));
      animation: float 3s ease-in-out infinite;
    }
    .product-img .tag {
      position: absolute;
      top: 14px; left: 14px;
    }
    .product-body { padding: 24px; }
    .product-body h3 {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.25rem;
      color: var(--navy);
      margin-bottom: 8px;
    }
    .product-body p { font-size: 0.87rem; color: var(--text-light); margin-bottom: 18px; }
    .product-specs {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }
    .product-spec {
      background: var(--green-10);
      padding: 6px 14px;
      border-radius: 100px;
      font-size: 0.72rem;
      font-weight: 600;
      color: var(--green-dark);
      letter-spacing: 0.04em;
    }
    .product-cta {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .product-cta-link {
      font-size: 0.82rem;
      font-weight: 600;
      color: var(--accent-dark);
      text-decoration: none;
      letter-spacing: 0.04em;
      transition: gap 0.2s;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .product-cta-link:hover { gap: 10px; }

    /* ────────────────────────────────────────
       WHY CHOOSE US
    ──────────────────────────────────────── */
    .why {
      background: var(--navy);
      position: relative;
      overflow: hidden;
    }
    .why::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
      background-size: 60px 60px;
    }
    .why .section-title { color: var(--white); }
    .why .section-subtitle { color: rgba(255,255,255,0.5); }
    .why .section-label { color: var(--accent); }

    .why-cards {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      position: relative;
    }
    @media (max-width: 991px) {
      .why-cards {
        grid-template-columns: 1fr 1fr;
      }
    }
    @media (max-width: 580px) {
      .why-cards {
        grid-template-columns: 1fr;
      }
    }
    .why-card {
      padding: 32px 24px;
      border-radius: var(--radius-lg);
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.03);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .why-card:hover {
      border-color: rgba(255,140,0,0.3);
      background: rgba(255,140,0,0.05);
      transform: translateY(-4px);
    }
    .why-icon {
      width: 52px; height: 52px;
      border-radius: 12px;
      background: rgba(255,140,0,0.15);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .why-card h4 {
      font-family: 'Playfair Display', serif;
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 10px;
    }
    .why-card p {
      font-size: 0.85rem;
      color: rgba(255,255,255,0.45);
      line-height: 1.7;
    }
    .why-number {
      font-family: 'Playfair Display', serif;
      font-size: 2.8rem;
      font-weight: 900;
      color: rgba(255,140,0,0.15);
      line-height: 1;
      margin-bottom: 8px;
    }

    /* ────────────────────────────────────────
       PROCESS / TIMELINE
    ──────────────────────────────────────── */
    .process { background: var(--soft-green); }
    .process-steps {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 0;
      position: relative;
    }
    .process-steps::before {
      content: '';
      position: absolute;
      top: 36px;
      left: 10%;
      right: 10%;
      height: 2px;
      background: linear-gradient(90deg, var(--green), var(--accent));
      z-index: 0;
      opacity: 0.3;
    }
    @media (max-width: 991px) {
      .process-steps {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      .process-steps::before {
        top: 0;
        bottom: 0;
        left: 36px;
        width: 2px;
        height: auto;
        background: linear-gradient(180deg, var(--navy), var(--accent));
      }
    }
    .process-step {
      text-align: center;
      padding: 0 16px;
      position: relative;
      z-index: 1;
    }
    @media (max-width: 991px) {
      .process-step {
        text-align: left;
        padding-left: 100px;
      }
      .process-step-circle {
        margin: 0;
        position: absolute;
        left: 0;
        top: 0;
      }
    }
    .process-step-circle {
      width: 72px; height: 72px;
      border-radius: 50%;
      background: var(--white);
      border: 3px solid var(--green-10);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem;
      margin: 0 auto 24px;
      transition: border-color 0.3s, box-shadow 0.3s;
      position: relative;
    }
    .process-step:hover .process-step-circle {
      border-color: var(--accent);
      box-shadow: 0 0 0 6px var(--accent-10);
    }
    .process-step-num {
      position: absolute;
      top: -8px; right: -8px;
      width: 24px; height: 24px;
      background: var(--accent);
      color: var(--white);
      border-radius: 50%;
      font-size: 0.65rem;
      font-weight: 700;
      display: flex; align-items: center; justify-content: center;
    }
    .process-step h4 {
      font-weight: 600;
      font-size: 0.9rem;
      color: var(--navy);
      margin-bottom: 8px;
    }
    .process-step p { font-size: 0.78rem; color: var(--text-light); }

    /* ────────────────────────────────────────
       MARKETS (Export Destinations)
    ──────────────────────────────────────── */
    .markets { background: var(--white); }
    .markets-grid {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 80px;
      align-items: start;
    }
    @media (max-width: 991px) {
      .markets-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }
    }
    .market-list { display: flex; flex-direction: column; gap: 16px; margin-top: 40px; }
    .market-item {
      display: flex;
      align-items: center;
      gap: 18px;
      padding: 18px 22px;
      background: var(--white);
      border-radius: var(--radius-lg);
      border: 1px solid var(--mid-gray);
      cursor: pointer;
      transition: all 0.25s;
    }
    .market-item:hover, .market-item.active {
      border-color: var(--navy);
      background: var(--navy);
    }
    .market-item:hover .mi-country,
    .market-item.active .mi-country { color: var(--white); }
    .market-item:hover .mi-volume,
    .market-item.active .mi-volume { color: var(--accent); }
    .market-item:hover .mi-label,
    .market-item.active .mi-label { color: rgba(255,255,255,0.5); }
    .market-flag { font-size: 1.6rem; }
    .mi-country { font-weight: 600; font-size: 0.95rem; color: var(--navy); transition: color 0.25s; }
    .mi-label { font-size: 0.75rem; color: var(--text-light); letter-spacing: 0.04em; transition: color 0.25s; }
    .mi-volume { font-family: 'Playfair Display', serif; font-weight: 700; font-size: 1.1rem; color: var(--navy); margin-left: auto; transition: color 0.25s; }

    /* SVG World Map placeholder */
    .market-map {
      background: var(--white);
      border-radius: var(--radius-lg);
      aspect-ratio: 16/10;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid var(--mid-gray);
      position: relative;
      overflow: hidden;
    }
    .map-bg {
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at center, #e8f4f8 0%, #d0e8f0 100%);
    }
    .map-title {
      position: absolute;
      top: 20px; left: 20px;
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--text-light);
    }
    /* Continent blobs */
    .map-blob {
      position: absolute;
      background: rgba(15,33,67,0.12);
      border-radius: 40% 60% 60% 40% / 40% 40% 60% 60%;
    }
    .blob-africa { width: 22%; height: 35%; top: 30%; left: 42%; background: rgba(85,139,47,0.2); }
    .blob-europe { width: 14%; height: 20%; top: 14%; left: 44%; border-radius: 60% 40% 40% 60%/60% 60% 40% 40%; background: rgba(15,33,67,0.12); }
    .blob-asia { width: 26%; height: 30%; top: 16%; left: 55%; border-radius: 40% 60% 50% 50%/50% 40% 60% 50%; background: rgba(15,33,67,0.12); }
    .blob-americas { width: 16%; height: 40%; top: 20%; left: 14%; border-radius: 50% 50% 40% 60%/40% 60% 50% 50%; background: rgba(15,33,67,0.12); }
    .blob-oz { width: 10%; height: 14%; bottom: 22%; left: 72%; background: rgba(15,33,67,0.1); border-radius: 45%; }

    /* Map dots for export destinations */
    .map-dot {
      position: absolute;
      width: 12px; height: 12px;
      background: var(--accent);
      border-radius: 50%;
      border: 2px solid var(--white);
      box-shadow: 0 0 0 4px rgba(255,140,0,0.2);
      animation: ping 2s ease-out infinite;
    }
    @keyframes ping {
      0% { box-shadow: 0 0 0 0 rgba(255,140,0,0.4); }
      70% { box-shadow: 0 0 0 10px rgba(255,140,0,0); }
      100% { box-shadow: 0 0 0 0 rgba(255,140,0,0); }
    }
    .dot-tz { bottom: 40%; left: 53%; background: #2d7a22; } /* Tanzania origin */
    .dot-eu { top: 22%; left: 46%; animation-delay: 0.5s; }
    .dot-uk { top: 19%; left: 44%; animation-delay: 1s; }
    .dot-uae { top: 28%; left: 59%; animation-delay: 1.5s; }
    .dot-sg { bottom: 32%; left: 72%; animation-delay: 0.8s; }
    .dot-us { top: 28%; left: 18%; animation-delay: 1.2s; }

    /* ────────────────────────────────────────
       CERTIFICATIONS
    ──────────────────────────────────────── */
    .certifications {
      background: var(--white);
      padding: 60px 0;
      border-top: 1px solid var(--mid-gray);
      border-bottom: 1px solid var(--mid-gray);
    }
    .cert-track {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      flex-wrap: wrap;
    }
    @media (max-width: 768px) {
      .cert-track {
        gap: 30px;
      }
    }
    .cert-item {
      display: flex;
      align-items: center;
      gap: 12px;
      opacity: 0.5;
      transition: opacity 0.2s;
    }
    .cert-item:hover { opacity: 1; }
    .cert-icon {
      width: 44px; height: 44px;
      border-radius: 10px;
      background: var(--navy);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.2rem;
    }
    .cert-name {
      font-weight: 600;
      font-size: 0.82rem;
      color: var(--navy);
      line-height: 1.2;
    }
    .cert-desc { font-size: 0.68rem; color: var(--text-light); letter-spacing: 0.04em; }

    /* ────────────────────────────────────────
       TESTIMONIALS
    ──────────────────────────────────────── */
    .testimonials { background: var(--white); }
    .testimonial-cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    @media (max-width: 991px) {
      .testimonial-cards {
        grid-template-columns: 1fr;
      }
    }
    .testimonial-card {
      padding: 40px 32px;
      border-radius: var(--radius-lg);
      border: 1px solid rgba(15,33,67,0.05);
      background: var(--white);
      transition: all 0.4s ease;
      box-shadow: var(--shadow);
    }
    .testimonial-card:hover {
      box-shadow: var(--shadow-lg);
      transform: translateY(-6px);
      border-color: var(--green-10);
    }
    .testimonial-card:first-child {
      border-color: var(--navy);
      background: var(--navy);
    }
    .stars { color: var(--accent); font-size: 0.9rem; margin-bottom: 18px; letter-spacing: 2px; }
    .quote {
      font-family: 'Playfair Display', serif;
      font-size: 1.05rem;
      font-style: italic;
      line-height: 1.65;
      margin-bottom: 24px;
    }
    .testimonial-card:first-child .quote { color: rgba(255,255,255,0.85); }
    .testimonial-card:not(:first-child) .quote { color: var(--text-body); }
    .testimonial-author { display: flex; align-items: center; gap: 12px; }
    .author-avatar {
      width: 44px; height: 44px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.3rem;
      background: var(--light-gray);
    }
    .testimonial-card:first-child .author-avatar { background: rgba(255,255,255,0.1); }
    .author-name { font-weight: 600; font-size: 0.88rem; color: var(--navy); }
    .testimonial-card:first-child .author-name { color: var(--white); }
    .author-role { font-size: 0.75rem; color: var(--text-light); }
    .testimonial-card:first-child .author-role { color: rgba(255,255,255,0.4); }

    /* ────────────────────────────────────────
       CTA BANNER
    ──────────────────────────────────────── */
    .cta-banner {
      background: var(--green-dark);
      padding: 100px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .cta-banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background: repeating-linear-gradient(
        45deg,
        transparent,
        transparent 30px,
        rgba(255,255,255,0.04) 30px,
        rgba(255,255,255,0.04) 60px
      );
    }
    .cta-banner h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.4rem, 5vw, 4rem);
      font-weight: 900;
      color: var(--white);
      letter-spacing: -0.02em;
      margin-bottom: 20px;
      position: relative;
    }
    .cta-banner p {
      color: rgba(255,255,255,0.7);
      font-size: 1.1rem;
      margin-bottom: 48px;
      position: relative;
    }
    .cta-banner .btn-navy {
      position: relative;
      font-size: 0.95rem;
      padding: 18px 40px;
      background: var(--accent);
    }

    /* ────────────────────────────────────────
       CONTACT SECTION
    ──────────────────────────────────────── */
    .contact { background: var(--soft-green); }
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.4fr;
      gap: 80px;
      align-items: start;
    }
    @media (max-width: 991px) {
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 60px;
      }
      .contact-form {
        padding: 30px 20px;
      }
    }
    .contact-info { }
    .contact-detail {
      display: flex;
      gap: 18px;
      align-items: flex-start;
      margin-bottom: 28px;
    }
    .contact-detail-icon {
      width: 46px; height: 46px;
      background: var(--navy);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }
    .contact-detail-text h4 { font-weight: 600; color: var(--navy); margin-bottom: 4px; }
    .contact-detail-text p { font-size: 0.87rem; color: var(--text-light); }

    /* Form */
    .contact-form {
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 40px;
      box-shadow: var(--shadow);
    }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
    @media (max-width: 580px) {
      .form-row {
        grid-template-columns: 1fr;
      }
    }
    .form-group { margin-bottom: 20px; }
    .form-group label {
      display: block;
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: var(--navy);
      margin-bottom: 8px;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 13px 16px;
      border: 1.5px solid var(--mid-gray);
      border-radius: var(--radius);
      font-family: 'DM Sans', sans-serif;
      font-size: 0.92rem;
      color: var(--text-dark);
      background: var(--white);
      transition: border-color 0.2s, box-shadow 0.2s;
      outline: none;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: var(--navy);
      box-shadow: 0 0 0 3px var(--navy-10);
    }
    .form-group textarea { resize: vertical; min-height: 110px; }
    .form-submit {
      width: 100%;
      padding: 15px;
      font-size: 0.9rem;
    }

    /* ────────────────────────────────────────
       FOOTER
    ──────────────────────────────────────── */
    footer {
      background: var(--navy);
      color: rgba(255,255,255,0.6);
      padding: 72px 0 32px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.8fr 1fr 1fr 1fr;
      gap: 60px;
      padding-bottom: 60px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      margin-bottom: 32px;
    }
    @media (max-width: 991px) {
      .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
      }
    }
    @media (max-width: 580px) {
      .footer-grid {
        grid-template-columns: 1fr;
      }
    }
    .footer-brand { }
    .footer-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }
    .footer-logo-icon {
      width: 44px; height: 44px;
      background: linear-gradient(135deg, var(--green) 0%, var(--green-dark) 100%);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.4rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .footer-logo-name {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.1rem;
      color: var(--white);
    }
    .footer-brand p { font-size: 0.85rem; line-height: 1.75; margin-bottom: 24px; }
    .footer-socials { display: flex; gap: 10px; }
    .social-btn {
      width: 36px; height: 36px;
      border-radius: 8px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      display: flex; align-items: center; justify-content: center;
      font-size: 0.9rem;
      cursor: pointer;
      transition: background 0.2s, border-color 0.2s;
      text-decoration: none;
    }
    .social-btn:hover { background: var(--accent); border-color: var(--accent); }
    .footer-col h5 {
      font-size: 0.72rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white);
      margin-bottom: 20px;
      font-weight: 600;
    }
    .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 12px; }
    .footer-col ul li a {
      color: rgba(255,255,255,0.45);
      text-decoration: none;
      font-size: 0.87rem;
      transition: color 0.2s;
    }
    .footer-col ul li a:hover { color: var(--accent); }
    .footer-bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 0.78rem;
      color: rgba(255,255,255,0.3);
    }
    @media (max-width: 768px) {
      .footer-bottom {
        flex-direction: column;
        gap: 20px;
        text-align: center;
      }
    }
    .footer-bottom a { color: rgba(255,255,255,0.3); text-decoration: none; }
    .footer-bottom a:hover { color: var(--accent); }
    .footer-bottom-links { display: flex; gap: 24px; }

    /* ────────────────────────────────────────
       ANIMATIONS
    ──────────────────────────────────────── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .animate {
      animation: fadeUp 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
    }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }
    .delay-5 { animation-delay: 0.5s; }

    /* Scroll reveal */
    .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.7s cubic-bezier(0.25,0.46,0.45,0.94), transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94);
    }
    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Back to Top */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: var(--green);
      color: var(--white);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      box-shadow: var(--shadow-lg);
      z-index: 1000;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s;
    }
    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }
    .back-to-top:hover {
      background: var(--green-dark);
      transform: translateY(-5px);
    }
  </style>
</head>
<body>

  <!-- ╔═ NAVBAR ═╗ -->
  <nav>
    <a href="#" class="nav-logo">
      <div class="nav-logo-icon">🥑</div>
      <div class="nav-logo-text">
        <span class="nav-logo-name">Fruitline Trading</span>
        <span class="nav-logo-sub">Dar es Salaam, Tanzania</span>
      </div>
    </a>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#markets">Markets</a></li>
      <li><a href="#process">Process</a></li>
      <li><a href="#contact">Contact</a></li>
      <li class="mobile-only"><a href="#contact" class="btn btn-primary" style="color:white; margin-top: 20px;">Request a Quote</a></li>
    </ul>
    <div class="nav-cta">
      <a href="#contact" class="btn btn-primary" style="padding:10px 22px;font-size:0.8rem;">Request a Quote</a>
    </div>
    <button class="menu-toggle" aria-label="Toggle Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>

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
          <span class="hero-tag-text">Tanzania's Premier Avocado Exporter</span>
        </div>
        <h1>Tanzania's<br/><em>Finest</em><br/>Avocados,<br/>Global Reach.</h1>
        <p class="hero-desc">
          Fruitline Trading connects the lush highlands of Tanzania to discerning buyers worldwide —
          delivering premium Hass and Fuerte avocados with unmatched freshness, traceability, and care.
        </p>
        <div class="hero-actions">
          <a href="#contact" class="btn btn-primary">Request a Quote →</a>
          <a href="#products" class="btn btn-outline">Explore Products</a>
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
        <div class="avo-scene">
          <div class="avo-outer">
            <div class="avo-stem"></div>
            <div class="avo-leaf"></div>
            <div class="avo-inner">
              <div class="avo-seed"></div>
            </div>
          </div>
          <div class="avo-half">
            <div class="avo-half-inner"></div>
          </div>
        </div>
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
      <span class="ticker-item">🥑 Hass Avocados <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥑 Fuerte Avocados <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌱 Certified Organic <span class="ticker-dot"></span></span>
      <span class="ticker-item">✈️ Air & Sea Freight <span class="ticker-dot"></span></span>
      <span class="ticker-item">🇹🇿 Tanzania Origin <span class="ticker-dot"></span></span>
      <span class="ticker-item">🏆 GlobalG.A.P. Certified <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌡️ Cold Chain Maintained <span class="ticker-dot"></span></span>
      <span class="ticker-item">📦 Custom Packaging <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥑 Hass Avocados <span class="ticker-dot"></span></span>
      <span class="ticker-item">🥑 Fuerte Avocados <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌱 Certified Organic <span class="ticker-dot"></span></span>
      <span class="ticker-item">✈️ Air & Sea Freight <span class="ticker-dot"></span></span>
      <span class="ticker-item">🇹🇿 Tanzania Origin <span class="ticker-dot"></span></span>
      <span class="ticker-item">🏆 GlobalG.A.P. Certified <span class="ticker-dot"></span></span>
      <span class="ticker-item">🌡️ Cold Chain Maintained <span class="ticker-dot"></span></span>
      <span class="ticker-item">📦 Custom Packaging <span class="ticker-dot"></span></span>
    </div>
  </div>

  <!-- ╔═ ABOUT ═╗ -->
  <section class="about" id="about">
    <div class="blob" style="top: 10%; right: -10%; opacity: 0.3;"></div>
    <div class="container">
      <div class="grid-2">
        <div class="about-visual reveal">
          <div class="about-img-frame">
            <div class="about-illustration">
              <!-- Trees -->
              <div class="about-tree" style="left:10%; bottom:0;">
                <div class="about-tree-canopy" style="width:80px;height:110px;"></div>
                <div class="about-tree-trunk" style="height:50px;"></div>
              </div>
              <div class="about-tree" style="left:28%; bottom:0;">
                <div class="about-tree-canopy" style="width:100px;height:140px;"></div>
                <div class="about-tree-trunk" style="height:60px;"></div>
              </div>
              <div class="about-tree" style="left:50%; bottom:0;">
                <div class="about-tree-canopy" style="width:90px;height:120px;"></div>
                <div class="about-tree-trunk" style="height:55px;"></div>
              </div>
              <div class="about-tree" style="left:70%; bottom:0;">
                <div class="about-tree-canopy" style="width:110px;height:150px;"></div>
                <div class="about-tree-trunk" style="height:65px;"></div>
              </div>
              <div class="about-tree" style="left:88%; bottom:0; transform:translateX(-50%);">
                <div class="about-tree-canopy" style="width:75px;height:100px;"></div>
                <div class="about-tree-trunk" style="height:45px;"></div>
              </div>
            </div>
          </div>
          <div class="about-floating-card">
            <div class="afc-number">500<span>T</span></div>
            <div class="afc-label">Annual export volume (metric tons)</div>
          </div>
          <div class="about-top-card">
            <div class="atc-icon">🌿</div>
            <div class="atc-text">
              <strong>Sustainably Farmed</strong>
              From Tanzania's highlands
            </div>
          </div>
        </div>

        <div class="about-content reveal">
          <div class="section-label">Our Story</div>
          <h2 class="section-title">Rooted in Tanzania.<br/>Trusted Worldwide.</h2>
          <p style="color:var(--text-light); line-height:1.8; margin-bottom:16px;">
            Founded in Dar es Salaam, Fruitline Trading was built on a simple promise: to share Tanzania's exceptional avocados with the world — without compromising on quality, ethics, or relationships.
          </p>
          <p style="color:var(--text-light); line-height:1.8;">
            We work directly with small and medium-scale farmers across the Arusha, Kilimanjaro, and Mbeya regions, ensuring fair prices for growers while delivering market-grade consistency to global buyers.
          </p>
          <div class="about-features">
            <div class="about-feature">
              <div class="af-icon">🌾</div>
              <div class="af-text">
                <h4>Direct Farm Sourcing</h4>
                <p>We partner with 80+ verified farms, enabling full traceability from grove to port.</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="af-icon">❄️</div>
              <div class="af-text">
                <h4>End-to-End Cold Chain</h4>
                <p>Temperature-controlled storage and logistics ensure peak ripeness on arrival.</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="af-icon">📋</div>
              <div class="af-text">
                <h4>Full Export Documentation</h4>
                <p>Phytosanitary, GlobalG.A.P., and EU-import compliant paperwork handled for you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ PRODUCTS ═╗ -->
  <section class="products" id="products">
    <div class="section-divider divider-top">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 60px;">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="divider-white"></path>
      </svg>
    </div>
    <div class="bg-grain"></div>
    <div class="blob" style="bottom: 0; left: -10%; opacity: 0.4;"></div>
    <div class="container" style="position:relative; z-index:2;">
      <div class="section-header centered reveal">
        <div class="section-label">Our Products</div>
        <h2 class="section-title">Premium Avocado Varieties</h2>
        <p class="section-subtitle">Harvested at peak maturity from Tanzania's volcanic-soil highlands — available in bulk, pallet, and retail-ready formats.</p>
      </div>
      <div class="grid-3 reveal">
        <!-- Hass -->
        <div class="product-card">
          <div class="product-img product-img-hass">
            <span class="tag tag-green">Best Seller</span>
            <div class="product-avo-emoji" style="animation-delay:0s;">🥑</div>
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
              <a href="#contact" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="#contact" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>
        <!-- Fuerte -->
        <div class="product-card">
          <div class="product-img product-img-fuerte">
            <span class="tag tag-navy">Available Now</span>
            <div class="product-avo-emoji" style="animation-delay:0.5s;">🫒</div>
          </div>
          <div class="product-body">
            <h3>Fuerte Avocado</h3>
            <p>Smooth, pear-shaped with thin, peelable skin. Preferred in the UK and Gulf markets for its mild, buttery flavour.</p>
            <div class="product-specs">
              <span class="product-spec">200–400g</span>
              <span class="product-spec">10–13% Oil</span>
              <span class="product-spec">May – Sep</span>
            </div>
            <div class="product-cta">
              <a href="#contact" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Get Quote</a>
              <a href="#contact" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>
        <!-- Organic -->
        <div class="product-card">
          <div class="product-img product-img-organic">
            <span class="tag tag-green">🌱 Organic</span>
            <div class="product-avo-emoji" style="animation-delay:1s;">🌿</div>
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
              <a href="#contact" class="btn btn-primary" style="padding:10px 20px;font-size:0.8rem;">Inquire</a>
              <a href="#contact" class="product-cta-link">Spec Sheet <span>→</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ WHY CHOOSE US ═╗ -->
  <section class="why" id="why">
    <div class="container">
      <div class="section-header centered reveal">
        <div class="section-label" style="color:var(--accent);">Why Fruitline</div>
        <h2 class="section-title">Built for Global<br/>Buyers' Standards</h2>
        <p class="section-subtitle" style="margin:0 auto;">We speak the language of international trade — from phytosanitary compliance to just-in-time logistics.</p>
      </div>
      <div class="why-cards reveal">
        <div class="why-card">
          <div class="why-number">01</div>
          <div class="why-icon">📍</div>
          <h4>Traceable Origin</h4>
          <p>Every shipment is traceable to the specific farm, block, and harvest date — full transparency for your supply chain.</p>
        </div>
        <div class="why-card">
          <div class="why-number">02</div>
          <div class="why-icon">🏅</div>
          <h4>Certified Quality</h4>
          <p>GlobalG.A.P., KEPHIS-equivalent, and EU phytosanitary standards maintained across all supplier farms.</p>
        </div>
        <div class="why-card">
          <div class="why-number">03</div>
          <div class="why-icon">🚢</div>
          <h4>Flexible Logistics</h4>
          <p>Sea freight (reefer containers) and air freight options via Dar es Salaam, Kilimanjaro, and Mombasa ports.</p>
        </div>
        <div class="why-card">
          <div class="why-number">04</div>
          <div class="why-icon">🤝</div>
          <h4>Dedicated Account Support</h4>
          <p>A dedicated export manager handles your orders, documentation, and market-fit questions from inquiry to delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ PROCESS ═╗ -->
  <section class="process" id="process">
    <div class="section-divider divider-top">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 60px;">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="divider-navy"></path>
      </svg>
    </div>
    <div class="bg-grain"></div>
    <div class="container" style="position:relative; z-index:2;">
      <div class="section-header centered reveal">
        <div class="section-label">How It Works</div>
        <h2 class="section-title">From Farm to Your Market<br/>in 5 Steps</h2>
      </div>
      <div class="process-steps reveal">
        <div class="process-step">
          <div class="process-step-circle">
            🌱
            <div class="process-step-num">1</div>
          </div>
          <h4>Inquiry & Quotation</h4>
          <p>Submit your requirements — volume, variety, delivery window — and receive a tailored quote within 24h.</p>
        </div>
        <div class="process-step">
          <div class="process-step-circle">
            🧪
            <div class="process-step-num">2</div>
          </div>
          <h4>Sample Approval</h4>
          <p>We dispatch physical samples for quality review before committing to a full order.</p>
        </div>
        <div class="process-step">
          <div class="process-step-circle">
            📦
            <div class="process-step-num">3</div>
          </div>
          <h4>Packing & Grading</h4>
          <p>Harvested, graded, and packed at our certified packhouse in Arusha to buyer specifications.</p>
        </div>
        <div class="process-step">
          <div class="process-step-circle">
            🛳️
            <div class="process-step-num">4</div>
          </div>
          <h4>Documentation & Shipment</h4>
          <p>All export documents prepared. Cold-chain logistics activated for port-to-port transit.</p>
        </div>
        <div class="process-step">
          <div class="process-step-circle">
            🏪
            <div class="process-step-num">5</div>
          </div>
          <h4>Delivery & Support</h4>
          <p>Goods delivered to your warehouse or port. Full post-shipment support provided.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ MARKETS ═╗ -->
  <section class="markets" id="markets">
    <div class="bg-grain"></div>
    <div class="container" style="position:relative; z-index:2;">
      <div class="markets-grid">
        <div class="reveal">
          <div class="section-label">Export Destinations</div>
          <h2 class="section-title">Delivering to<br/>12+ Countries</h2>
          <p class="section-subtitle">Our avocados reach major import hubs in Europe, the Middle East, and Asia — with growing presence in North America.</p>
          <div class="market-list">
            <div class="market-item active">
              <span class="market-flag">🇳🇱</span>
              <div><div class="mi-country">Netherlands</div><div class="mi-label">Primary EU hub</div></div>
              <div class="mi-volume">140T</div>
            </div>
            <div class="market-item">
              <span class="market-flag">🇦🇪</span>
              <div><div class="mi-country">UAE / Dubai</div><div class="mi-label">Middle East gateway</div></div>
              <div class="mi-volume">95T</div>
            </div>
            <div class="market-item">
              <span class="market-flag">🇬🇧</span>
              <div><div class="mi-country">United Kingdom</div><div class="mi-label">Direct retail &amp; wholesale</div></div>
              <div class="mi-volume">80T</div>
            </div>
            <div class="market-item">
              <span class="market-flag">🇸🇬</span>
              <div><div class="mi-country">Singapore</div><div class="mi-label">Southeast Asia distribution</div></div>
              <div class="mi-volume">55T</div>
            </div>
          </div>
        </div>
        <div class="reveal">
          <div class="market-map">
            <div class="map-bg"></div>
            <span class="map-title">Active Export Routes</span>
            <!-- Continent blobs -->
            <div class="map-blob blob-africa"></div>
            <div class="map-blob blob-europe"></div>
            <div class="map-blob blob-asia"></div>
            <div class="map-blob blob-americas"></div>
            <div class="map-blob blob-oz"></div>
            <!-- Destination dots -->
            <div class="map-dot dot-tz" title="Tanzania (Origin)"></div>
            <div class="map-dot dot-eu" title="Netherlands"></div>
            <div class="map-dot dot-uk" title="United Kingdom"></div>
            <div class="map-dot dot-uae" title="UAE"></div>
            <div class="map-dot dot-sg" title="Singapore"></div>
            <div class="map-dot dot-us" title="USA"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ CERTIFICATIONS ═╗ -->
  <div class="certifications reveal">
    <div class="container">
      <div style="text-align:center; margin-bottom:36px;">
        <span class="section-label" style="display:block;">Certifications & Standards</span>
        <p style="font-size:0.88rem; color:var(--text-light);">Trusted by buyers across 3 continents</p>
      </div>
      <div class="cert-track">
        <div class="cert-item">
          <div class="cert-icon">🏅</div>
          <div><div class="cert-name">GlobalG.A.P.</div><div class="cert-desc">Farm Assurance</div></div>
        </div>
        <div class="cert-item">
          <div class="cert-icon">🌿</div>
          <div><div class="cert-name">EU Organic</div><div class="cert-desc">Certified Produce</div></div>
        </div>
        <div class="cert-item">
          <div class="cert-icon">🛡️</div>
          <div><div class="cert-name">HACCP</div><div class="cert-desc">Food Safety System</div></div>
        </div>
        <div class="cert-item">
          <div class="cert-icon">🌱</div>
          <div><div class="cert-name">Rainforest Alliance</div><div class="cert-desc">Sustainability</div></div>
        </div>
        <div class="cert-item">
          <div class="cert-icon">📋</div>
          <div><div class="cert-name">Phytosanitary</div><div class="cert-desc">Export Compliance</div></div>
        </div>
        <div class="cert-item">
          <div class="cert-icon">⚖️</div>
          <div><div class="cert-name">Fair Trade</div><div class="cert-desc">Ethical Sourcing</div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ╔═ TESTIMONIALS ═╗ -->
  <section class="testimonials" id="testimonials">
    <div class="blob" style="top: -20%; left: -10%; opacity: 0.2;"></div>
    <div class="container">
      <div class="section-header centered reveal">
        <div class="section-label">Client Stories</div>
        <h2 class="section-title">Trusted by Buyers<br/>Across the Globe</h2>
      </div>
      <div class="testimonial-cards reveal">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p class="quote">"Fruitline has become our most reliable African supplier. Their documentation is flawless and the avocados consistently arrive in Grade A condition."</p>
          <div class="testimonial-author">
            <div class="author-avatar">🧑</div>
            <div>
              <div class="author-name">Marco van der Berg</div>
              <div class="author-role">Import Director, Greenfield BV — Netherlands</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars" style="color:var(--accent-dark);">★★★★★</div>
          <p class="quote">"We switched to Fruitline after struggling with inconsistent quality from other exporters. The cold chain management is exceptional."</p>
          <div class="testimonial-author">
            <div class="author-avatar">👩</div>
            <div>
              <div class="author-name">Aisha Rahman</div>
              <div class="author-role">Senior Buyer, Al Rawabi Fresh — Dubai, UAE</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars" style="color:var(--accent-dark);">★★★★★</div>
          <p class="quote">"Responsive, professional, and honest. Fruitline's team handles everything — from sampling to doorstep delivery. Outstanding partnership."</p>
          <div class="testimonial-author">
            <div class="author-avatar">🧑‍💼</div>
            <div>
              <div class="author-name">James Caldwell</div>
              <div class="author-role">Head of Produce, FreshDirect UK — London</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ CTA BANNER ═╗ -->
  <div class="cta-banner">
    <div class="container">
      <h2>Ready to Source<br/>Tanzanian Avocados?</h2>
      <p>Join 40+ buyers who trust Fruitline Trading for consistent quality and reliable supply.</p>
      <a href="#contact" class="btn btn-navy">Get Started — Request a Quote</a>
    </div>
  </div>

  <!-- ╔═ CONTACT ═╗ -->
  <section class="contact" id="contact">
    <div class="section-divider divider-top">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 60px;">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="divider-white"></path>
      </svg>
    </div>
    <div class="bg-grain"></div>
    <div class="blob" style="top: 0; right: -5%; opacity: 0.3;"></div>
    <div class="container" style="position:relative; z-index:2;">
      <div class="contact-grid">
        <div class="reveal">
          <div class="section-label">Get In Touch</div>
          <h2 class="section-title">Let's Talk<br/>Business.</h2>
          <p class="section-subtitle" style="margin-bottom:40px;">Whether you're an importer, wholesaler, or retailer — we're ready to discuss volumes, pricing, and logistics to fit your needs.</p>
          <div class="contact-detail">
            <div class="contact-detail-icon">📍</div>
            <div class="contact-detail-text">
              <h4>Head Office</h4>
              <p>14 Kivukoni Front, Dar es Salaam, Tanzania</p>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon">📧</div>
            <div class="contact-detail-text">
              <h4>Export Enquiries</h4>
              <p>exports@fruitlinetrading.co.tz</p>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon">📞</div>
            <div class="contact-detail-text">
              <h4>Phone / WhatsApp</h4>
              <p>+255 712 345 678</p>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon">⏰</div>
            <div class="contact-detail-text">
              <h4>Response Time</h4>
              <p>Within 24 business hours (EAT)</p>
            </div>
          </div>
        </div>
        <div class="reveal">
          <div class="contact-form">
            <h3 style="font-family:'Playfair Display',serif;color:var(--navy);font-size:1.5rem;margin-bottom:28px;font-weight:700;">Request a Quote</h3>
            <div class="form-row">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" placeholder="Marco" />
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" placeholder="van der Berg" />
              </div>
            </div>
            <div class="form-group">
              <label>Company / Organisation</label>
              <input type="text" placeholder="Greenfield Imports BV" />
            </div>
            <div class="form-row">
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="marco@greenfield.nl" />
              </div>
              <div class="form-group">
                <label>Country</label>
                <input type="text" placeholder="Netherlands" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label>Variety Required</label>
                <select>
                  <option>Hass Avocado</option>
                  <option>Fuerte Avocado</option>
                  <option>Certified Organic</option>
                  <option>Mixed / Undecided</option>
                </select>
              </div>
              <div class="form-group">
                <label>Volume (Metric Tons)</label>
                <input type="text" placeholder="e.g. 10MT per month" />
              </div>
            </div>
            <div class="form-group">
              <label>Additional Notes</label>
              <textarea placeholder="Tell us about your requirements — packaging, delivery port, incoterms, timeline..."></textarea>
            </div>
            <button class="btn btn-primary form-submit">Send Enquiry →</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ╔═ FOOTER ═╗ -->
  <footer>
    <div class="blob" style="bottom: 0; right: 0; opacity: 0.1; width: 800px; height: 800px; background: radial-gradient(circle, var(--accent) 0%, transparent 70%);"></div>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="footer-logo">
            <div class="footer-logo-icon">🥑</div>
            <span class="footer-logo-name">Fruitline Trading</span>
          </div>
          <p>Tanzania's trusted partner for premium avocado exports. Connecting East African growers to global markets with integrity and care.</p>
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
            <li><a href="#">Hass Avocados</a></li>
            <li><a href="#">Fuerte Avocados</a></li>
            <li><a href="#">Certified Organic</a></li>
            <li><a href="#">Custom Packaging</a></li>
            <li><a href="#">Product Catalogue</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Company</h5>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Farms</a></li>
            <li><a href="#">Certifications</a></li>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Trade Info</h5>
          <ul>
            <li><a href="#">Export Markets</a></li>
            <li><a href="#">Incoterms & Pricing</a></li>
            <li><a href="#">Logistics Partners</a></li>
            <li><a href="#">Quality Standards</a></li>
            <li><a href="#">Contact Us</a></li>
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

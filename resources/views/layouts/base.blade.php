<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Website Blog')</title>
    <meta name="description" content="@yield('meta_description', 'A simple website blog built with Laravel Blade templates')" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Merriweather:wght@700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  </head>
  <body>
    <a class="skip-link" href="#main-content">Skip to content</a>

    <header class="site-header" role="banner" aria-label="Global header">
      <div class="container">
        <div class="brand">
          <a href="/" class="brand-link">Website Blog</a>
        </div>
        <nav class="site-nav" role="navigation" aria-label="Main navigation">
          <ul class="nav-list">
            <li><a href="/" class="nav-link {{ request()->is('/') ? 'is-active' : '' }}">Home</a></li>
            <li><a href="/about" class="nav-link {{ request()->is('about') ? 'is-active' : '' }}">About</a></li>
            <li><a href="/blog" class="nav-link {{ request()->is('blog') ? 'is-active' : '' }}">Blog</a></li>
            <li><a href="/contact" class="nav-link {{ request()->is('contact') ? 'is-active' : '' }}">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main id="main-content" class="site-main" role="main">
      <div class="container">
        @yield('content')
      </div>
    </main>

    <footer class="site-footer" role="contentinfo">
      <div class="container footer-grid">
        <p class="muted">© {{ date('Y') }} Website Blog. All rights reserved.</p>
        <ul class="footer-nav">
          <li><a href="/" class="footer-link">Home</a></li>
          <li><a href="/about" class="footer-link">About</a></li>
          <li><a href="/blog" class="footer-link">Blog</a></li>
          <li><a href="/contact" class="footer-link">Contact</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>

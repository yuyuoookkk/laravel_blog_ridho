@extends('layouts.base')

@section('title', 'Blog · Website Blog')
@section('meta_description', 'Browse the latest articles on design, development, and content.')

@section('content')
  <header class="stack-sm">
    <h1 class="page-title">Blog</h1>
    <p class="muted">Six articles to get you started.</p>
  </header>

  <div class="grid grid-3">
    <article class="card">
      <div class="card-body">
        <a class="eyebrow" href="/blog">Productivity</a>
        <h2 class="card-title">
          <a href="/blog/microbreaks-productivity" class="card-link">Boost Your Productivity with Microbreaks</a>
        </h2>
        <p class="card-excerpt">Short breaks that sharpen focus and protect your energy.</p>
        <p class="meta">Jan 12, 2025 • 6 min read</p>
      </div>
    </article>

    <article class="card">
      <div class="card-body">
        <a class="eyebrow" href="/blog">CSS</a>
        <h2 class="card-title">
          <a href="/blog/css-tips-clean-ui" class="card-link">10 CSS Tips for Clean UI</a>
        </h2>
        <p class="card-excerpt">Spacing, scale, and sensible defaults for polished design.</p>
        <p class="meta">Feb 02, 2025 • 8 min read</p>
      </div>
    </article>

    <article class="card">
      <div class="card-body">
        <a class="eyebrow" href="/blog">Blogging</a>
        <h2 class="card-title">
          <a href="/blog/start-a-tech-blog-2025" class="card-link">How to Start a Tech Blog in 2025</a>
        </h2>
        <p class="card-excerpt">Choose a niche, set a cadence, and publish consistently.</p>
        <p class="meta">Mar 15, 2025 • 9 min read</p>
      </div>
    </article>

    <article class="card">
      <div class="card-body">
        <a class="eyebrow" href="/blog">Writing</a>
        <h2 class="card-title">
          <a href="/blog/content-that-converts" class="card-link">Writing Content That Converts</a>
        </h2>
        <p class="card-excerpt">Structure, clarity, and strong calls to action.</p>
        <p class="meta">Apr 03, 2025 • 7 min read</p>
      </div>
    </article>

    <article class="card">
      <div class="card-body">
        <a class="eyebrow" href="/blog">Design</a>
        <h2 class="card-title">
          <a href="/blog/minimalist-design-guide" class="card-link">The Minimalist Design Guide</a>
        </h2>
        <p class="card-excerpt">Whitespace, hierarchy, and intentional constraints.</p>
        <p class="meta">May 08, 2025 • 5 min read</p>
      </div>
    </article>

    <article class="card">
      <div class="card-body">
        <a class="eyebrow" href="/blog">Accessibility</a>
        <h2 class="card-title">
          <a href="/blog/web-accessibility-basics" class="card-link">Understanding Web Accessibility Basics</a>
        </h2>
        <p class="card-excerpt">Make experiences inclusive by default.</p>
        <p class="meta">Jun 21, 2025 • 6 min read</p>
      </div>
    </article>
  </div>
@endsection

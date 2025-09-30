@extends('layouts.base')

@section('title', 'Home · Website Blog')
@section('meta_description', 'Discover our most popular blog articles and supporting reads.')

@section('content')
  <section class="stack-lg">
    <header class="stack-sm">
      <h1 class="page-title">Popular Articles</h1>
      <p class="muted">Our readers loved these. Here are the top three picks.</p>
    </header>

     Top 3 popular articles 
    <div class="grid grid-3">
      <article class="card">
        <div class="card-body">
          <a class="eyebrow" href="/blog">Productivity</a>
          <h2 class="card-title">
            <a href="/blog/microbreaks-productivity" class="card-link">Boost Your Productivity with Microbreaks</a>
          </h2>
          <p class="card-excerpt">Learn how short, intentional breaks can increase focus and reduce burnout.</p>
          <p class="meta">Jan 12, 2025 • 6 min read</p>
        </div>
      </article>

      <article class="card">
        <div class="card-body">
          <a class="eyebrow" href="/blog">CSS</a>
          <h2 class="card-title">
            <a href="/blog/css-tips-clean-ui" class="card-link">10 CSS Tips for Clean UI</a>
          </h2>
          <p class="card-excerpt">From spacing to typography, use these techniques to polish your interfaces.</p>
          <p class="meta">Feb 02, 2025 • 8 min read</p>
        </div>
      </article>

      <article class="card">
        <div class="card-body">
          <a class="eyebrow" href="/blog">Blogging</a>
          <h2 class="card-title">
            <a href="/blog/start-a-tech-blog-2025" class="card-link">How to Start a Tech Blog in 2025</a>
          </h2>
          <p class="card-excerpt">Everything you need to get started, from niche to publishing cadence.</p>
          <p class="meta">Mar 15, 2025 • 9 min read</p>
        </div>
      </article>
    </div>
  </section>

  <section class="stack-lg">
    <header class="stack-sm">
      <h2 class="section-title">More to Read</h2>
      <p class="muted">Two more supporting articles to explore.</p>
    </header>

     Two supporting articles 
    <div class="grid grid-2">
      <article class="card">
        <div class="card-body">
          <a class="eyebrow" href="/blog">Writing</a>
          <h3 class="card-title">
            <a href="/blog/content-that-converts" class="card-link">Writing Content That Converts</a>
          </h3>
          <p class="card-excerpt">Principles for compelling headlines, structure, and calls to action.</p>
          <p class="meta">Apr 03, 2025 • 7 min read</p>
        </div>
      </article>

      <article class="card">
        <div class="card-body">
          <a class="eyebrow" href="/blog">Design</a>
          <h3 class="card-title">
            <a href="/blog/minimalist-design-guide" class="card-link">The Minimalist Design Guide</a>
          </h3>
          <p class="card-excerpt">A practical approach to clarity, whitespace, and hierarchy.</p>
          <p class="meta">May 08, 2025 • 5 min read</p>
        </div>
      </article>
    </div>
  </section>
@endsection

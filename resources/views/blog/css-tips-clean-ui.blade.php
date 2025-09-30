@extends('layouts.base')

@section('title', '10 CSS Tips for Clean UI · Website Blog')
@section('meta_description', 'Practical CSS techniques to make your UI cleaner and more consistent.')

@section('content')
  <article class="prose">
    <header class="stack-xs">
      <a class="eyebrow" href="/blog">CSS</a>
      <h1>10 CSS Tips for Clean UI</h1>
      <p class="meta">Feb 02, 2025 • 8 min read</p>
    </header>

    <ol>
      <li>Use a consistent spacing scale with CSS variables.</li>
      <li>Limit color usage to a small, purposeful palette.</li>
      <li>Define typographic rhythm and stick to it.</li>
      <li>Prefer flexbox for common layouts; grid for 2D complexity.</li>
      <li>Adopt sensible defaults for links, buttons, and cards.</li>
      <li>Use :focus-visible to improve keyboard accessibility.</li>
      <li>Keep shadows subtle; prioritize contrast and hierarchy.</li>
      <li>Test at common breakpoints; design mobile-first.</li>
      <li>Remove unnecessary borders; use spacing and color instead.</li>
      <li>Document decisions in a simple style guide.</li>
    </ol>
    <p><a href="/blog" class="link">← Back to Blog</a></p>
  </article>
@endsection

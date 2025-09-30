@extends('layouts.base')

@section('title', 'Understanding Web Accessibility Basics · Website Blog')
@section('meta_description', 'Make experiences inclusive by default.')

@section('content')
  <article class="prose">
    <header class="stack-xs">
      <a class="eyebrow" href="/blog">Accessibility</a>
      <h1>Understanding Web Accessibility Basics</h1>
      <p class="meta">Jun 21, 2025 • 6 min read</p>
    </header>

    <p>
      Accessibility ensures your product works for everyone. Start with semantics, color contrast, and keyboard support.
    </p>
    <h2>Semantics First</h2>
    <p>Use native HTML elements—headings, lists, buttons—before custom components.</p>
    <h2>Focus States</h2>
    <p>Make sure keyboard users can see where they are at all times.</p>
    <p><a href="/blog" class="link">← Back to Blog</a></p>
  </article>
@endsection

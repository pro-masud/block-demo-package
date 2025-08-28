<?php

$content = sanitize_text_field( $attributes['content'] ) ?? '';
$tag     = 'h' . ( intval( $attributes['level'] ) ?? 1 );
$align     = sanitize_text_field( $attributes['align'] ) ?? 'left';
$color     = sanitize_text_field( $attributes['color'] ) ?? 'left';

?>

<div class="custom-container">
    <section class="card-grid">
      <!-- Card 1 -->
      <article class="card">
        <div class="card-media">
          <img src="https://picsum.photos/600/400?random=1" alt="Sample image" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Card title</h3>
          <p class="card-text">
            This is a short description to illustrate the card content. It should be concise and helpful.
          </p>
          <div class="card-meta">
            <span class="badge">New</span>
            <span class="price">$29</span>
          </div>
          <div class="card-actions">
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-outline">Details</button>
          </div>
        </div>
      </article>
    </section>
  </div>
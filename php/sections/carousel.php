<?php
$carouselSection = section_config([
    'images' => [
        [
            'src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD-k0aVwXxGxNKLVPeTXYTFZzWInIJk1INEHhqLZ6v2GYGX4k5Xv0ToBI9_u0OSoYKRkS0GCehizLVvaLyk1B4Mt6pEj-w6AeREtj_tlsndxPc2reJQz_sGLySzqc-AB4r4CWfU5192vgPI1YBSmcoQBeeuq9N1It3SH5mjY6gs9aaU7HPSgtOxrhDr9I3rpn7JPSsNPfdsGnz5xsjkE3UlF1Qowb3WTdWwc_XNRATbDq9yy5jsvhXNeb6_7bVLWck_ukkPy20hHU_5',
            'alt' => 'Exterior',
            'size' => 'side',
        ],
        [
            'src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuACScKg8qxbDIU7LLP9Lof1fnA4foXWpoimyNZzl0oZZuHNqP_OKosMQ9R_UWfjpdCmHMDDDQMh6aYYWGKKAQBNoUPayjCapToTRCttQy3jjt4LIdzPR3ZYDTzCjx68TX1LlXht_4lcqLIlXsAbBhTNKJoiCG4qY5YYN6ObEtOuIwd07gbtMOIUX-W3g1ihik4F3DYJJevgXif5O1zAHU4yv-TR-S-TvDith0V71H-sqrZXCr59FfqWu4wP6VU1ZHkgHjdub4Nvs7Mv',
            'alt' => 'Main Feature',
            'size' => 'main',
        ],
        [
            'src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCL6hw6u0flpemqvbvO31kdl0sw9PwMwi7-HXR3_O6zePzyd0eAhpZ81NCmzBkJ1dEnDS9lcPQ2CnHsem5hKZK03yx2AgkYqxqFRYLzmNEQ0jTQQc0UJey4BD-4wE7KZ7P_TkAInhDy4SYZ-agDpgKFS5qHbQ_LrCR-gFhBVzxG3EZj74m0G5GJSTo5QBgsOn_WMSNo6SbTY8Kj6cXH3cHT_Fq3ki-AmMGsDBuQM6bVJRDN16RuQ620J7KqZokFsZ9ibTWhHGoDmpBp',
            'alt' => 'Interior',
            'size' => 'side',
        ],
    ],
], $carouselSection ?? null);
?>
<section class="carousel-section bg-white">
  <div class="carousel-shell">
    <div class="carousel-viewport">
      <div class="carousel-track">
        <?php foreach ($carouselSection['images'] as $image): ?>
          <div class="carousel-item <?php echo (($image['size'] ?? 'side') === 'main') ? 'carousel-item-main' : 'carousel-item-side'; ?>">
            <img src="<?php echo h($image['src']); ?>" alt="<?php echo h($image['alt']); ?>" class="carousel-image" referrerpolicy="no-referrer">
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="carousel-nav-row" aria-hidden="true">
      <button class="carousel-nav-btn" aria-label="Previous">
        &#8249;
      </button>
      <button class="carousel-nav-btn" aria-label="Next">
        &#8250;
      </button>
    </div>
  </div>
</section>

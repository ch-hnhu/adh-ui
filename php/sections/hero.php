<?php
$heroSection = section_config([
    'title' => 'Effortless customization, exceptional homes',
    'description' => 'Away Digital Home gives builders the tool to present, manage and communicate every home design with clarity - supporting marketing, sales and design studio teams in one connected platform.',
    'highlight' => 'Design options and customisable features are technically unlimited.',
], $heroSection ?? null);
?>
<section class="relative h-[836px] overflow-hidden">
 <div class="absolute inset-0 z-0 overflow-hidden hero-bg">
    <video
        class="w-full h-full object-cover"
        autoplay
        muted
        loop
        playsinline
    >
        <source src="../videos/Screen Recording 2026-04-21 at 15.52.47.mp4" type="video/mp4">
    </video>

    <!-- overlay gradient -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/85"></div>
</div>
  <div class="hero-content relative z-10 text-[#f3f4f6]">
    <div class="hero-textbox space-y-8">
      <h1 class="hero-title font-bold">
          <?php echo h($heroSection['title']); ?>
      </h1>
      <p class="hero-body font-normal">
          <?php echo h($heroSection['description']); ?>
      </p>
      <p class="hero-body font-normal">
          <?php echo h($heroSection['highlight']); ?>
      </p>
    </div>
  </div>
</section>

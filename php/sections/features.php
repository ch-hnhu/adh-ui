<?php
$featureOrder = [
    'Navigation modes',
    'Design and structural options',
    'Finishes, fixtures and color schemes',
    'Gallery',
    'Homebuyer portal',
    'Real-time indicative pricing',
];

$orderedCards = [];
foreach ($featureOrder as $expectedTitle) {
    foreach (($homebuyingFeatures ?? []) as $feature) {
        if (($feature[0] ?? '') === $expectedTitle) {
            $orderedCards[] = $feature;
            break;
        }
    }
}
$fallbackCards = array_filter($homebuyingFeatures ?? [], static function ($feature) use ($orderedCards) {
    return !in_array($feature, $orderedCards, true);
});
$finalCards = array_merge($orderedCards, $fallbackCards);

$featuresSection = section_config([
    'titlePrefix' => 'Built for the',
    'titleHighlight' => 'homebuying experience',
    'description' => 'Designed to help homebuyers explore, understand and personalize every home design with confidence.',
    'video' => [
        'src' => '../videos/feature.mp4', 
    ],
    'cards' => $finalCards,
], $featuresSection ?? null);
?>
<section class="features-section py-20 bg-white min-h-[1472px]">
  <div class="max-w-[1140px] mx-auto w-full">
    <div class="features-hero grid grid-cols-1 lg:grid-cols-2 gap-6 items-center mb-12">
      <div class="features-copy">
        <h2 class="features-title font-bold mb-[19px]">
          <?php echo h($featuresSection['titlePrefix']); ?> <br>
          <span class="text-primary-blue"><?php echo h($featuresSection['titleHighlight']); ?></span>
        </h2>
        <p class="features-intro text-[#262626] font-normal">
          <?php echo h($featuresSection['description']); ?>
        </p>
      </div>
      <div class="features-media">
        <video src="<?php echo h($featuresSection['video']['src']); ?>" class="w-full h-full object-cover" autoplay loop muted playsinline></video>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ($featuresSection['cards'] as $feature): ?>
        <div class="features-card rounded-2xl group">
          <h3 class="features-card-title font-bold"><?php echo h($feature[0]); ?></h3>
          <p class="features-card-subtitle font-medium text-[#262626]"><?php echo h($feature[1]); ?></p>
          <p class="features-card-body font-normal text-[#a8a8a8]"><?php echo h($feature[2]); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

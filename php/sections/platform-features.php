<?php
$platformSection = section_config([
    'titlePrefix' => 'Everything your team needs,',
    'titleSuffix' => 'built into',
    'titleHighlight' => 'one platform',
    'description' => 'From first click to contract signing, Away Digital Home gives homebuilders a complete platform — interactive experiences that move homebuyers toward confidence and commitment, backed by the operational tools your team needs to manage every stage.',
    'items' => $platformFeatures ?? [],
], $platformSection ?? null);
?>
<section class="platform-section">
  <div class="platform-copy">
    <div class="platform-heading-wrap">
      <h2 class="platform-title font-bold text-center">
        <?php echo h($platformSection['titlePrefix']); ?><br>
        <?php echo h($platformSection['titleSuffix']); ?> <span class="text-primary-blue"><?php echo h($platformSection['titleHighlight']); ?></span>
      </h2>
      <p class="platform-intro font-normal text-center">
        <?php echo h($platformSection['description']); ?>
      </p>
    </div>
  </div>

 <div class="platform-rows">
    <?php foreach ($platformSection['items'] as $feature): ?>
      <?php
      $title = $feature[0];
      $keywords = [
          'accurate, photorealistic visuals',
          'present designs with confidence',
          'smoother and more accurate'
      ];
      
      foreach ($keywords as $word) {
          // strpos trả về vị trí của chuỗi, nếu không thấy sẽ trả về false
          if (strpos($title, $word) !== false) {
              $highlightedWord = '<span class="text-[#1542ff]">' . h($word) . '</span>';
              $title = str_replace($word, $highlightedWord, $title);
          }
      }

      $featureBody = $feature[1] . "\n\n" . implode("\n", $feature[2]);
      ?>
      <article class="platform-row">
        <div class="platform-row-image">
          <img src="<?php echo h($feature[3]); ?>" alt="<?php echo h($feature[0]); ?>" class="platform-image">
        </div>
        <div class="platform-row-content">
          <h3 class="platform-row-title font-bold"><?php echo $title; ?></h3>
          <p class="platform-row-body font-normal"><?php echo nl2br(h($featureBody)); ?></p>
        </div>
      </article>
    <?php endforeach; ?>
</div>
</section>

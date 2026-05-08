<?php
$faqSection = section_config([
    'title' => 'Frequently asked questions',
    'items' => $faqs ?? [],
], $faqSection ?? null);
?>
<section class="py-20 bg-white min-h-[851px] flex items-center">
  <div class="max-w-[1140px] min-h-[691] mx-auto px-4 w-full">

    <h2 class="text-4xl font-bold text-center mb-[60px] tracking-tight">
      <?php echo h($faqSection['title']); ?>
    </h2>

    <div class="space-y-4">
      <?php foreach ($faqSection['items'] as $idx => $faq): ?>
        <div data-faq-item class="border-b border-gray-100 last:border-0 overflow-hidden">
          
          <button data-faq-button class="w-full h-[88px] text-left py-6 flex justify-between items-center group">
            <span class="font-bold text-sm md:text-base text-gray-800">
              <?php echo h($faq[0]); ?>
            </span>

            <span class="text-gray-400 group-hover:text-primary-blue transition-colors">
              <span data-icon-plus>+</span>
              <span data-icon-minus class="hidden">-</span>
            </span>
          </button>

          <div data-faq-content class="<?php echo $idx === 0 ? '' : 'hidden'; ?> pb-8 text-sm text-gray-500 font-light leading-relaxed pr-8">
            <?php echo h($faq[1]); ?>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
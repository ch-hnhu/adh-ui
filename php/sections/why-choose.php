<?php

$whyChooseSection = [
    'title' => 'Why choose',
    'titleHighlight' => 'Away Digital Home',
    'items' => [
        [
            'icon' => 'home',
            'title' => 'Sales & Marketing',
            'description' => 'Give your marketing team photorealistic visuals from day one and your sales team a live, interactive tool to present designs, guide decisions and convert more homebuyers.'
        ],
        [
            'icon' => 'cursor',
            'title' => 'Design Studio',
            'description' => 'Help homebuyers arrive at selections prepared and confident. Accurate interactive 3D, real-time pricing and rules-based validation keep appointments efficient.'
        ],
        [
            'icon' => 'search',
            'title' => 'Great commercial outcomes for homebuilders',
            'description' => 'Increase revenue through stronger conversions and higher upgrade spend. Reduce costs through fewer errors and less rework.'
        ],
        [
            'icon' => 'price',
            'title' => 'The best homebuyer journey',
            'description' => 'Help homebuyers visualize and in turn understand their options, so your team spends less time explaining, and decisions move forward with far more speed and confidence.'
        ]
    ]
];


$benefitIcons = [
    'home'   => '<img src="../icons/Home, House.svg" alt="Home" class="w-[45px] h-[45px]" />',
    'cursor' => '<img src="../icons/cursor-click-select.1.svg" alt="Cursor" class="w-[45px] h-[45px]" />',
    'search' => '<img src="../icons/search-loupe.svg" alt="Search" class="w-[45px] h-[45px]" />',
    'price'  => '<img src="../icons/home-modern-price.svg" alt="Price" class="w-[45px] h-[45px]" />',
];
?>
<section class="py-20 bg-white min-h-[876px] flex items-center" id="about">
    <div class="max-w-[1140px] mx-auto w-full">

        <div class="text-center mb-16">
            <h2 class="text-4xl leading-[48px] font-bold tracking-tight">
                <?php echo htmlspecialchars($whyChooseSection['title']); ?>
                <span
                    class="text-primary-blue"><?php echo htmlspecialchars($whyChooseSection['titleHighlight']); ?></span>?
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[24px]">
            <?php foreach ($whyChooseSection['items'] as $benefit): ?>
            <div class="bg-light-gray p-10 rounded-2xl transition-all hover:shadow-lg">

                <div
                    class="w-[60px] h-[60px] text-primary-blue rounded-xl flex items-center justify-center mb-[13px]">
                    <?php echo $benefitIcons[$benefit["icon"]] ?? ""; ?>
                </div>

                <h3 class="w-[442px] h-[34px] text-[28px] leading-[34px] font-bold tracking-tight mb-4">
                    <?php echo htmlspecialchars($benefit["title"]); ?>
                </h3>

                <p class="w-[442px] h-[112px] text-gray-600 text-[16px] leading-[28px] font-light overflow-hidden">
                    <?php echo htmlspecialchars($benefit["description"]); ?>
                </p>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
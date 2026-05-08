<?php
$workflowOrder = [
  'Homebuilder portal',
  'CRM integration',
    
];

$orderedWorkflowCards = [];
foreach ($workflowOrder as $expectedTitle) {
    foreach (($workflowFeatures ?? []) as $feature) {
        if (($feature[0] ?? '') === $expectedTitle) {
            $orderedWorkflowCards[] = $feature;
            break;
        }
    }
}
$workflowFallback = array_filter($workflowFeatures ?? [], static function ($feature) use ($orderedWorkflowCards) {
    return !in_array($feature, $orderedWorkflowCards, true);
});
$finalWorkflowCards = array_merge($orderedWorkflowCards, $workflowFallback);

$workflowSection = section_config([
    'titlePrefix' => 'Built for',
    'titleHighlight' => "your team's workflow",
    'description' => 'One purpose-built platform gives homebuilder teams full control over designs, users and data without relying on disconnected tools.',
    'video' => [
        'src' => '../videos/workflow.mp4',
    ],
    'cards' => $finalWorkflowCards,
], $workflowSection ?? null);
?>
<section class="workflow-section py-20 bg-white min-h-[876px]">
  <div class="max-w-[1140px] mx-auto w-full">
    <div class="workflow-hero grid grid-cols-1 lg:grid-cols-2 gap-6 items-center mb-12">
      
      <div class="workflow-copy">
        <h2 class="workflow-title font-bold mb-[19px]">
          <?php echo h($workflowSection['titlePrefix']); ?> <br>
          <span class="text-primary-blue"><?php echo h($workflowSection['titleHighlight']); ?></span>
        </h2>
        <p class="workflow-intro text-[#262626] font-normal">
          <?php echo h($workflowSection['description']); ?>
        </p>
      </div>
      <div class="workflow-media">
        <video src="<?php echo h($workflowSection['video']['src']); ?>" class="w-full h-full object-cover" autoplay loop muted playsinline></video>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ($workflowSection['cards'] as $feature): ?>
        <div class="workflow-card rounded-2xl">
          <h3 class="workflow-card-title font-bold"><?php echo h($feature[0]); ?></h3>
          <p class="workflow-card-subtitle font-medium text-[#262626]"><?php echo h($feature[1]); ?></p>
          <p class="workflow-card-body font-normal text-[#a8a8a8]"><?php echo h($feature[2]); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

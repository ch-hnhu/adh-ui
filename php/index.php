<?php
require_once __DIR__ . '/sections/_helpers.php';

$sectionStyles = [
    'base',
    'header',
    'hero',
    'features',
    'workflow',
    'carousel',
    'why-choose',
    'platform-features',
    'testimonial',
    'contact-form',
    'faq',
    'footer',
];

$homebuyingFeatures = require __DIR__ . '/data/features.php';
$workflowFeatures = require __DIR__ . '/data/workflow.php';
$platformFeatures = require __DIR__ . '/data/platform-features.php';
$faqs = require __DIR__ . '/data/faqs.php';

$currentPage = $_GET['page'] ?? 'home';
$routes = [
    'home' => __DIR__ . '/pages/home.php',
    'privacy' => __DIR__ . '/pages/privacy.php',
];

$activePagePath = $routes[$currentPage] ?? __DIR__ . '/pages/not-found.php';
$pageTitle = $currentPage === 'privacy' ? 'Privacy Policy - Away Digital Home' : 'Away Digital Home';

if (!array_key_exists($currentPage, $routes)) {
    http_response_code(404);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'primary-blue': '#1a42f5',
            'light-gray': '#f7f7f8'
          }
        }
      }
    };
  </script>
  <?php foreach ($sectionStyles as $style): ?>
    <link rel="stylesheet" href="./css/<?php echo $style; ?>.css">
  <?php endforeach; ?>
</head>
<body class="font-sans text-[#333] bg-white antialiased">
  <main class="min-h-screen bg-white selection:bg-primary-blue/10 selection:text-primary-blue">
    <?php include __DIR__ . '/sections/header.php'; ?>
    <?php include $activePagePath; ?>
    <?php include __DIR__ . '/sections/footer.php'; ?>
  </main>

  <script src="./js/main.js"></script>
</body>
</html>

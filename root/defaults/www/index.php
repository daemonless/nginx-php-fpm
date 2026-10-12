<?php
// Welcome page, placed in /config/www only when that directory is empty.
// Replace it with your site.
$extensions = get_loaded_extensions();
sort($extensions, SORT_FLAG_CASE | SORT_STRING);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nginx + PHP-FPM</title>
<style>
  body { margin: 0; font-family: system-ui, sans-serif; background: #1b1d22; color: #e6e6e6; }
  main { max-width: 720px; margin: 10vh auto; padding: 0 24px; }
  h1 { font-weight: 600; font-size: 1.8rem; margin: 0 0 8px; }
  h1 span { color: #777bb3; }
  p { line-height: 1.5; color: #b5b5b5; }
  code { background: #2a2d35; padding: 2px 6px; border-radius: 4px; color: #fff; }
  ul { columns: 3; padding-left: 20px; margin-top: 8px; font-size: 0.9rem; color: #c8c8c8; }
  @media (max-width: 600px) { ul { columns: 2; } }
</style>
</head>
<body>
<main>
  <h1>Nginx + <span>PHP <?= htmlspecialchars(PHP_VERSION) ?></span> is running</h1>
  <p>This page lives at <code>/config/www/index.php</code>. Put your site in
     <code>/config/www</code> and it will be served from here. Extensions are
     chosen with the <code>PHP_EXTENSIONS</code> environment variable.</p>
  <p><?= count($extensions) ?> extensions loaded:</p>
  <ul>
<?php foreach ($extensions as $ext): ?>
    <li><?= htmlspecialchars($ext) ?></li>
<?php endforeach; ?>
  </ul>
</main>
</body>
</html>

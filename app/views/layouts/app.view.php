<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= assets("css/style.min.css") ?>">
  <script src="<?= assets("js/main.js") ?>" defer></script>
  <title><?= $site_title ?? 'Document' ?></title>
</head>

<body>
  <header class="l-header"><?php include_once $header ?></header>

  <main class="l-main">
    <?php include $template ?>
  </main>

  <footer class="l-footer"><?php include_once $footer ?></footer>
</body>

</html>
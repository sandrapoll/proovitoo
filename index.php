<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Proovitoo">
  <meta name="author" content="Sandra Poll">
  <link href="main.css" rel="stylesheet">
  <title>Proovitoo</title>
</head>
<body>
  <?php require_once "content.php"; ?>
  <div class="container">
    <?php getFeed("https://flipboard.com/@raimoseero/feed-nii8kd0sz?rss"); ?>
  </div>
</body>
</html>

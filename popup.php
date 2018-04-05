<?php
$url = filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL);
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"x-api-key: yagHJwTm1ugiBwopvJqZjYgJEf1nG8vrVRI63GRz\r\n"
  )
);

$context = stream_context_create($opts);
$file = file_get_contents('https://mercury.postlight.com/parser?url='.$url, false, $context);
$file = json_decode($file, true);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $file['title']; ?></title>
  </head>
  <body>
    <h2><?php echo $file['title']; ?></h2>
    <?php
    if(!empty($file['author'])) {
      echo "<h4 style='color: #505050;'><i> ". $file['author'] ."</i></h4>";
    }

    echo $file['content'];

    ?>
  </body>
</html>

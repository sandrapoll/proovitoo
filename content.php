<?php
function getFeed($feed_url) {

    $content = file_get_contents($feed_url);
    $xml = new SimpleXmlElement($content);

    foreach($xml->channel->item as $entry) {

      $media = $entry->children('media', true);
      $picture = $media->content->attributes();
      $url = $entry->link;
      echo "<div class='article'>";
      $height = '';
      if(!empty($media)){
        // if($picture->height >= 500){
        //   $height=130;
        // }
        echo "<img src='" . $picture->url ."' width='120' height='".$height."' align='right'/>";

      }

      echo "<a href='' class='title' onclick='popUp(\"http://sandrapoll.com/proovitoo/popup.php?url=$url\")'>" . $entry->title . "</a>
      <p class='description'>$entry->description</p></div>";
    }

    echo "
    <script>

    function popUp(url) {
        var popUp = window.open(url, '', 'width=800,height=700,left=400,resizable=yes');
    }
    </script>
    ";
}
?>

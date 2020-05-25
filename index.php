<?php 
    include('simple_html_dom.php');
    $url = 'https://www.facebook.com/anh.david.18294/photos?lst=100029113668362%3A100029113668362%3A1590391416';
    $html = file_get_html($url);
    $html->find('.block_thumb_slide_show',0);
    $html ->load($html ->save());
    $tieude = $html->find('.title_news',0);
    $noidung = $html->find('#article_content',0);
?>
<h1><?php echo $tieude ?></h1>
<div id="content"><?php echo $noidung ?></div>
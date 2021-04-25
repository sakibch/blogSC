//Saves the new entry to entry files and redirects to viewBlog.php


<?php
$filename = $_POST['title']; 
$post = $_POST['content'];
$dateposted = date("YmdHis");
$fp = fopen($filename, 'w');
fwrite($fp, $post);
fclose($fp);
?>
<?php echo "test"; ?>

<?php 

$zip = new ZipArchive;
$zip->open('ebiz2020.zip');
$zip->extractTo('./ebiz2020/');
$zip->close();

?>
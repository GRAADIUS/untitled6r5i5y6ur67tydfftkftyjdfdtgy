<?php
require ('conf.php');
global $yhendus;
$paring = $yhendus->prepare("SELECT id, nalja FROM naljad");
$paring->bind_result($id, $nalja);
$paring->execute();
while($paring->fetch()){
    echo "<ul><li>";
    echo $id.", ".$nalja;
    echo "</li></ul>";
}
$yhendus->close();
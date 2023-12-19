<?php
$kasutaja='ror';
$serverinimi='localhost';
$parool='123456';
$db='naljad';
$yhendus=new mysqli($serverinimi, $kasutaja, $parool, $db);
$yhendus->set_charset('UTF8');
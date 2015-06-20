<?php
try { $database = new PDO('mysql:host=localhost;dbname=ternoc;charset=utf8', 'root', 'root'); }
catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }
$settings = json_decode(file_get_contents('files/settings/settings.json'), true);

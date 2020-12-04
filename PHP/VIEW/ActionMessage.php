<?php
var_dump($_GET);
$message=MessagesManager::findById($_GET['id']);
MessagesManager::delete($message);
header("location: index.php?page=ListeMessage");
<?php
session_destroy();
session_destroy();
$page = 'electrix-home.php';
header("refresh:0; url=" . $page);
exit;
?>
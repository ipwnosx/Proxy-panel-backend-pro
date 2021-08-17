<?php
require_once 'core/init.php';

$user = new User();
$user->logout();


header('Location: /index.php?msg=' . urlencode(base64_encode("You have been successfully logged out!")));


 
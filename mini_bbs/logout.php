<?php
session_start();

$_SESSION = array();
// cookieを削除する
if (ini_set('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name() . '', time() - 42000,
    ['secure'], $params['httponly']);
}
session_destroy();

setcookie('email', '', time()-3600);

header('Location: login.php');
exit();

?>
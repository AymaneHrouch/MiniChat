<?php

include("connect_to_sql.php");

if (strlen($_POST['user']) >= 2 and strlen($_POST['msg']) >= 1 ) {
	
$que = $db->prepare('INSERT INTO minichat(user, msg) VALUES(:user, :msg)');

$que->execute(array(
	'user' => $_POST['user'],
	'msg' => $_POST['msg'],
	));

setcookie('user', $_POST['user'], time() + 36000 * 24);
}

 header('Location: index.php');
?>
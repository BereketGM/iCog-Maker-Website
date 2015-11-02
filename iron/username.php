<?php include_once("phpbb.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpBB conn test</title>
</head>
<body>
<?php
// PHPBB LOGIN AUTH
if ($user->data['user_id'] == ANONYMOUS) {
?>
Welcome, anomalous!
<?php
} else {
?>
Welcome back, <?php echo $user->data['username_clean']; ?> | You have <?php echo $user->data['user_unread_privmsg']; ?> new messages
<?php } ?>
</body>
</html>
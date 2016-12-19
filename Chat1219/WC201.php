<?php
	$userid = $_REQUEST['userid'];

	$dsn = 'mysql:dbname=chat1219;host=127.0.0.1';
	$user = 'root';
	$pw = 'H@chiouji1';
	
	$sql = 'SELECT id, dispname FROM User';
	
	$dbh = new PDO($dsn, $user, $pw); //接続
	$sth = $dbh->prepare($sql);	//SQL準備
	$sth->execute();	//実行
	
	while( ($buff = $sth->fetch()) !== false ){
		$usertable[] = array($buff['id'], $buff['dispname']);
	}
	var_dump($usertable);
	var_dump($usertable[$userid-1][1]);
	$userName = $usertable[$userid-1][1];
	
	//$SystemLog[] = {'SysOP', $userName + ' Login', date("Y-m-d H:i:s")+'\n'};
?>
<html>
<head>
	<title>Chat</title>

</head>
<body>
	<p>
	<form mehtod="POST" action="">
		<?php print $userName; ?> <input type="text" name="Chat">
		<input type="submit" value="Write">
	</form>
	</p>
	
</body>
</html>


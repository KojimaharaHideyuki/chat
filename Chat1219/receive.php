<?php
	$dsn = 'mysql:dbname=chat1219;host=127.0.0.1';
	$user = 'root';
	$pw = 'H@chiouji1';
	
	$sql = 'SELECT * FROM User';
	
	$dbh = new PDO($dsn, $user, $pw); //接続
	$sth = $dbh->prepare($sql);	//SQL準備
	$sth->execute();	//実行
	
	while( ($buff = $sth->fetch()) !== false ){
		$usertable[] = array($buff['id'], $buff['loginid'], $buff['password'], $buff['dispname'], $buff['del_flag'],$buff['lastlogin_date']);
	}
	//print_r($gachaArray);

	$id = $_REQUEST['Login'];
	$pass = $_REQUEST['Pass'];
	
	var_dump($id);
	var_dump($pass);
	var_dump(count($usertable));
	
	$IDchack = false;
	$PASSchack = false;
	
	for ($i = 0; $i < count($usertable); $i++)  {
		$login_name = $usertable[$i][1];
		
		if($id === $login_name) {
			var_dump($login_name);
			$IDchack = true;
			
			$login_pass = $usertable[$i][2];
			if($pass === $login_pass) {
				var_dump($login_pass);
				$PASSchack = true;
				$user_id = $usertable[$i][0];
			}
		}	
	}
	
	if($IDchack === true && $PASSchack === true) {
		header('Location: WC201.php?userid='.urlencode($user_id) );
		var_dump("true");
		var_dump($user_id);
	}
	else {
		header('Location: ER001.php');
		var_dump("false");		
	}
?>


<?php
echo '<form method="post"><button type="submit" name="delete_example">クッキーを削除</button></form>';
if(isset($_POST['delete_example'])){
	setcookie("username","",time()-3600);
	echo "クッキーを食べたよ";
}
setcookie("username","tarou",time()+3600);
if(isset($_COOKIE["username"])){
	echo "hello".$_COOKIE["username"]."さん!!!";
}
else{
	echo "クッキーが無いぞ!!!🍪もう一度アクセスしてみろ！！！";
}
?>

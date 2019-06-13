<?php
	session_start();
	require_once "connectdb.php";

	$sql="SELECT * FROM user WHERE user_login='".$_POST["txtUser"]."' AND user_pwd='".$_POST["txtPwd"]."')";
	$objQ=mysql_query($sql);
	if($objR=mysql_fetch_array($objQ))
	{
		$_SESSION["user_name"]=$objR["user_name"];
		echo "<script language=\"JavaScript\">";
		echo "alert('เข้าสู่ระบบเรียบร้อยแล้ว');";
		echo "window.location='index.php';";
		echo "</script>";
	}
	else
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง!!!');";
		echo "window.location='login.php';";
		echo "</script>";
	}
?>
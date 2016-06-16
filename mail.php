<?php

require("C:\AppServ\www\PHPMailer-master\PHPMailerAutoload.php"); // 匯入PHPmailer類別 
$mail = new PHPMailer();
//$mail->SMTPDebug=1;
$mail->IsSMTP();  //設定使用SMTP方式寄信
$mail->SMTPAuth = true;  //設定SMTP需要驗證


$mail->Host="ssl://smtp.gmail.com";
$mail->Post=465;

//$mail->SMTPSecure = "ssl"; //Gmail的SMTP主機需要使用TLS連線。經測試用SSL連線會失敗。    
//$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機        
//$mail->Port = 587;  //Gamil的SMTP主機的SMTP埠位為587埠。經測試用465埠會失敗。

$mail->CharSet="utf-8";
$mail->Username = "sshes1221@gmail.com";
$mail->Password = "ji394rmp4ru,6";  //我的gmail帳號和密碼

$mail->From = "sshes1221@gmail.com"; //設定寄件者信箱
$mail->FromName = "A1033329"; //設定寄件者姓名 
$mail->IsHTML(true); //設定郵件內容為HTML

$mail->Subject = "php期末報到A1033329";
$mail->Body ="<P>A1033329</p><br>    
    172.20.107.97 + 10-C3-7B-24-76-41 ";   //設定郵件內容 

$mail->AddAddress("php@nuk.im","test");
//$mail->AddAddress("sshes1221@gmail.com", "JJ"); //設定 收件者郵件及名稱        
//$mail->AddCC("sshes1221@gmail.com", "JJ"); //設定 副本收件者
//$mail->AddBCC("sshes1221@gmail.com", "JJ"); //設定 密件副本收件者
          

//$mail->AddAttachment("/XXX.rar");
// 附加檔案可以用這種語法(記得把上一行的//去掉)



if(!$mail->Send())
{
	echo "Message was not sent <p>";
	echo "寄信發生錯誤：" . $mail->ErrorInfo;
	exit;
//如果有錯誤會印出原因
}
else{ 
echo "寄信成功";
$mail->Send();
}

?>
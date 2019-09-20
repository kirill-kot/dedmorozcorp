<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$mailAddr = trim($_POST['mail']);
$address = trim($_POST['address']);
$time = trim($_POST['time']);
$date = trim($_POST['date']);
$program = trim($_POST['program']);
$error = '';
	if(!$name) {
		$error = 'Пожалуйста, укажите ваше имя';
	}
	if(!$phone) {
		$error = 'Пожалуйста, укажите ваш номер телефона';
	}
	if(!$mailAddr) {
		$error = 'Пожалуйста, укажите ваш адрес электронной почты';
	}
	if(!$address) {
		$error = 'Пожалуйста, укажите ваш адрес';
	}
	if(!$time) {
		$error = 'Пожалуйста, укажите удобное для вас время';
	}
	if(!$date) {
		$error = 'Пожалуйста, выберите удобноую для вас дату';
	}
	if(!$error) {
$emailTo = trim($_POST['mail']); // адрес куда отправлять письмо, можно несколько через запятую
$emailTo_2 = 'info@animatoric.ru'; // адрес куда отправлять письмо, можно несколько через запятую
$subject = 'Новое сообщение с сайта'; // тема письма
//собираем хтмл письмо
$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml>
	<head>
		<meta http-equiv=" Content-Type " content="text/html; charset=utf-8 " />
		<title>Animatoric аниматоры</title>
		<style type="text/css ">
		body {margin: 0; padding: 0; min-width: 100%!important;}
		.content {width: 100%; max-width: 600px;}
		@media only screen and (min-device-width: 601px) {
		.content {width: 600px !important;}
		.bodycopy {font-size: 8px;}
		}
		.header {padding: 40px 30px 20px 30px;}
		.col480 {width: 480px!important;}
		.bodycopy {color: #ffffff; font-family: sans-serif;}
		@media only screen and (min-device-width: 601px) {
		.content {width: 600px !important;}
		.col480 {width: 480px!important;}
		.bodycopy {color: #ffffff; font-family: sans-serif; font-size: 12px;}
		}
		</style>
	</head>
	<body yahoo bgcolor="#f6f8f1 ">
		<!--[if (gte mso 9)|(IE)]>
		<table width="600 " align="center " cellpadding="0 " cellspacing="0 " border="0 ">
				<tr>
						<td>
		<![endif]-->
						  <table class="content " align="center " cellpadding="0 " cellspacing="0 " border="0 ">
								<tr>
									<td class="header " bgcolor="#ffffff ">
									  <table width="600 " align="left " border="0 " cellpadding="0 " cellspacing="0 ">
										<tr>
											<td style="padding: 20px 0; ">
												<img style="max-width:600px;padding-bottom:0;display:inline!important;vertical-align:bottom;border:0;height:auto;outline:none;text-decoration:none " src="http://animatoric.ru/assets/images/LOGO.jpg " width="480 " height="280 " border="0 " alt=" " / >
											</td>
											</tr>
											<tr>
											<td style="padding: 0; ">
										<!--[if (gte mso 9)|(IE)]>
											  <table width="600 " align="left " cellpadding="0 " cellspacing="0 " border="0 ">
												<tr>
												 <td>
											<![endif]-->
											<table class="col600 " color="#ffffff " align="left " border="0 "  bgcolor="#4cc1e2 " cellpadding="0 " cellspacing="0 " style="width: 100%; max-width: 600px; border-radius: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; ">
											  <tr>
												<td>
												  <table width="600px " color="#ffffff " border="0 " cellspacing="0 " cellpadding="0 " border-radius="20px " style="width: 100%; max-width: 600px; border-radius: 20px; ">
													<tr>
													  <td class="bodycopy " style="padding: 40px; color:#ffffff; ">
														<p style="color: #ffffff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75);">
															Здравствуйте, '.$name .'! </p>
														<p style="color: #ffffff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75);">
															Вы оставили заявку на программу <span style="font-style: bold;"'. $program .'</span> на нашем сайте <a href="http://animatoric.ru/" target="_blank">http://animatoric.ru/</a> </p>
														<p style="color: #ffffff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75);">
															Вы указали дату <span style="text-decoration: underline; font-size: 1em;">' . $date . '</span> и время <span style="text-decoration: underline; font-size: 1em;">' . $time . '</span> по адресу: '.$address.'. Для подтверждения Вашей заявки с Вами свяжется наш специалист в ближайшее время.</p>
														<p style="color: #ffffff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75);">
															Спасибо. Команда Animatoric
														</p>
													  </td>
													</tr>
												  </table>
												</td>
											  </tr>
											</table>
											<!--[if (gte mso 9)|(IE)]>
												  </td>
												</tr>

												<tr>
											<td height="180 " style="padding: 0; ">
										<!--[if (gte mso 9)|(IE)]>
											  <table width="600 " align="left " cellpadding="0 " cellspacing="0 " border="0 ">
												<tr>
												 <td>
											<![endif]-->
											<table class="col600 " align="left " border="0 "  bgcolor="#4bb3ef " cellpadding="0 " cellspacing="0 " style="width: 100%; max-width: 600px; border-radius: 10px 10px 0 0 ; -webkit-border-radius: 10px 10px 0 0 ; -moz-border-radius: 10px 10px 0 0 ; -khtml-border-radius: 10px 10px 0 0 ; ">
											  <tr>
												<td>
												  <table width="600px " border="0 " cellspacing="0 " cellpadding="0 " style="width: 100%; max-width: 600px;">
													<tr>
													  <td width="300px " class="bodycopy " style="padding: 10px 20px 10px 40px; color:#ffffff; ">
														<p style="color: #ffffff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75); font-size: .75em; line-height: 1;">Вы можете связаться с нами по номеру: </p>
														<a style="color: #cbf4ff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75); font-size: 1em; text-decoration: underline; line-height: 1;" href="tel:+79213267179">8 (921) 326-71-79</a>
													  </td>
													  <td width="300px " class="bodycopy " style="padding: 10px 40px 10px 20px; color:#ffffff; ">
														<p style="color: #ffffff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75); font-size: .75em; line-height: 1;">Или написать письмо:</p>
														<a style="color: #cbf4ff; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75); font-size: 1em; text-decoration: underline; line-height: 1;" href="mailto:info@animatoric.ru">info@animatoric.ru</a>
													  </td>
													</tr>
												  </table>
												</td>
											  </tr>
											</table>
											<!--[if (gte mso 9)|(IE)]>
												  </td>
												</tr>

											</table>
											<![endif]-->
											</td>
											</tr>
									</table>
									</td>
								</tr>
							</table>
		<!--[if (gte mso 9)|(IE)]>
						</td>
					</tr>
			</table>
		<![endif]-->
	</body>
</html>

   ';
		$message_2 = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml>
	<head>
		<meta http-equiv=" Content-Type " content="text/html; charset=utf-8 " />
		<title>Animatoric аниматоры</title>
		<style type="text/css ">
		body {margin: 0; padding: 0; min-width: 100%!important;}
		.content {width: 100%; max-width: 600px;}
		@media only screen and (min-device-width: 601px) {
		.content {width: 600px !important;}
		.bodycopy {font-size: 8px;}
		}
		.header {padding: 40px 30px 20px 30px;}
		.col480 {width: 480px!important;}
		.bodycopy {color: #ffffff; font-family: sans-serif;}
		@media only screen and (min-device-width: 601px) {
		.content {width: 600px !important;}
		.col480 {width: 480px!important;}
		.bodycopy {color: #ffffff; font-family: sans-serif; font-size: 12px;}
		}
		</style>
	</head>
	<body yahoo bgcolor="#f6f8f1 ">
	<table class="content " color="#ffffff " align="left " border="0 "  bgcolor="#4cc1e2 " cellpadding="0 " cellspacing="0 " style="background-image: url("http://animatoric.ru/assets/images/bg_snow_dots.png"); background-size: cover; width: 100%; max-width: 600px; border-radius: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; ">
		<td>
		  <table width="600px " color="#ffffff " border="0 " cellspacing="0 " cellpadding="0 " border-radius="20px " style="width: 100%; max-width: 600px; border-radius: 20px; ">
			<tr>
			  <td class="bodycopy " style="padding: 40px;">
				<p style="color: #ebebeb; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75); font-size: 1em;">Новая заявка с сайта от <span style="font-size: 1em; color: #ffffff;"> '.$name .'</span>! </p>
					<p style="color: #ebebeb; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75); font-size: 1em;">Программа <span style="font-size: 1em; color: #ffffff;"> '. $program .'</span> на <span style="font-size: 1em; color: #ffffff;"> ' . $date . '</span> в <span style="font-size: 1em; color: #ffffff;"> '. $time.'</span> по адресу: <span style="font-size: 1em; color: #ffffff;"> '.$address.'</span>. </p>
					<p style="color: #ebebeb; text-shadow: 0 1px 1px rgba(8, 37, 54, 0.75); font-size: 1em;">Номер телефона для связи: <a style="font-size: 1em; color: #ffffff;" href=tel:'.$phone.'> '. $phone .'</a>, почта: <a style="font-size: 1em; color: #ffffff;" href=mailto:'.$mailAddr.'>'.$mailAddr.'</a></p>.

				</p>
			  </td>
			</tr>
		  </table>
		</td>
	  </tr>
	</table>
	</body>
</html>
		';
$smtp = 1; // отправлять ли через личный почтовый ящик, 1 - отправлять, 0 - через хостинг
$__smtp = array(
	"host" => 'smtp.beget.com', // сервер отправки писем (SMTP)
	"auth" => true, // нужна ли авторизация (как правило нужна)
	"secure" => 'ssl', // тип защиты
	"port" => 465, // порт сервера
	"charset" => 'utf-8', // кодировка
	"from" => 'support@animatoric.ru', // имя отправителя
	"addreply" => trim($_POST['email']), // адрес куда отвечать (обязательно)
	"username" => 'support@animatoric.ru', // логин почтового сервера
	"password" => 'start12345', // пароль к почте
);

$fields = "";
function smtpmail($emailTo, $subject, $message)
{
global $success, $__smtp, $smtp;
require_once("PHPMailerAutoload.php");
$mail = new PHPMailer(true);
if($smtp) {$mail->IsSMTP();}
try {
  $mail->Host       = $__smtp['host'];
  $mail->SMTPDebug  = 0;
  $mail->SMTPAuth   = $__smtp['auth'];
  $mail->SMTPSecure = $__smtp['secure'];
  $mail->Port       = $__smtp['port'];
  $mail->CharSet    = 'utf-8';
  $mail->Username   = $__smtp['username'];
  $mail->Password   = $__smtp['password'];
  $mail->addReplyTo('support@animatoric.ru', 'Animatronic mailer system');
  $mail->SetFrom('support@animatoric.ru', 'Animatronic mailer system');
  $mail->MsgHTML($message);
  $mail->Subject = (trim($subject));
  $mail->isHTML(true);
  $to_array = explode(',', $emailTo);
  foreach ($to_array as $emailTo){
   $mail->addAddress($emailTo);
  }
  $mail->Send();
} catch (phpmailerException $e) {
  echo $e->errorMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}
}
smtpmail($emailTo, $subject, $message);
smtpmail($emailTo_2, $subject, $message_2);
			$emailSent = true;
		if($emailSent = true) {
			echo 'success';
		}
	} else {
		echo $error;
	}
}
?>

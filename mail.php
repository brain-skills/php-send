<?php
$yourname = $_POST['yourname'];
$youremail = $_POST['youremail'];
$yourphone = $_POST['yourphone'];

$subject = "Сообщение от «Company Name»";

$to = "geor.ka@mail.ru";
$namefrom = "Company Name";

$headers = "From: $namefrom <$youremail>" . PHP_EOL;
$headers .= "Reply-To: $to" . PHP_EOL;

$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$message = "<p><strong>Имя:</strong> $yourname</p>
\n<p><strong>E-mail:</strong> $youremail</p>
\n<p><strong>Телефон:</strong> $yourphone</p>";

mail($to, $subject, $message, $headers);
?>
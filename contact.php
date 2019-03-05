<?php

$to="kophyokywe07@gmail.com";
$subject="Response from website";
$message="I am very thankful to you";
$header="From: kywe.funwardmyanmar@gmail.com";
if (mail($to, $subject, $message,$header)) {
	echo "Mail send Successfully";
}else{

	echo "Can not send mail";
}


?> 
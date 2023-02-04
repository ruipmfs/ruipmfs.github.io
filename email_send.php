<?php
if(isset($_POST['enviar'])):
	$name = $_POST ["name"];
	$email = $_POST ["email"];
	$subject = $_POST["subject"];
	$message = $_POST ["message"];
	if (mail('rui.pmfs@gmail.com', $subject, $message, 'From: '.$email)):
    echo "<script>location.href='index.html'</script>";
    else:
    echo "Error sending message";
    endif;
endif;
?>
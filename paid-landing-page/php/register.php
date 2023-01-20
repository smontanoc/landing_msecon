<?php

$field_first_name = $_POST['names'];
$field_email = $_POST['email'];
$field_semester = $_POST['semester']
$field_visa = $_POST['visa'];

$mail_to = 'marquisdevry@gmail.com';

$subject = 'MS Applied Economics Information Request'.$field_first_name;

$body_message = 'Potential Applicant Name: '.$field_first_name."\n";

$body_message .= 'Potential Applicant E-mail: '.$field_email."\n";

$body_message .= 'Desired Program Semester: '.$field_semester."\n";

$body_message .= 'F1 Visa Sponsorship Needed: '.$field_visa."\n";

$headers = 'From: '.$field_email."\r\n";

$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		//alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'index.html';
	</script>
<?php
}
?>
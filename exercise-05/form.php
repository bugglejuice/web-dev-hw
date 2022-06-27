<?php

//---------------------------------------------
// WARNING: this doesn't include sanitization
// and validation
//---------------------------------------------
if (isset($_POST['name'], $_POST['email'])) {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
    $type = htmlspecialchars($_POST['type'])
    $dline = htmlspecialchars($_POST['dline'])

    $msg = "$name has requested that you cantact them at $email regarding 
            their $type website. Their description of what they want is as 
            follows: $desc. They would like it done by $dline.";
    $msg = wordwrap($msg,70);
    mail("$email","$name would like to contact you about a website",$msg);

	// show the $name and $email
	echo "Thanks $name for your interest.<br>";
    echo "We will be in touch about your $type website.<br>"
    echo "You have asked for your site to be like the following:<br>"
    echo "'$desc'<br>"
	echo "We will contact you at $email within 24 hours.";
} else {
	echo 'You need to provide your name and email address.';
}

?>

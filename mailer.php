<?php 

if(isset($_POST['submit'])){
	
    $to = "chemumauryn99@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
	$phoneNumber = $_POST['email'];
	$service = $_POST['subject'];
	$movingFrom = $_POST['message'];
	
    
	$headers = "From:" . $from;
    mail($to,$subject,$message,$headers); // sends a copy of the message to the sender
	echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";

    echo '<script>window.location.href = "/free.php";</script>';
    }
    

?>
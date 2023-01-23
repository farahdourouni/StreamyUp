<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$connexion = mysqli_connect("localhost", "streamy", "root", "streamy") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
	if($result){
		$db_msg = "Your contact information is saved successfully.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Error while trying to save contact.";
		$type_db_msg = "error";
	}

}
//l'envoie du mail
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$toEmail = "mandybeatles@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    $mail_msg = "Your contact information is saved successfully.";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "Error while trying to save contact.";
		$type_mail_msg = "error";
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title>Contact page</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  		<link rel="stylesheet" href="contactus.css">
				<title>Contact US </title>
        </head>

        <body>
            <div class="container">
	        	<img src="image/logo.png" style="position:absolute;top:15px;left:-35px;">>
            	<img src="image/titrepage.png" class="main_title">
                <a  href="aboutus.html" class="about-page">About Us</a>
	  		</div>


	  		<section class="contact">
	  			<div class="content">
	  				<h2>Contact Us</h2>
	  				<p> Do you have any question ? Please fill up the form, we will contact you as soon as possible !</p>
	  			</div>

	  			<div class="container2">
	  				<div class="contactInfo">
	  					<div class="box">
	  						<div class="icon"><i class="fa fa-map" aria-hidden="true"></i></div>
	  						<div class="text">
	  							<h3>Address</h3>
	  							<p>38 Rue Molière, <br>Ivry-sur-Seine, France,<br>94200</p>
	  						</div>
	  					</div>

	  					<div class="box">
	  						<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
	  						<div class="text">
	  							<h3>Phone</h3>
	  							<p>+33 1 43 78 34 76</p>
	  						</div>
	  					</div>

	  					<div class="box">
	  						<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
	  						<div class="text">
	  							<h3>Email</h3>
	  							<p>streamyup@hotmail.com</p>
	  						</div>
	  					</div>

	  				</div>


	  					<div class="contactForm">
      	  							<h2>Send Message</h2>
													<form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">

                        <div class="inputBox">
      	  								<input type="text" id="name" name="name" required="required">
      	  								<span>Nom</span>
      	  							</div>

      	  							<div class="inputBox">
      	  								<input type="text" id="email" name="email" required="required">
      	  								<span>Email</span>
													<span id="info" class="info"></span>
      	  							</div>

                        <div class="inputBox">
      	  								<input type="text" id="subject" name="subject" required="required">
      	  								<span>Sujet</span>
      	  							</div>

      	  							<div class="inputBox">
      	  							<textarea id="message" name="message" required="required"></textarea>
      	  								<span>Tape your Message...</span>
      	  							</div>

      	  							<div class="inputBox">
      	  								 <input type="submit" name="send" value="Send"/>
      	  							</div>

                        <div id="statusMessage">
                              <?php if (! empty($db_msg)) { ?>
                                <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                              <?php } ?>
                              <?php if (! empty($mail_msg)) { ?>
                                <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                              <?php } ?>
                      </div>
	  						</form>
	  					</div>
	  				</div>
	  		</section>
	  	</body>


         <nav>
         <ul>
            <li><a href="https://www.facebook.com/StreamyUp-109963971274572/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="https://instagram.com/streamyup?igshid=1vqzw48xyo7q5"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
            <li><a href="https://www.tiktok.com/@streamyup?"><i class="fab fa-tiktok"></i><span>TikTok</span></a></li>
            <li><a href="https://twitter.com/StreamyUp"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
         </ul>
      </nav>

</html>

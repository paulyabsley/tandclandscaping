<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION['name'] = $_POST["name"];
	$_SESSION['telephone'] = $_POST["telephone"];
	$_SESSION['email'] = $_POST["email"];
	$_SESSION['messageSubject'] = $_POST["messageSubject"];
	$_SESSION['message'] = $_POST["message"];

	$name = trim(strip_tags($_SESSION['name']));
	$telephone = trim(strip_tags($_SESSION['telephone']));
	$email = trim(strip_tags($_SESSION['email']));
	$messageSubject = trim(strip_tags($_SESSION['messageSubject']));
	$message = trim(strip_tags($_SESSION['message']));

	// Errors
	$errors = array();
	if(empty($name) || empty($telephone) || empty($email) || empty($message)) {
		$errors[] = '<p>Please complete all the fields.</p>';
	}
	if(!empty($_SESSION['messageSubject'])) {
		$errors[] = '<p>Sorry, there has been a problem with the form. Why not give us a call instead?</p>';
	}
	if(empty($errors)) {
		$to = "yabsleyp@gmail.com";
		// $to = "yabsleyp@gmail.com, jwhite2820@btinternet.com";
		$subject = "Town & Country Landscaping Contact Form";
		$headers = "From: ".$email."\r\n";
		$headers .= "Reply-To: ".$email."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$body = '<html><body>';
		$body .= '<style>body{font-family: Arial, Helvetica, sans-serif;} h1{font: bold 16px Arial, Helvetica, sans-serif; color:#CC3333; margin:10px 0 10px 5px; padding:0; float:left;} p{margin:0 0 10px 5px; padding:0; font: 13px Arial, Helvetica, sans-serif; color:#000;}</style>';
		$body .= '<h1>Town &amp; Country Landscaping Contact Form</h1>';
		$body .= '<p>The below message was sent via the contact form on the Town &amp; Country Landscaping website.</p>';
		// $body .= '<p>Someone has used the contact form on the website to send you a message, the contents of which are displayed below. If the message requires a response use the email address or telephone number provided below, DO NOT REPLY to the address this email came from &mdash; use the email address provided below. If no email address was provided, respond by telephone. If no telephone was provided the person filling the form in neglected to include contact information and there is nothing that can be done. Be weary when responding to messages as it is possible the form may be used to send SPAM or for illegitimate purposes.</p>';
		$body .= '<p><strong>Name: </strong>'.$name.'</p>';
		$body .= '<p><strong>Telelephone: </strong>'.$telephone.'</p>';
		$body .= '<p><strong>Email: </strong>'.$email.'</p>';
		$body .= '<p><strong>Message: </strong>'.$message.'</p></body></html>';

		if(mail($to, $subject, $body, $headers)) {
			$action = "true";
			session_destroy();
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="copyright" content="&copy; Copyright 2010 Town and Country Landscaping" />
<meta name="description" content="Town &amp; Country Landscaping are an established providers of all manner of landscaping services; driveways, patios, walling, fencing, block paviors, gates, brickwork and more." />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19616688-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<title>Town &amp; Country Landscaping | Somerset Landscape Gardeners</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<img src="/images/logo.png" alt="Town &amp; Country Landscaping Logo" id="top" />
		</div>
		<div id="content">
			<div id="contact">
				<img src="images/telelphoneIcon.png" width="40" height="40" alt="Telephone" />
				<ul>
					<li>m: 07714 280095</li>
					<li>&nbsp; t: 01823 257435</li>
				</ul>
			</div>
			<ul>
				<li><a href="#ourWork" title="See pictures of our work">Our Work</a></li>
				<li><a href="#contactUs" title="Contact">Contact</a></li>
			</ul>
			<hr />
			<div id="welcome">
				<h1>Town &amp; Country Landscaping</h1>
				<p>Operating from the county town of Somerset Taunton, Town &amp; Country Landscaping are an established company providing high quality, private landscaping services to the area for over 10 years. Andy Yabsley and John White, the company partners, offer a friendly, professional service from start to finish with emphasis on high standards, whatever the requirements.</p>
				<h2>Driveways, patios and fencing</h2>
				<p>We specialise in driveways, patios and fencing, but also offer a range of other landscaping services such as decking, turfing and brick or stone walling. Close links with other relevant professionals such as builders, tree surgeons and with a range of suppliers means that we are able to deliver almost anything you may wish for in your garden.</p>
				<h2>Oak framed buildings</h2>
				<p>We also have expertise in constructing oak framed buildings, for example garages and other structures for your garden.</p>
				<h2>Garden design</h2>
				<p>We can undertake complete garden make overs to our own design or work with designs from other landscape architects.</p>
			</div>
			<a href="images/l_blockDriveway01.jpg" rel="lightbox" title="Town &amp; Country Landscaping block pavior driveway"><img src="images/s_blockDriveway01.jpg" alt="Block pavior driveway" id="hmPicture" /></a>
			<blockquote cite="Mike and Maggie Blake &mdash; Town &amp; Country Landscaping customer">
				<p>&ldquo;<em>Very many thanks for the excellent work on my greenhouse base (now my second home!) and for our lovely new patio, it has made such a difference. We were very impressed, not only with the quality of your work but also by your entire work ethic. You turned up when you said you would, consulted us at every turn and left all clean and tidy &mdash; you are in great danger of giving the building profession a good name!</em> &mdash; Mike and Maggie Blake</p>
			</blockquote>
			<div id="brett">
				<!--<a href="http://www.brett.co.uk/home/brett_landscaping/brett_approved_installers.htm" title="Brett Approved Installers"><img src="images/brettInstallers.png" alt="Bret Approved Installers" width="200" height="145" /></a>-->
				<p>You can see some pictures of the sort of services we provide here on our website, and if you would like a no obligations quote please give Andy or John a call, on either of the above numbers, so that we can arrange to visit you and discuss your requirements. It may also be possible to arrange to view some of the contracts which we have completed.</p>
				<p>We source and use the best high quality materials to create handsome, usable and convenient outdoor spaces &mdash; from driveways and patios to fencing, gates and decking, or turfing and brick or stone walling &mdash; that can add value to your property. <!--As Brett approved installers we are able to offer <a href="http://www.brett.co.uk/home/brett_landscaping.htm" title="Brett Landscaping Products">their full range of products</a> and you are assured they will be installed to the highest standard. When using their products you will also recieve a 5 year installation guarantee, which is supported by a 10 year concrete product guarantee from Brett. These guarantees are only available through members of the Brett Approved Installer Scheme.--></p>
			</div>
			<blockquote cite="Sue Collard &mdash; Town &amp; Country Landscaping customer">
				<p>&ldquo;<em>Thank you so much for a wonderful job. My friends and family are well impressed and I am over the moon!</em>&rdquo; &mdash; Sue Collard</p>
				</blockquote>
			<hr />
			<div id="examples">
				<h3 id="ourWork">Some examples of our work</h3>
				<p>Select the thumbnails below to see pictures of our work: driveways, fencing, patios, decking, gates, walling and other landscaping services. The pictures will open larger for a better view and with a dark background, you can navigate to the previous and next photos by clicking either the left or right side of the photo or by using the arrow keys on your keyboard. To return to the website click the close button or anywhere outside the picture.</p>
				<a href="images/l_workExample01.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample01.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample02.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample02.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample03.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample03.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample04.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample04.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample05.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample05.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample06.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample06.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample07.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample07.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample08.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample08.jpg" class="pictures" alt=""/></a>
				<blockquote cite="Karen Jones &mdash; Town &amp; Country Landscaping customer">
					<p>&ldquo;<em>Thank you for all your hard work on the driveway and the lawn, we are really pleased with them!</em>&rdquo; &mdash; Karen Jones</p>
				</blockquote>
				<a href="images/l_workExample09.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample09.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample10.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample10.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample11.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample11.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample12.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample12.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample13.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample13.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample14.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample14.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample15.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample15.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample16.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample16.jpg" class="pictures" alt=""/></a>
				<blockquote cite="Peggy Hendy &mdash; Town &amp; Country Landscaping customer">
					<p>&ldquo;<em>Thanks to you both for a job well done, you have completely exceeded our expectations!</em>&rdquo; &mdash; Peggy Hendy</p>
				</blockquote>
				<a href="images/l_workExample17.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample17.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample18.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample18.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample19.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample19.jpg" class="pictures" alt=""/></a>
				<a href="images/l_workExample20.jpg" rel="lightbox[hmExamples]" title=""><img src="images/s_workExample20.jpg" class="pictures" alt=""/></a>
			</div>
			<hr />
			<div id="contactUs">
				<h3>Contact Us</h3>
				<p>If you wish to contact us about the landscaping services we offer or you want to talk through a project, you can do so in several different ways. By telephone on either 07714 280095 or 01823 257435. You can send us an <a href="mailto:jwhite2820@btinternet.com" title="Follow link to send us an email">Email</a> direct or you can use the form below to send us a message. Include your contact details and we will reply as soon as we can. Thank you.</p>
				<?php
					if($action == "true") {
						echo '<h3>Message sent!</h3>
						<p>Thank you for using our contact form. We will be in touch soon to discuss your needs.</p>';
					} else {
						if(!empty($errors)) {
							echo '<div class="errors">';
							foreach($errors as $error) {
								echo $error;
							}
							echo '</div>';
						}
				?>
				<form action="#contactUs" id="contactForm" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>Contact Form</legend>
						<p>
							<label for="name" class="labels">Name</label>
							<input type="text" name="name" id="name" maxlength="75" value="<?php if(isset($_SESSION['name'])) { echo htmlentities($name); } ?>" class="text-input" />
						</p>
						<p>
							<label for="telephone">Telephone</label>
							<input type="text" name="telephone" id="telephone" maxlength="50" value="<?php echo htmlentities($telephone); ?>" class="text-input" />
						</p>
						<p>
							<label for="email">Email Address</label>
							<input type="email" name="email" id="email" maxlength="50" value="<?php echo htmlentities($email); ?>" class="text-input" />
						</p>
						<p class="hp">
							<label for="messageSubject">Subject</label>
							<input type="text" name="messageSubject" id="messageSubject" maxlength="255" value="<?php echo htmlentities($messageSubject); ?>" class="text-input" />
						</p>
						<p>
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="10" cols="300" class="text-area"><?php echo htmlentities($message); ?></textarea>
						</p>
						<p>
							<input type="submit" name="Submit" value="Submit" class="submit" />
						</p>
					</fieldset>
				</form>
				<?php
				}
				?>
			</div>
		</div>
		<div id="footer">
			<p><a href="#top" title="Jump to Top">&uarr; Top</a> | <a href="mailto:jwhite2820@btinternet.com" title="Email us for more information">Email</a> or give us a call on 07714 280095 for more information or a quote</p>
			<p><a href="http://validator.w3.org/check?uri=http://tandclandscaping.co.uk/" title="Follow Link">W3C Valid XHTML 1.0 Strict</a> | Copyright &copy; 2010 Town &amp; Country Landscaping all rights reserved | <a href="http://www.uksmallbusinessdirectory.co.uk/id.asp?CompanyID=127513" title="UK Small Business Directory Listing">UKSBD Listing</a></p>
		</div>
	</div>
</body>
</html>
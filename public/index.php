<?php
require_once('../private/init.php');

session_start();
$action = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["telephone"] = $_POST["telephone"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["messageSubject"] = $_POST["messageSubject"];
	$_SESSION["message"] = $_POST["message"];

	$name = trim(strip_tags($_SESSION["name"]));
	$telephone = trim(strip_tags($_SESSION["telephone"]));
	$email = trim(strip_tags($_SESSION["email"]));
	$messageSubject = trim(strip_tags($_SESSION["messageSubject"]));
	$message = trim(strip_tags($_SESSION["message"]));

	// Errors
	$errors = array();
	if (empty($name) || empty($telephone) || empty($email) || empty($message)) {
		$errors[] = '<p>Please complete all the fields.</p>';
	}
	if (!empty($_SESSION["messageSubject"])) {
		$errors[] = '<p>Sorry, there has been a problem with the form. Why not give us a call instead?</p>';
	}
	if (empty($errors)) {
		$subject = "Town & Country Landscaping Contact Form";
		$headers = "From: " . $email . "\r\n";
		$headers .= "Reply-To: " . $email . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$body = '<html><body>';
		$body .= '<style>body{font-family: Arial, Helvetica, sans-serif;} h1{font: bold 16px Arial, Helvetica, sans-serif; color:#CC3333; margin:10px 0 10px 5px; padding:0; float:left;} p{margin:0 0 10px 5px; padding:0; font: 13px Arial, Helvetica, sans-serif; color:#000;}</style>';
		$body .= '<h1>Town &amp; Country Landscaping Contact Form</h1>';
		$body .= '<p>The below message was sent via the contact form on the Town &amp; Country Landscaping website.</p>';
		$body .= '<p>If the message requires a response use the email address or telephone number provided below.</p>';
		$body .= '<p><strong>Name: </strong>' . $name . '</p>';
		$body .= '<p><strong>Telelephone: </strong>' . $telephone . '</p>';
		$body .= '<p><strong>Email: </strong>' . $email . '</p>';
		$body .= '<p><strong>Message: </strong>' . $message . '</p></body></html>';

		$sent = Mail::send($name, $email, $subject, $body);
		
		if ($sent) {
			$action = true;
			session_destroy();
		}
	}
}

$description = 'Town &amp; Country Landscaping are an established providers of all manner of landscaping services; driveways, patios, walling, fencing, block paviors, gates, brickwork and more.';
$html = new Html('Town &amp; Country Landscaping | Somerset Landscape Gardeners', $description);
echo $html->h;
echo $html->b;
?>
<div class="wrapper">
	<header>
		<img src="images/logo.png" alt="Town &amp; Country Landscaping" class="logo">
	</header>
	<main>
		<div class="menu cf">
			<div class="telephone">
				<img src="images/telelphoneIcon.png" width="40" height="40" alt="Telephone">
				<ul>
					<li>m: 07714 280095</li>
					<li>&nbsp; t: 01823 257435</li>
				</ul>
			</div>
			<ul class="nav">
				<li><a href="#work" title="See examples our work">Our Work</a></li>
				<li><a href="#contact" title="Contact">Contact</a></li>
			</ul>
		</div>
		<div class="intro cf">
			<h1>Town &amp; Country Landscaping</h1>
			<p class="left">Operating from the county town of Somerset Taunton, Town &amp; Country Landscaping are an established company providing high quality, private landscaping services to the area for over 10 years. Andy Yabsley and John White, the company partners, offer a friendly, professional service from start to finish with emphasis on high standards, whatever the requirements.</p>
			<a href="images/l_patio01.jpg" class="pop-up" title="Town &amp; Country Landscaping Garden Patio"><img src="images/s_patio01.jpg" alt="Block pavior garden patio" class="right"></a>
		</div>
		<div class="driveways cf">
			<h2>Driveways, patios and fencing</h2>
			<a href="images/l_blockDriveway01.jpg" class="pop-up" title="Town &amp; Country Landscaping block pavior driveway"><img src="images/s_blockDriveway01.jpg" alt="Block pavior driveway" class="left"></a>
			<p class="right">We specialise in driveways, patios and fencing, but also offer a range of other landscaping services such as decking, turfing and brick or stone walling. Close links with other relevant professionals such as builders, tree surgeons and with a range of suppliers means that we are able to deliver almost anything you may wish for in your garden.</p>
		</div>
		<div class="design cf">
			<h2>Oak framed buildings</h2>
			<div class="left">
				<p>We also have expertise in constructing oak framed buildings, for example garages and other structures for your garden.</p>
				<h2>Garden design</h2>
				<p>We can undertake complete garden make overs to our own design or work with designs from other landscape architects.</p>
			</div>
			<a href="images/l_timberFrame01.jpg" class="pop-up" title="Town &amp; Country Landscaping timber frame garage"><img src="images/s_timberFrame01.jpg" alt="Timber frame car port" class="right"></a>
		</div>
		<blockquote>
			<p>&ldquo;Very many thanks for the excellent work on my greenhouse base (now my second home!) and for our lovely new patio, it has made such a difference. We were very impressed, not only with the quality of your work but also by your entire work ethic. You turned up when you said you would, consulted us at every turn and left all clean and tidy &mdash; you are in great danger of giving the building profession a good name!&rdquo;</p>
			<cite> &mdash;&nbsp;Mike and Maggie&nbsp;Blake</cite>
		</blockquote>
		<div class="services cf">
			<a href="images/l_blockDriveway02.jpg" class="pop-up" title="Town &amp; Country Landscaping block pavior drive and entrance way"><img src="images/s_blockDriveway02.jpg" alt="Block pavior drive and entrance way" class="left"></a>
			<div class="right">
				<p>We source and use the best high quality materials to create handsome, usable and convenient outdoor spaces &mdash; from driveways and patios to fencing, gates and decking, or turfing and brick or stone walling &mdash; that can add value to your property.</p>
				<p>If you would like a no obligations quote please give us a call. We can arrange to visit you and discuss your requirements. It may also be possible to arrange viewings of some of the contracts which we have completed.</p>
			</div>
		</div>
		<blockquote>
			<p>&ldquo;Thank you so much for a wonderful job. My friends and family are well impressed and I am over the moon!&rdquo;</p>
			<cite> &mdash;&nbsp;Sue&nbsp;Collard</cite>
		</blockquote>
		<div id="work" class="portfolio">
			<h2>Our work</h2>
			<p>Click the images below to see examples of projects we've&nbsp;completed.</p>
			<?= $html->displayPortfolioImages(1, 8); ?>
			<blockquote cite="Karen Jones &mdash; Town &amp; Country Landscaping customer">
				<p>&ldquo;Thank you for all your hard work on the driveway and the lawn, we are really pleased with them!&rdquo;</p>
				<cite> &mdash;&nbsp;Karen&nbsp;Jones</p>
			</blockquote>
			<?= $html->displayPortfolioImages(9, 16); ?>
			<blockquote cite="Peggy Hendy &mdash; Town &amp; Country Landscaping customer">
				<p>&ldquo;Thanks to you both for a job well done, you have completely exceeded our expectations!&rdquo;</p>
				<cite> &mdash;&nbsp;Peggy&nbsp;Hendy</cite>
			</blockquote>
			<?= $html->displayPortfolioImages(17, 20); ?>
		</div>
		<div id="contact" class="contact">
			<h2>Contact</h2>
			<p>You can contact us about any of the services we offer or to talk through a project in several different ways. By telephone on either 07714 280095 or 01823 257435, <a href="mailto:jwhite2820@btinternet.com" title="Follow link to send us an email">emailing us directly</a> or using the contact form below.</p>
			<?php
				if ($action) {
					echo '<h3>Message sent!</h3>
					<p>Thank you for using our contact form. We will be in touch soon to discuss your needs.</p>';
				} else {
					if (!empty($errors)) {
						echo '<div class="errors">';
						foreach ($errors as $error) {
							echo $error;
						}
						echo '</div>';
					}
			?>
			<form action="#contact" id="contactForm" method="post">
				<fieldset>
					<legend>Contact Form</legend>
					<div>
						<label for="name" class="labels">Name</label>
						<input type="text" name="name" id="name" maxlength="75" value="<?= isset($name) ? htmlentities($name) : ''; ?>">
					</div>
					<div>
						<label for="telephone">Telephone</label>
						<input type="text" name="telephone" id="telephone" maxlength="50" value="<?= isset($telephone) ? htmlentities($telephone) : ''; ?>">
					</div>
					<div>
						<label for="email">Email Address</label>
						<input type="email" name="email" id="email" maxlength="50" value="<?= isset($email) ? htmlentities($email) : ''; ?>">
					</div>
					<div class="hp">
						<label for="messageSubject">Subject</label>
						<input type="text" name="messageSubject" id="messageSubject" maxlength="255" value="<?= isset($messageSubject) ? htmlentities($messageSubject) : ''; ?>">
					</div>
					<div>
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="10" cols="300"><?= isset($message) ? htmlentities($message) : ''; ?></textarea>
					</div>
					<div>
						<input type="submit" name="submit" value="Send">
					</div>
				</fieldset>
			</form>
			<?php
				}
			?>
		</div>
	</main>
	<footer>
		<p><a href="#top" title="Jump to Top">&uarr; Top</a> | <a href="mailto:jwhite2820@btinternet.com" title="Email us for more information">Email</a> or give us a call on 07714 280095 for more information or a quote</p>
		<p>&copy; <?= date('Y'); ?> Town &amp; Country Landscaping | <a href="http://www.uksmallbusinessdirectory.co.uk/id.asp?CompanyID=127513" title="UK Small Business Directory Listing">UKSBD Listing</a></p>
	</footer>
</div>
<?php
echo $html->jq;
echo $html->mp;
echo $html->js;
echo $html->f;
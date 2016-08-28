<?php
  include '../../pezcuckow.com/pezcuckow.com/lib/util.php';
  $email = encodeToCharString('me@pez.io');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pez.io - the shorthand for Pez Cuckow</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Pez.io</h1>
					<h2 class="subtitle">The shorthand for <a href="http://www.pezcuckow.com">www.pezcuckow.com</a></h2>
					<h3 class="subtitle">Get in touch:
						<script>
						var mail = String.fromCharCode(<?php echo $email; ?>)
						function sendEmail() {
						  var address = document.getElementById('mail');
						  window.open('mailto:' + (address.textContent || address.innerText), '_blank');
						}
						document.write('<a id="mail" href="mailto:' + mail + '" onclick="sendEmail()">' + mail + '</a>');
          </script> 
          </h3>
					<b></b>
				</div>
				
			</div>
			<a href="http://www.pezcuckow.com"><img src="assets/img/Pez.png" /></a>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
						<p class="copyright">Copyright &copy; <?php date('Y') ?> <a href="http://www.pezcuckow.com">Pez Cuckow</a></p>
				</div>
			</div>		
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

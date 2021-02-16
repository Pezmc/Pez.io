<?php
include '../../pezcuckow.com/pezcuckow.com/lib/util.php';
$email = encodeToCharString('me@pez.io');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pez.io - the shorthand for Pez Cuckow</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1>Pez.io</h1>
            <h2 class="subtitle">
              The shorthand for
              <a href="http://www.pezcuckow.com">www.pezcuckow.com</a>
            </h2>
            <h3 class="subtitle">
              Get in touch:
              <script>
                const mail = String.fromCharCode(<?php echo $email; ?>)
                function sendEmail() {
                  const address = document.getElementById('mail')
                  window.open(
                    'mailto:' + (address.textContent || address.innerText),
                    '_blank',
                  )
                }
                document.write(
                  '<a id="mail" href="mailto:' +
                    mail +
                    '" onclick="sendEmail()">' +
                    mail +
                    '</a>',
                )
              </script>
            </h3>
          </div>
        </div>
        <a href="http://www.pezcuckow.com"><img src="assets/img/Pez.png" /></a>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <p class="copyright">
              Copyright &copy;
              <?php date('Y'); ?>
              <a href="http://www.pezcuckow.com">Pez Cuckow</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

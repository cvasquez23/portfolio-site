<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //submit form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from = 'From: Portfolio Site';
    $to = 'chris@chrisvasquez.dev';
    $subject = 'Message from chrisvasquez.dev';
    $body = '';

    $body .= 'From: ' . $name . "\r\n";
    $body .= 'Email: ' . $email . "\r\n";
    $body .= 'Message: ' . $message . "\r\n";

    mail($to, $subject, $body, $from);
    header('Location: http://localhost:8080/portfolio-site/index.php#page5');

    $message_sent = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
      integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="http://localhost:8080/portfolio-site/css/fullpage.css"
    />
    <link
      rel="stylesheet"
      href="http://localhost:8080/portfolio-site/css/style.css"
    />

    <link rel="shortcut icon" href="/cv.ico" type="image/x-icon" />
    <title>Chris Vasquez</title>
  </head>
  <body>
    <header>
      <div id="nav" class="menu-collapsed" onclick="menuToggle()">
        <div class="toggler"></div>
        <nav>
          <ul>
            <li>
              <a id="slide1" class="nav-link" onclick="slide1();">Home</a>
            </li>
            <li>
              <a id="slide2" class="nav-link" onclick="slide2()"> About </a>
            </li>
            <li>
              <a id="slide3" class="nav-link" onclick="slide3();">Skills</a>
            </li>
            <li>
              <a id="slide4" class="nav-link" onclick="slide4();">Projects</a>
            </li>
            <li>
              <a id="slide5" class="nav-link" onclick="slide5();">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div id="fullpage">
      <h1>Thanks Bitch</h1>
    </div>
  </body>
</html>

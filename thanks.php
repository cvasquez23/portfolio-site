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
      href="http://localhost:8080/portfolio-sitev/css/fullpage.css"
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
    <div class="section">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <div class="text-center">
              <h1>Thanks for reaching out! I'll get back to you soon!</h1>
              
              <a
                class="ml-auto card-button slide-left"
                href= "https://chrisvasqeuz.dev"
              >
                Go Back <i class="fad fa-chevron-double-down"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/224419b69f.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
      integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
      integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
      integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U="
      crossorigin="anonymous"
    ></script>

    <script src="http://localhost:8080/portfolio-site/js/fullpage.js"></script>
    <script src="http://localhost:8080/portfolio-site/js/script.js"></script>
  </body>
</html>

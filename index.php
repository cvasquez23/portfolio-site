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
      <!-- Landing Section -->
      <div id="section-1" class="section landing" data-anchor="page1">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <div class="text-center">
              <h1>Chris Vasquez</h1>
              <div class="d-inline-flex sub">
                <p><i id="type"></i></p>
                <span class="cursor">|</span>
              </div>
              <div>
                <a id="slide2" class="indicator" onclick="slide2()">
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Landing Section -->

      <!-- About Section -->
      <div id="section-2" class="section about" data-anchor="page2">
        <div
          class="container-fluid content align-items-center d-flex about-card"
        >
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 shadow">
              <h2 class="pt-3">About Me</h2>
              <hr align="left" />
              <p>
                I'm Chris, the current web developer for Isabella County in
                Mount Pleasant, Michigan. I love building and bringing website
                designs to life. Outside of work I love traveling, cooking and
                spending time with my wife and cat. If you're interested in
                working together feel free to contact me at
                <a href="mailto:chris@chrisvasquez.dev" class="email">
                  chris@chrisvasquez.dev</a
                >.
              </p>
              <a
                id="slide3"
                onclick="slide3()"
                class="ml-auto card-button slide-left"
              >
                My Skills <i class="fad fa-chevron-double-down"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End About Section -->

      <!-- Skills Section -->
      <div id="section-3" class="section skills">
        <div class="container-fluid content skills-card">
          <div class="row h-100 align-items-center">
            <div
              class="col-lg-5 offset-lg-7 col-md-8 offset-md-4 col-sm-12 shadow"
            >
              <h2 class="pt-3">Skills</h2>
              <hr align="left" />
              <div class="row">
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i style="color: #ef5f27" class="fab fa-html5"></i><br />
                      <span>HTML5</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-css3-alt" style="color: #4aa1e1"></i>
                      <br />
                      <span>CSS3</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-sass" style="color: #cd669a"></i>
                      <br />
                      <span>Sass</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-bootstrap" style="color: #5b4084"></i>
                      <br />
                      <span>Bootstrap</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-php" style="color: #777bb3"></i>
                      <br />
                      <span>PHP</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-git-alt" style="color: #f0502f"></i>
                      <br />
                      <span>Git</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-npm" style="color: #c53534"></i>
                      <br />
                      <span>npm</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-js-square" style="color: #f0db4f"></i>
                      <br />
                      <span>JavaScript</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-wordpress" style="color: #585c60"></i>
                      <br />
                      <span>WordPress</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-cpanel" style="color: #ff6c2c"></i><br />
                      <span>cPanel</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                  <div class="card">
                    <div class="text-center my-auto">
                      <i class="fab fa-figma" style="color: #0ac980"></i><br />
                      <span>Figma</span>
                    </div>
                  </div>
                </div>
              </div>
              <a
                id="slide4"
                onclick="slide4()"
                class="ml-auto card-button slide-right"
              >
                My Projects
                <i class="fad fa-chevron-double-down"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Skills Section -->

      <!-- Portfolio -->
      <div id="section-4" class="section portfolio">
        <div
          class="container-fluid d-flex content align-items-center justify-content-center portfolio-card"
        >
          <div class="row text-center shadow">
            <div class="col">
              <h2 class="pt-2">Projects</h2>
              <hr class="ml-auto mr-auto" />
              <div class="row">
                <div class="col-lg-6 col-12">
                  <figure class="project-card">
                    <img
                      src="https://chrisvasquez.dev/img/giem1.jpg"
                      alt="Giem Photography"
                    />
                    <figcaption>
                      <h5>Giem Photography</h5>
                    </figcaption>
                    <a data-toggle="modal" data-target="#giemPhotography"></a>
                  </figure>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <figure class="project-card">
                    <img
                      src="https://chrisvasquez.dev/img/isabellacounty.jpg"
                      alt="Isabella County"
                    />
                    <figcaption>
                      <h5>Isabella County</h5>
                    </figcaption>
                    <a data-toggle="modal" data-target="#isabellaCounty"></a>
                  </figure>
                </div>
                <a
                  id="slide5"
                  onclick="slide5()"
                  class="mx-auto card-button slide-left"
                >
                  Contact Me <i class="fad fa-chevron-double-down"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Portfolio Section -->

      <!-- Contact Form Section -->
      <div id="section-5" class="section contact h-100">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <div class="col text-center">
              <h2 class="pt-2">Let's Chat</h2>
              <hr class="ml-auto mr-auto" />
              <form
                class="contact-form"
                method="POST"
                action="https://chrisvasquez.dev/contact-form.php"
              >
                <div class="mb-3 contact-from-item">
                  <label for="inputName" class="visually-hidden">Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="inputName"
                    placeholder="Name"
                  />
                </div>

                <div class="mb-3">
                  <label for="inputEmail" class="visually-hidden">Email</label>
                  <input
                    type="email"
                    name="email"
                    class="form-control"
                    id="inputEmail"
                    placeholder="Email"
                  />
                </div>

                <div class="mb-3">
                  <label for="messageTextarea" class="visually-hidden">
                    Message
                  </label>
                  <textarea
                    class="form-control"
                    name="message"
                    id="messageTextarea"
                    placeholder="Message"
                    rows="3"
                  ></textarea>
                </div>
                <button
                  name="submit"
                  type="submit"
                  class="modal-button slide-inside"
                >
                  Email Me
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>      
      <!-- End Contact Form Section -->
      
    </div>

    <!-- <footer>
      <div
        class="container h-100 d-flex align-items-center justify-content-center"
      >
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <a href="https://github.com/cvasquez23" target="_blank">
              <i class="fab fa-github-square"></i>
            </a>
            <a href="#section-1">
              <p class="copy">&copy; 2019 Chris Vasquez</p>
            </a>
          </div>
        </div>
      </div>
    </footer> -->

    <!-- MODALS -->
    <!-- Giem Photography Modal -->
    <div
      class="modal fade"
      id="giemPhotography"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="giemModalLabel">Giem Photography</h3>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <h5>About This Project</h5>
            <p>
              Giem Photography is a family and event photographer based in Grand
              Rapids, Michigan. With this project I was the front and back-end
              developer and am currently the website administrator. This website
              is still a work in progress, so please excuse the mess and
              excessive cat pictures.
            </p>
            <h5>Technologies Used</h5>
            <ul>
              <li>HTML5</li>
              <li>CSS3</li>
              <li>Sass</li>
              <li>JavaScript</li>
              <li>jQuery</li>
              <li>PHP</li>
              <li>WordPress</li>
            </ul>
          </div>
          <div class="modal-footer justify-content-center">
            <a
              href="https://github.com/cvasquez23/giem-photography#giem-photography"
              class="mr-auto modal-button slide-left"
              target="blank"
            >
              View Code <i class="fab fa-github"></i>
            </a>
            <a
              href="https://www.giemphotography.com"
              class="ml-auto modal-button slide-right"
              target="blank"
            >
              Visit Site <i class="fal fa-window-alt"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Isabella County Modal -->
    <div
      class="modal fade"
      id="isabellaCounty"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="isabellaModalLabel">Isabella County</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <h5>About This Project</h5>
            <p>
              I'm currently the administrator of the Isabella County website. I
              was involved in the production and implementation of the website.
            </p>
            <h5>Technologies Used</h5>
            <ul>
              <li>WordPress</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a
              href="https://www.isabellacounty.org"
              class="ml-auto modal-button slide-right"
              target="blank"
            >
              Visit Site <i class="fal fa-window-alt"></i>
            </a>
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

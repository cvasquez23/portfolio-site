<?php
/**
 * The font-page for Portfolio
 *
 * @package Portfolio
 * @since Portfolio  1.0.0
 */
?>

<?php get_header(); ?>    
    
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
                id="progress"
                href="#section-3"
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
                id="progress"
                href="#section-4"
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
                    <img src="/img/giem1.jpg" alt="Giem Photography" />
                    <figcaption>
                      <h5>Giem Photography</h5>
                    </figcaption>
                    <a data-toggle="modal" data-target="#giemPhotography"></a>
                  </figure>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <figure class="project-card">
                    <img src="/img/isabellacounty.jpg" alt="Isabella County" />
                    <figcaption>
                      <h5>Isabella County</h5>
                    </figcaption>
                    <a data-toggle="modal" data-target="#isabellaCounty"></a>
                  </figure>
                </div>
                <a
                  id="progress"
                  href="#section-5"
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

      <div id="section-5" class="section contact h-100">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <div class="col text-center">
              <h2 class="pt-2">Let's Chat</h2>
              <hr class="ml-auto mr-auto" />
              <button
                class="modal-button slide-inside"
                onclick="location.href='mailto:chris@chrisvasquez.dev'"
              >
                Email Me
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

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
              class="close-btn"
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
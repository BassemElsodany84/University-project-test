<!DOCTYPE html>
<html
  lang="ar"
  dir="ltr"
  class="fontawesome-i2svg-active fontawesome-i2svg-complete"
>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/all.css" />
    <link rel="stylesheet" href="style/all.min.css" />
    <link rel="stylesheet" href="style/bootstrap.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/creatCase.css" />
    <link rel="stylesheet" href="style/login-modal.css" />
    <!--TODO fonts ---------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Parkinsans:wght@300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+IT+Moderna:wght@100..400&family=Protest+Riot&display=swap"
      rel="stylesheet"
    />
    <!--TODO Fonts 2  ----------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Parkinsans:wght@300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+IT+Moderna:wght@100..400&family=Protest+Riot&display=swap"
      rel="stylesheet"
    />
    <title>Taazur</title>
  </head>
  <body>
    <!--* ======================================================== start modal ======================================== -->
    <div class="login-modal">
      <div class="container-modal" id="container">
        <button id="close">X</button>
        <div class="form-container-modal sign-up">
          <form>
            <h1 class="mb-4 fw-bold">Create Account</h1>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <div class="account-type d-flex">
              <button type="button" class="type-btn sign-btn me-4" id="type1">
                Doctor
              </button>
              <button type="button" class="type-btn sign-btn" id="type2">
                Patient
              </button>
            </div>
            <div id="doc-info">
              <p>
                Please provide us the the following : <br />
                - Your personal id <br />
                - Medical License Details <br />
                - Medical Degree (MBBS, MD, etc.)
              </p>
              <input type="file" />
            </div>
            <button type="button" class="sign-btn mobile-signup-btn">
              Sign Up
            </button>
          </form>
        </div>
        <div class="form-container-modal sign-in">
          <form>
            <h1 class="fw-bold">Sign In</h1>
            <div class="social-icons">
              <a href="#" class="icon"
                ><i class="fa-brands fa-google-plus-g"></i
              ></a>
              <a href="#" class="icon"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
              <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
              <a href="#" class="icon"
                ><i class="fa-brands fa-linkedin-in"></i
              ></a>
            </div>
            <span>or use your email password</span>
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <a href="#" class="d-block">Forget Your Password?</a>
            <button type="button" class="sign-btn">Sign In</button>
          </form>
        </div>
        <div class="toggle-btn">
          <button id="register-mobile" onclick="toggleButtonText()">
            Register
          </button>
        </div>
        <div class="toggle-container-modal">
          <div class="toggle">
            <div class="toggle-panel toggle-left">
              <h1>Welcome Back!</h1>
              <p>Enter your personal details to use all of site features</p>
              <button class="hidden sign-btn" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
              <h1>Hello</h1>
              <p>
                Register with your personal details to use all of site features
              </p>
              <button class="hidden sign-btn" id="register">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--! ======================================================== end modal ======================================== -->
    <!--* ======================================================== start navbar ======================================== -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand fw-bold" href="index.html">
            <img src="./imgs/logo2.png" alt="LOGO" width="30" height="50" />
            <span class="logo-text">Taazur</span>
          </a>
          <button
            class="navbar-toggler"
            id="toggle-color"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex justify-content-between"
            >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cases.html">Cases</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blogs </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            </ul>
            <div class="login">
              <button class="btn btn-login nav-link" id="show-login">
                <i class="fa-solid fa-user fs-4"></i>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>
     <!--* ======================================================== start the form ======================================== -->
     <div class="container" >
        <div class="form-container   m-5 p-5 " id="up">
            <h2 class="form-title"><i class="fa-solid fa-file-lines"></i> Medical/Dental Case Submission</h2>
            
            <form id="caseForm" enctype="multipart/form-data">
                <!-- Personal Information Section -->
                <div class="mb-4">
                    <h5 class="mb-3 border-bottom pb-2">Personal Information</h5>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label required-field">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="age" class="form-label required-field">Age</label>
                            <input type="text" class="form-control" id="age" name="age" min="0" max="120" required>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="phone" class="form-label required-field">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="idNumber" class="form-label required-field">ID Number</label>
                            <input type="text" class="form-control" id="idNumber" name="idNumber" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label required-field">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                    </div>
                </div>
                
                <!-- Case Information Section -->
                <div class="mb-4">
                    <h5 class="mb-3 border-bottom pb-2">Case Information</h5>
                    
                    <div class="mb-3">
                        <label class="form-label required-field">Case Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="caseType" id="dental" value="dental" required>
                            <label class="form-check-label" for="dental">
                                Dental اسنان
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="caseType" id="medical" value="medical">
                            <label class="form-check-label" for="medical">
                                Medical بشري
                            </label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label required-field">Case Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="fileAttachment" class="form-label">File Attachment</label>
                        <input class="form-control" type="file" id="fileAttachment" name="fileAttachment" multiple>
                        <div class="form-text">You can upload X-rays, reports, or other relevant documents (PDF, JPG, PNG)</div>
                    </div>
                    <div class="mb-3">
                        <label for="fileAttachment" class="form-label">File Attachment</label>
                        <input class="form-control" type="file" id="fileAttachment" name="fileAttachment" multiple>
                        <div class="form-text">You can upload X-rays, reports, or other relevant documents (PDF, JPG, PNG)</div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary btn-lg btn-submit" onclick="alert('Under Reviewing')">
                        <i class="fa-solid fa-paper-plane me-2"></i> Submit Case
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--* ======================================================== start footer ======================================== -->
    <footer>
        <div class="container py-5 mt-5">
          <button class="up-btn rounded-circle">
            <a class="text-light" href="#up">
              <i class="fa-solid angle fa-angle-up"></i>
            </a>
          </button>
          <div class="row">
            <div class="col-lg-3 footer-logo">
              <a class="fw-bold fs-4 text-black" href="#">
                <img src="./imgs/Logo2.png" alt="LOGO" width="30" height="50" />
                <span class="logo-text">Taazur</span>
              </a>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled footer-list d-flex justify-content-center">
                <li class="d-inline-block ms-4">Home</li>
                <li class="d-inline-block ms-4">About</li>
                <li class="d-inline-block ms-4">Cases</li>
                <li class="d-inline-block ms-4">Blogs</li>
              </ul>
            </div>
            <div class="col-lg-3">
              <p class="text-secondary">
                Copyright © 2025 All rights reserved to Taazur | Made with
                <i
                  class="fa fa-heart"
                  aria-hidden="true"
                  style="color: #3b1e54"
                ></i>
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!--! ======================================================== end footer ======================================== -->
  

      <!--? login-modal link -->
      <script src="js/login-modal.js"></script>
      <!--? custom js -->
      <script src="js/navbar-toggler.js"></script>
      <!--? bootstrap -->
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/all.min.js"></script>
    </body>
  </html>
  
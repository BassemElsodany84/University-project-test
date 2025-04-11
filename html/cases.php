<?php include 'header.php'; ?>

    <!--* ======================================================== start cases ======================================== -->
    <section class="Cases" id="up">
      <div class="container mt-4">
        <div class="row">
            <!-- زر الفلترة في الشاشات الصغيرة -->
            <div class="d-lg-none mb-3 position-relative">
                <button class="btn  btn-show-filter w-100" id="toggleFilter">Filter</button>
                <div class="dropdown-menu p-3 w-100" id="filterMenu" style="display: none; position: absolute; top: 100%; left: 0; z-index: 1050;">
                    <button class="btn btn-filter1 w-100 mb-2 filter-btn" data-category="Med">Med</button>
                    <button class="btn btn-filter2 w-100 mb-3 filter-btn" data-category="Dental">Dental</button>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter1-mobile">
                        <label class="form-check-label" for="filter1-mobile">Filter 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter2-mobile">
                        <label class="form-check-label" for="filter2-mobile">Filter 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="filter3-mobile">
                        <label class="form-check-label" for="filter3-mobile">Filter 3</label>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 removeFilter"> Remove Filter</button>
                    <button class="btn btn-creation w-100 mt-3 " onclick="window.location.href ='createACase.html'"> Create a Case</button>
                  </div>
                </div>
                
                <!-- الفلتراشن في الشاشه الكبيره -->
                <div class="col-lg-3 d-none d-lg-block">
                  <div class="bg-white px-3 py-5">
                    <button class="btn btn-filter1 w-100 mb-2 filter-btn" data-category="Med">Med</button>
                    <button class="btn btn-filter2 w-100 mb-3 filter-btn" data-category="Dental">Dental</button>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="filter1">
                        <label class="form-check-label" for="filter1">Filter 1</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="filter2">
                      <label class="form-check-label" for="filter2">Filter 2</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="filter3">
                      <label class="form-check-label" for="filter3">Filter 3</label>
                    </div>
                    <div class="remove d-flex align-items-center ">
                      <button class="btn btn-danger w-10 mt-3 removeFilter">  <i class="fa-solid fa-trash"></i></button>
                      <span class="w-80 mt-3 ms-2 remove-text  ">Remove Filter</span>
                    </div>
                    <button class="btn btn-creation w-100 mt-3 " onclick="window.location.href ='createACase.html'"> Create a Case</button>
                </div>
            </div>
            
            <!-- الكروت -->
            <div class="col-lg-9">
                <div class="row" id="cardsContainer">
                    <!--  هنا الكاردات هتظهر بJavaScript -->
                </div>
            </div>
        </div>
      </div>
    </section>
<!--! ======================================================== end cases ======================================== -->
<!--? ======================================================== start modals ======================================== -->
<!--* ======================================================== start help modal ======================================== -->
    <div class="modal fade" id="helpModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header"> 
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <h5 class="modal-title ps-3" id="helpModalLabel"> </h5>
              <p class="modal-description px-3 py-1"> </p>
              <div class="modal-body">
                <div class="currency-container ">
                  <select class="form-select currency-select">
                    <option selected>GBP</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="JPY">JPY</option>
                    <option value="AUD">AUD</option>
                  </select>
                  <input type="text" class=" amount-input" placeholder="Amount">
                </div>
                <div class="progress my-4" style="height: 7px;">
                  <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-2">£4,783.32 raised of £10,000 target</p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="hideAmount">
                  <label class="form-check-label" for="hideAmount">Hide donation amount from public view</label>
                </div>
                <button class="btn btn-Continue  mt-3">Continue</button>
              </div>
              <div class="donation-footer">
                <p class="mb-1">DONATE WITH CONFIDENCE</p>
                <div class="icon-container">
                  <p class="footer-paragraph">No platform fees for partners <i class="fa-solid fa-heart"></i></i></p>
                  <p class="footer-paragraph footer-line"> Trusted by millions <i class="fa-solid fa-globe"></i></i></p>
                  <p class="footer-paragraph footer-line"> 100% secure payments <i class="fas fa-lock"></i></p> 
                </div>
              </div>
            </div>
          </div>
        </div>
<!--! ======================================================== end help modal ======================================== -->
<!--* ======================================================== start take modal ======================================== -->
        <div class="modal fade" id="takeModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="takeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row d-none d-md-flex"> 
                    <!-- Left Section -->
                    <div class="col-md-6 mt-4">
                      <input type="text" class="form-control mb-3" placeholder="Name">
                      <input type="text" class="form-control mb-3" placeholder="Phone Number">
                      <input type="email" class="form-control mb-3" placeholder="Email">
                      <button class="btn btn-submit w-100">Send</button>
                    </div>
                    <!-- Right Section -->
                    <div class="col-md-6 text-center">
                      <img class="img-fluid rounded-2" alt="Image">
                      <h5 class="modal-title mt-3" id="takeModalLabel"> </h5>
                      <p class="modal-description"> </p>
                    </div>
                  </div>
                  <!-- Mobile Layout -->
                  <div class="d-md-none"> 
                    <div class="text-center">
                      <img class="img-fluid rounded-2" alt="Image">
                      <h5 class="modal-title mt-3" id="takeModalLabel"> </h5>
                      <p class="modal-description"> </p>
                    </div>
                    <div>
                      <input type="text" class="form-control mb-3" placeholder="Name">
                      <input type="text" class="form-control mb-3" placeholder="Phone Number">
                      <input type="email" class="form-control mb-3" placeholder="Email">
                      <button class="btn btn-submit w-100">Send</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!--! ======================================================== end take modal ======================================== -->
<!--? ======================================================== end modals ======================================== -->
<!--* ======================================================== start footer ======================================== -->
<script src="js/cases.js"></script>
<?php include 'footer.php'; ?>
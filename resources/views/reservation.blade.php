@extends('layouts.main')

@section('main-container')

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-color">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <span class="sb-suptitle sb-mb-30">Reservation</span>
                  <h1 class="sb-mb-30">Mmm...! <br>Your evening <br>will be great!</h1>
                  <p class="sb-text sb-text-lg sb-mb-30">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                  <ul class="sb-breadcrumbs">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="menu-1.html">Contact</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
            <div class="col-lg-5">
              <div class="sb-contact-form-frame">
                <div class="sb-illustration-9">
                  <img src="img/illustrations/reservation.png" alt="envelope" class="sb-envelope-1">
                  <div class="sb-cirkle-1"></div>
                  <div class="sb-cirkle-2"></div>
                  <div class="sb-cirkle-3"></div>
                </div>
                <div class="sb-form-content">
                  <div class="sb-main-content">
                    <h3 class="sb-mb-30">Reservation details</h3>
                    <form id="form">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type="text" name="name" required>
                            <span class="sb-bar"></span>
                            <label>Name</label>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type="tel" name="email" required>
                            <span class="sb-bar"></span>
                            <label>Phone</label>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type='text' name="date" data-language='en' class="datepicker-here sb-datepicker" data-timepicker="true" data-position="bottom left" required>
                            <span class="sb-bar"></span>
                            <label>Time and Date</label>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type="number" name="preson" required>
                            <span class="sb-bar"></span>
                            <label>Person</label>
                          </div>
                        </div>
                      </div>
                      <!-- button -->
                      <button class="sb-btn sb-cf-submit sb-show-success">
                        <span class="sb-icon">
                          <img src="img/ui/icons/arrow.svg" alt="icon">
                        </span>
                        <span>Reserve</span>
                      </button>
                      <!-- button end -->
                    </form>
                  </div>
                  <div class="sb-success-result">
                    <img src="img/ui/success.jpg" alt="success" class="sb-mb-15">
                    <div class="sb-success-title sb-mb-15">Success!</div>
                    <p class="sb-text sb-mb-15">Your message has been sent <br>successfully</p>
                    <!-- button -->
                    <a href="home-1.html" class="sb-btn sb-btn-2">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow-2.svg" alt="icon">
                      </span>
                      <span>Back to home</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- contact info -->
      <section class="sb-p-90-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">01</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Welcome</h3>
                  <p class="sb-text">Montréal, 1510 Rue Sauvé</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">02</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Call</h3>
                  <p class="sb-text">+02 (044) 756-X6-52</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">03</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Write</h3>
                  <p class="sb-text">Cheffemi@mail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact info end -->

      <!-- map -->
      <div class="sb-map-frame">
        <div id="map" class="sb-map"></div>
        <div class="sb-lock"><i class="fas fa-lock"></i></div>
      </div>
      <!-- map end -->

@endsection
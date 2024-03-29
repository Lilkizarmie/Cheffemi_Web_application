@extends('layouts.main')

@section('main-container')
    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner">
        <div class="sb-bg-1">
          <div></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <span class="sb-suptitle sb-mb-30">Hi, new friend!</span>
                  <h1 class="sb-mb-30">We do not <span>cook</span>, <br>we <span>create</span> your <br>emotions!</h1>
                  <p class="sb-text sb-text-lg sb-mb-30">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                  <!-- button -->
                  <a href="/menu" class="sb-btn">
                    <span class="sb-icon">
                      <img src="img/ui/icons/menu.svg" alt="icon">
                    </span>
                    <span>Our menu</span>
                  </a>
                  <!-- button end -->
                  <!-- button -->
                  <a href="/about" class="sb-btn sb-btn-2 sb-btn-gray">
                    <span class="sb-icon">
                      <img src="img/ui/icons/arrow.svg" alt="icon">
                    </span>
                    <span>About us</span>
                  </a>
                  <!-- button end -->
                </div>
              </div>
              <!-- main title end -->
            </div>
            <div class="col-lg-6">
              <div class="sb-ilustration-fix">
                <div class="sb-illustration-1-2">
                  <img src="img/illustrations/1.png" alt="food" class="sb-food-1">
                  <img src="img/illustrations/2.png" alt="food" class="sb-food-2">
                  <img src="img/illustrations/3.png" alt="food" class="sb-food-3">
                  <div class="sb-illu-dialog-1"><span>😋</span> Om-nom-nom...</div>
                  <div class="sb-illu-dialog-2"><span>🥰</span> Sooooo delicious!</div>
                  <div class="sb-cirkle-1"></div>
                  <div class="sb-cirkle-2"></div>
                  <div class="sb-cirkle-3"></div>
                  <div class="sb-cirkle-4"></div>
                  <div class="sb-cirkle-5"></div>
                  <img src="img/illustrations/3.svg" alt="phones" class="sb-pik-1">
                  <img src="img/illustrations/1.svg" alt="phones" class="sb-pik-2">
                  <img src="img/illustrations/2.svg" alt="phones" class="sb-pik-3">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- About text -->
      <section class="sb-about-text sb-p-90-0">
        <div class="sb-bg-1" style="margin-top: 90px">
          <div></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="sb-illustration-2 sb-mb-90">
                <div class="sb-interior-frame">
                  <img src="img/gallery/2.jpg" alt="interior" class="sb-interior" style="object-position: center">
                </div>
                <div class="sb-square"></div>
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
                <div class="sb-cirkle-4"></div>
                <div class="sb-experience">
                  <div class="sb-exp-content">
                    <p class="sb-h1 sb-mb-10">17</p>
                    <p class="sb-h3">Years Experiense</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 align-self-center sb-mb-60">
              <h2 class="sb-mb-60">We are doing more than <br>you expect</h2>
              <p class="sb-text sb-mb-30">Faudantium magnam error temporibus ipsam aliquid neque quibusdam dolorum, quia ea numquam assumenda mollitia dolorem impedit. Voluptate at quis exercitationem officia temporibus adipisci quae totam enim
                dolorum,
                assumenda. Sapiente soluta nostrum reprehenderit a velit obcaecati facilis vitae magnam tenetur
                neque vel itaque inventore eaque explicabo commodi maxime! Aliquam quasi, voluptates odio.</p>
              <p class="sb-text sb-mb-60">Consectetur adipisicing elit. Cupiditate nesciunt amet facilis numquam, nam adipisci qui voluptate voluptas enim obcaecati veritatis animi nulla, mollitia commodi quaerat ex, autem ea
                laborum.</p>
              <img src="img/ui/signature.png" alt="Signature" class="sb-signature sb-mb-30">
            </div>
          </div>
        </div>
      </section>
      <!-- About text end -->

      <!-- features -->
      <section class="sb-features sb-p-0-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">01</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">We are located in the city center</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">02</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Fresh ingredients from organic farms</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">03</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Own fast delivery. 30 min Maximum</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">04</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Professional, experienced chefs</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">05</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">The highest standards of service</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- features end -->

      <!-- short menu -->
      <section class="sb-short-menu sb-p-0-90">
        <div class="sb-bg-2">
          <div></div>
        </div>
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-mb-30">Most <span>popular</span> dishes</h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- slider navigation -->
              <div class="sb-slider-nav">
                <div class="sb-prev-btn sb-short-menu-prev"><i class="fas fa-arrow-left"></i></div>
                <div class="sb-next-btn sb-short-menu-next"><i class="fas fa-arrow-right"></i></div>
              </div>
              <!-- slider navigation end -->
              <!-- button -->
              <a href="/menu" class="sb-btn">
                <span class="sb-icon">
                  <img src="img/ui/icons/menu.svg" alt="icon">
                </span>
                <span>Full menu</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="swiper-container sb-short-menu-slider-3i">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/1.jpg" alt="product">
                  </div>
                  <div class="sb-card-tp">
                    <h3 class="sb-card-title">Chevrefrit au miel</h3>
                    <div class="sb-price"><sub>$</sub> 14</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/2.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/2.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                  </div>
                  <div class="sb-card-tp">
                    <h3 class="sb-card-title">Saumon Gravlax</h3>
                    <div class="sb-price"><sub>$</sub> 9</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/3.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/3.jpg" alt="product">
                    <div class="sb-badge sb-hot"><i class="fas fa-pepper-hot"></i> Hot</div>
                  </div>
                  <div class="sb-card-tp">
                    <h3 class="sb-card-title">Croustillant de poisson</h3>
                    <div class="sb-price"><sub>$</sub> 4</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                  </div>
                  <div class="sb-card-tp">
                    <h3 class="sb-card-title">Stracciatella</h3>
                    <div class="sb-price"><sub>$</sub> 11</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/5.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/5.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                  </div>
                  <div class="sb-card-tp">
                    <h3 class="sb-card-title">Carpaccio de daurade</h3>
                    <div class="sb-price"><sub>$</sub> 6</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- short menu end -->

      <!-- revievs -->
      <section class="sb-reviews sb-p-0-90">
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-mb-30">Reviews <span>about</span> us</h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- slider navigation -->
              <div class="sb-slider-nav">
                <div class="sb-prev-btn sb-reviews-prev"><i class="fas fa-arrow-left"></i></div>
                <div class="sb-next-btn sb-reviews-next"><i class="fas fa-arrow-right"></i></div>
              </div>
              <!-- slider navigation end -->
              <!-- button -->
              <a href="/reviews" class="sb-btn">
                <span class="sb-icon">
                  <img src="img/ui/icons/dialog.svg" alt="icon">
                </span>
                <span>All revievs</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="swiper-container sb-reviews-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">Very tasty</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/1.jpg" alt="Guest">
                    </div>
                    <h4>Emma Newman</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">I have lunch here every day</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/2.jpg" alt="Guest">
                    </div>
                    <h4>Paul Trueman</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">Great service</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li class="sb-empty"><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/3.jpg" alt="Guest">
                    </div>
                    <h4>Viktoria Freeman</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">Cheffemi is amazing!</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/4.jpg" alt="Guest">
                    </div>
                    <h4>Audrey Oldman</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- revievs end -->

      <!-- call to action -->
      <section class="sb-call-to-action">
        <div class="sb-bg-3"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="sb-cta-text">
                <h2 class="sb-h1 sb-mb-15">Free delivery service.</h2>
                <p class="sb-text sb-mb-30">*Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                <!-- button -->
                <a href="/shop" class="sb-btn">
                  <span class="sb-icon">
                    <img src="img/ui/icons/cart.svg" alt="icon">
                  </span>
                  <span>Order delivery</span>
                </a>
                <!-- button end -->
                <!-- button -->
                <a href="/menu" class="sb-btn sb-btn-2 sb-btn-gray">
                  <span class="sb-icon">
                    <img src="img/ui/icons/menu.svg" alt="icon">
                  </span>
                  <span>Menu</span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sb-illustration-8">
                <img src="img/illustrations/delivery.png" alt="reserved" class="sb-reserved">
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
                <div class="sb-cirkle-4"></div>
                <div class="sb-cirkle-5"></div>
                <img src="img/illustrations/2.svg" alt="icon" class="sb-pik-2">
                <img src="img/illustrations/3.svg" alt="icon" class="sb-pik-3">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- call to action end -->

      <!-- discount popup -->
      <div class="sb-popup-frame">
        <div class="sb-popup-body">
          <div class="sb-close-popup">+</div>
          <div class="sb-promo-content">
            <div class="sb-text-frame">
              <h3 class="sb-mb-10"><sup>-</sup> <b class="sb-h1">50</b> <sup>%</sup></h3>
              <h3 class="sb-mb-15">Discount for all* burgers!</h3>
              <p class="sb-text sb-text-sm sb-mb-10">*Et modi itaque praesentium.</p>
              <!-- button -->
              <a href="/product" class="sb-btn sb-ppc">
                <span class="sb-icon">
                  <img src="img/ui/icons/arrow.svg" alt="icon">
                </span>
                <span>Get it now</span>
              </a>
              <!-- button end -->
            </div>
            <div class="sb-image-frame">
              <div class="sb-illustration-4">
                <img src="img/illustrations/burger.png" alt="burger" class="sb-burger">
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- discount popup end -->
@endsection
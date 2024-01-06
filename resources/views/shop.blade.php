@extends('layouts.main')

@section('main-container')

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-xs sb-banner-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <h1 class="sb-h2">Online shop</h1>
                  <ul class="sb-breadcrumbs">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="#">Shop</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- categories -->
      <section class="sb-p-90-60">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <a href="" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                <div class="sb-card-body">
                  <div class="sb-category-icon">
                    <img src="img/categories/1.png" alt="icon">
                  </div>
                  <div class="sb-card-descr">
                    <h3 class="sb-mb-10">Starters</h3>
                    <p class="sb-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-6">
              <a href="" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                <div class="sb-card-body">
                  <div class="sb-category-icon">
                    <img src="img/categories/2.png" alt="icon">
                  </div>
                  <div class="sb-card-descr">
                    <h3 class="sb-mb-10">Main dishes</h3>
                    <p class="sb-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-6">
              <a href="" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                <div class="sb-card-body">
                  <div class="sb-category-icon">
                    <img src="img/categories/3.png" alt="icon">
                  </div>
                  <div class="sb-card-descr">
                    <h3 class="sb-mb-10">Drinks</h3>
                    <p class="sb-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-6">
              <a href="" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                <div class="sb-card-body">
                  <div class="sb-category-icon">
                    <img src="img/categories/4.png" alt="icon">
                  </div>
                  <div class="sb-card-descr">
                    <h3 class="sb-mb-10">Desserts</h3>
                    <p class="sb-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- categories end -->

      <!-- short menu -->
      <section class="sb-short-menu sb-p-0-90">
        <div class="sb-bg-2">
          <div></div>
        </div>
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-cate-title sb-mb-30">Most <span>popular</span> dishes</h2>
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
              <a href="" class="sb-btn">
                <span class="sb-icon">
                  <img src="img/ui/icons/arrow.svg" alt="icon">
                </span>
                <span>View all</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="swiper-container sb-short-menu-slider-4i">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/1.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="product.html">Chevrefrit au miel</a></h4>
                    <div class="sb-price"><sub>$</sub> 14</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/2.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Saumon Gravlax</a></h4>
                    <div class="sb-price"><sub>$</sub> 9</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/3.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="product.html">Stracciatella</a></h4>
                    <div class="sb-price"><sub>$</sub> 9</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Croustillant de poisson</a></h4>
                    <div class="sb-price"><sub>$</sub> 4</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/5.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Carpaccio de daurade</a></h4>
                    <div class="sb-price"><sub>$</sub> 6</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/6.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Chevrefrit au miel</a></h4>
                    <div class="sb-price"><sub>$</sub> 14</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- short menu end -->

      <!-- short menu -->
      <section class="sb-short-menu sb-p-0-90">
        <div class="sb-bg-1" style="margin-top: 50px;">
          <div></div>
        </div>
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-cate-title sb-mb-30">Our <span>Bestsellers</span></h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- slider navigation -->
              <div class="sb-slider-nav">
                <div class="sb-prev-btn sb-short-menu-prev-2"><i class="fas fa-arrow-left"></i></div>
                <div class="sb-next-btn sb-short-menu-next-2"><i class="fas fa-arrow-right"></i></div>
              </div>
              <!-- slider navigation end -->
              <!-- button -->
              <a href="/all-products" class="sb-btn">
                <span class="sb-icon">
                  <img src="img/ui/icons/arrow.svg" alt="icon">
                </span>
                <span>View all</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="swiper-container sb-short-menu-slider-2-4i">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/10.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Croustillant de poisson</a></h4>
                    <div class="sb-price"><sub>$</sub> 14</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/6.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Chevrefrit au miel</a></h4>
                    <div class="sb-price"><sub>$</sub> 14</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/7.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Saumon Gravlax</a></h4>
                    <div class="sb-price"><sub>$</sub> 9</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/8.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Stracciatella</a></h4>
                    <div class="sb-price"><sub>$</sub> 9</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/9.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Croustillant de poisson</a></h4>
                    <div class="sb-price"><sub>$</sub> 4</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="/product" class="sb-cover-frame">
                    <img src="img/menu/10.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="/product">Carpaccio de daurade</a></h4>
                    <div class="sb-price"><sub>$</sub> 6</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="/product" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- short menu end -->

      <!-- team -->
      <section class="sb-p-0-60">
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-cate-title sb-mb-30">They will <span>cook</span> for you</h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- button -->
              <a href="/about" class="sb-btn sb-m-0">
                <span class="sb-icon">
                  <img src="img/ui/icons/arrow.svg" alt="icon">
                </span>
                <span>More about us</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/1.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h4 class="sb-mb-10">Paul Trueman</h4>
                  <p class="sb-text sb-text-sm sb-mb-10">Chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/2.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h3 class="sb-mb-10">Emma Newman</h3>
                  <p class="sb-text sb-text-sm sb-mb-10">Assistant chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/3.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h3 class="sb-mb-10">Oscar Oldman</h3>
                  <p class="sb-text sb-text-sm sb-mb-10">Chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/4.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h3 class="sb-mb-10">Ed Freeman</h3>
                  <p class="sb-text sb-text-sm sb-mb-10">Assistant chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- team end -->

      <!-- promo -->
      <section class="sb-p-0-60">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="sb-promo-frame sb-mb-30">
                <div class="sb-promo-content">
                  <div class="sb-text-frame">
                    <h3 class="sb-mb-10"><sup>-</sup> <b class="sb-h2">50</b> <sup>%</sup></h3>
                    <h3 class="sb-mb-15">Discount for all* burgers!</h3>
                    <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
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
            <div class="col-lg-6">
              <div class="sb-promo-frame sb-mb-30">
                <div class="sb-promo-content">
                  <div class="sb-text-frame">
                    <h3 class="sb-mb-15">Visit Cheffemi and get your coffee*</h3>
                    <h3 class="sb-mb-10"><b class="sb-h2">For free!</b></h3>
                    <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
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
                    <div class="sb-illustration-5">
                      <img src="img/illustrations/cup.png" alt="cup" class="sb-cup">
                      <div class="sb-cirkle-1"></div>
                      <div class="sb-cirkle-2"></div>
                      <div class="sb-cirkle-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- promo end -->

@endsection
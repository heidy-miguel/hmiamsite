@extends('layouts.app')

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h1 data-aos="fade-up">Hospital Materno-Infantil<br>Dr. Pedro Manuel Azancot <br>de Menezes</h1>
          <h4 data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem <br>
          itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</h4>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-book-a-table">Saber Mais</a>
          </div>
        </div>
<!--         <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset('img/hero-img.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div> -->
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
@endsection

@section('main')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sobre Nós</h2>
          <p>Saiba Mais <span>Sobre Nós</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url('{{ asset('img/qq.jpg')}}');" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                O <b>Hospital Materno-Infantil Manuel Pedro Azancot de Menezes</b>,
                abreviadamente designado por HMIAM, é um estabelecimento público de saúde da rede hospitalar de referência nacional, integrado no Serviço Nacional de Saúde, dotado de autonomia administrativa, financeira e patrimonial, para a prestação diferenciada, especializada e qualificada de assistência à saúde materno-infantil.
              </p>
              <p>Constituem objectivos do HMIAM:</p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Prestar assistência médica e de enfermagem especializada de excelência, respeitando os
                tempos de atendimento de acordo com as prioridades clínicas e padrões nacionais de tempos de espera, à mulher e ao neonato;</li>
                <li><i class="bi bi-check2-all"></i> Formar profissionais nas várias especialidades médicas e cirúrgicas e facultar áreas de
                estágios para licenciaturas e pós – graduação no ramo da saúde;</li>
                <li><i class="bi bi-check2-all"></i> Servir de unidade sanitária para dar resposta aos casos da Junta Nacional de Saúde sobre reprodução medicamente assistida.</li>
              </ul>
              <p>
                rege-se, dentre outros diplomas, pelo presente Estatuto, pela Lei de Bases do Sistema Nacional de Saúde, pelo Regime Jurídico de Gestão Hospitalar, pelo Regime Jurídico aplicável aos Hospitais Públicos.
              </p>
              <p>O HMIAM funciona sob a superintendência administrativa e metodológica do Ministro da Saúde,exercida nos termos da lei.</p>

              <div class="position-relative mt-4">
                <a href="#" class="more-btn">Saber Mais <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Yummy?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Partos Assistidos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pacientes Atendidos</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
<!--     <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Yummy Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Starters</h4>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Breakfast</h4>
            </a>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dinner</h4>
            </a>
          </li>

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-1.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-2.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-3.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-4.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-5.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-6.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>

            </div>
          </div>

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-1.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-2.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-3.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-4.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-5.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-6.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>

            </div>
          </div>

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-1.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-2.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-3.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-4.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-5.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-6.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>

            </div>
          </div>

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-1.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-2.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-3.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-4.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-5.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-6.png') }}" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
<!--     <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events / Notícias</h2>
          <p>Esteja <span>a par dos Últimos</span> Acontecimentos</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url('{{ asset('img/events-1.jpg') }}')">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div>

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url('{{ asset('img/events-2.jpg') }}')">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url('{{ asset('img/events-3.jpg') }}')">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="section-header">
          <h2>Directores</h2>
          <p>Conselho <span>Directivo</span></p>
        </div>
        <div class="row gy-4">
          <div class="swipter-chefes">
            <div class="swiper-wrapper">


              <div class="swiper-slide col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                  <div class="member-img">
                    <img src="{{ asset('img/directores/1.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Drª Prof. Manuela Mendes</h4>
                    <span>Directora Geral</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                  <div class="member-img">
                    <img src="{{ asset('img/directores/2.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Drª Elsa Frederico</h4>
                    <span>Directora Clínica</span>
                    <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                  <div class="member-img">
                    <img src="{{ asset('img/directores/4.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Drª Maria Sampaio</h4>
                    <span>Directora Pedagógica</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                  <div class="member-img">
                    <img src="{{ asset('img/directores/3.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Enf. Berlinda dos Santos</h4>
                    <span>Directora de Enfermagem</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                  <div class="member-img">
                    <img src="{{ asset('img/directores/5.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Manuel Júnior</h4>
                    <span>Director Administrativo</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                  </div>
                </div>
              </div>

              <div class="swiper-slide col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                  <div class="member-img">
                    <img src="{{ asset('img/directores/6.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Eng. Nildo Mafala</h4>
                    <span>Director Técnico</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
            <!-- If we need scrollbar -->
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->

    <!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>galeria</h2>
          <p>Veja <span>A Nossa Galeria</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-1.jpg') }}"><img src="{{ asset('img/gallery/gallery-1.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-2.jpg') }}"><img src="{{ asset('img/gallery/gallery-2.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-3.jpg') }}"><img src="{{ asset('img/gallery/gallery-3.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-4.jpg') }}"><img src="{{ asset('img/gallery/gallery-4.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-5.jpg') }}"><img src="{{ asset('img/gallery/gallery-5.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-6.jpg') }}"><img src="{{ asset('img/gallery/gallery-6.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-7.jpg') }}"><img src="{{ asset('img/gallery/gallery-7.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-8.jpg') }}"><img src="{{ asset('img/gallery/gallery-8.jpg') }}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contacto</h2>
          <p>Precisa de Ajuda? <span>Fala Connosco</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Nosso Endereço</h3>
                <p>Rua Lateral ao Condomínio Austin, s/n</p>
                <p>Distrito da Camama</p>
                <p>Província de Luanda</p>
                <p>Angola</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>geral@hmial.gov.ao</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Fala Connosco</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Horários</h3>
                <div><strong>Banco de Urgência:</strong> 24H/24H;
                  <strong>Visitas:</strong> 16H às 17H
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" placeholder="Nome" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

@endsection


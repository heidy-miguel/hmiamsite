@extends('layouts.app')

@push('css')
  <link href="{{ asset('vendor/magnific/magnific-popup.css') }}" rel="stylesheet">
@endpush

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h1 data-aos="fade-up">Hospital Materno-Infantil<br>Dr. Manuel Pedro Azancot <br>de Menezes</h1>
          <h4 data-aos="fade-up" data-aos-delay="50">"... o que quer que se faça, terá que ser bem feito, em busca da perfeição e sem abdicarmos nunca dos nossos princípios"</h4>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="100">
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
          <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <h4 class="title">Quem Somos</h4>
              <p class="fst-italic">
                O <b>Hospital Materno-Infantil Manuel Pedro Azancot de Menezes</b>,
                abreviadamente designado por HMIAM, é um estabelecimento público de saúde da rede hospitalar de referência nacional, integrado no Serviço Nacional de Saúde, dotado de autonomia administrativa, financeira e patrimonial, para a prestação diferenciada, especializada e qualificada de assistência à saúde materno-infantil.
              </p>
              <p>Constituem atribuições do HMIAM:</p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Contribuir na redução da morbimortalidade pelas doenças mais correntes nas suas áreas
                  de jurisdição, incluindo os cuidados materno-infantil;</li>
                <li><i class="bi bi-check2-all"></i> Prestar cuidados de saúde diferenciados na área de Pediatria, Cirurgia, Ginecologia e 
                  Obstetrícia e Neonatologia, tantos inseridos localmente como transferidos das unidades 
                  sanitárias periféricas, através do sistema de referência e contra-referência;
                </li>
                <li><i class="bi bi-check2-all"></i> Realizar procedimentos de procriação medicamente assistida;</li>
                <li><i class="bi bi-check2-all"></i> Desenvolver estudos científicos em saúde reprodutiva e saúde infantil;</li>
                <li><i class="bi bi-check2-all"></i> Exercer as demais atribuições estabelecidas por lei ou incumbidas pelo órgão de 
                superintendência.</li>
              </ul>
              <p>
                Rege-se, dentre outros diplomas, pelo presente Estatuto, pela Lei de Bases do Sistema Nacional de Saúde, pelo Regime Jurídico de Gestão Hospitalar, pelo Regime Jurídico aplicável aos Hospitais Públicos.
              </p>
              <p>O HMIAM funciona sob a superintendência administrativa e metodológica do Ministro da Saúde,exercida nos termos da lei.</p>

              <div class="position-relative mt-4">
                <a href="#" class="more-btn">Saber Mais <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 content position-relative about-img" data-aos="fade-up" data-aos-delay="150">
            <h4>Missão</h4>
            <ul>
                <li><i class="bi bi-check2-all"></i> Prestar assistência médica e de enfermagem especializada de excelência, respeitando os
                tempos de atendimento de acordo com as prioridades clínicas e padrões nacionais de tempos de espera, à mulher e ao neonato;</li>
                <li><i class="bi bi-check2-all"></i> Formar profissionais nas várias especialidades médicas e cirúrgicas e facultar áreas de
                estágios para licenciaturas e pós – graduação no ramo da saúde;</li>
                <li><i class="bi bi-check2-all"></i> Servir de unidade sanitária para dar resposta aos casos da Junta Nacional de Saúde sobre reprodução medicamente assistida.</li>
              </ul>
            <h4>Visão</h4>
            <ul>
              <li><i class="bi bi-check2-all"></i> Desenvolver estudos científicos em saúde reprodutiva e saúde infantil;</li>
              <li><i class="bi bi-check2-all"></i> Realizar procedimentos de procriação medicamente assistida;</li>
              <li><i class="bi bi-check2-all"></i> Contribuir na redução da morbimortalidade pelas doenças mais correntes nas suas áreas
              de jurisdição, incluindo os cuidados materno-infantil;</li>
              <li><i class="bi bi-check2-all"></i> Exercer as demais atribuições estabelecidas por lei ou incumbidas pelo órgão de
              superintendência</li>
            </ul>
            <h4>Valores</h4>
            <ul>
              <li><i class="bi bi-check2-all"></i> Qualidade, segurança e humanização no atendimento;</li>
              <li><i class="bi bi-check2-all"></i> Ética e deontologia profissionais;</li>
              <li><i class="bi bi-check2-all"></i> Trabalho em equipa multidisciplinar e multiprofissional;</li>
              <li><i class="bi bi-check2-all"></i> Disciplina laboral e responsabilidade individual</li>
            </ul>
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
              <h3>Quem foi Manuel Pedro Azancot de Menezes?</h3>
              <p>
                O Dr. que dá nome ao hospital, nasceu em São Tomé e Príncipe e tornou-se especialista em cirurgia-geral e ginecologia pela Universidade de Lisboa.
              </p>
              <p>
              Trabalhou em Angola, Cabo Verde, Portugal, São Tomé e Príncipe e Timor-Leste. Faleceu em Luanda em 1984.</p>
              <div class="text-center">
                <a href="{{ route('perfil.azancot-perfil') }}" class="more-btn">Saber Mais <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Estudos </h4>
                  <p>Começou a frequentar o ensino Primário em São Tomé e Príncipe em 1929.
                      Iniciou o Ensino Secundário no Liceu Diogo Cão, na cidade então denominada Sá da Bandeira, na Huíla.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-h-square"></i>
                  <h4>Trabalho</h4>
                  <p>Iniciou  a carreira como Cirurgião Geral no Hospital São José em Lisboa,
                  onde concluiu a especialidade e posteriormente a de Ginecologia - Obstretícia.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-chat-heart"></i>
                  <h4>Dedicação</h4>
                  <p>Durante 35 anos dedicou-se, com afinco, sabedoria, competência, simplicidade, ética e integridade a uma causa nobre, a medicina.</p>
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
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="220" data-purecounter-duration="1" class="purecounter"></span>
              <p>Camas Disponíveis</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Partos Assistidos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pacientes Atendidos</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Stats Counter Section -->


    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events / Notícias</h2>
          <p>Esteja <span>a par dos Últimos</span> Acontecimentos</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach($articles as $article)
              <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url('{{ Storage::url($article->image) }}')">
                <h3><a href="{{ route('articles.show', [$article->slug]) }}">{{ $article->title }}</a></h3>
                <div class="price align-self-start">{{ date('d - M - Y', strtotime($article->created_at)) }}</div>
                {!! Str::limit($article->body, 250, '...') !!}
              </div> 
            @endforeach

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
                  <div class="member-info text-center">
                    <h4>Drª Maria Sampaio</h4>
                    <span>Directora Pedagógica</span>
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
    <section id="gallery">
      <div class="container">

        <div class="section-header">
          <h2>galeria</h2>
          <p>Veja <span>A Nossa Galeria</span></p>
        </div>

<div class="row">
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/1.jpg') }}">
        <img src="{{ asset('img/gallery/1.jpg') }}" alt="Lights" style="width:100%">
      </a>
    </div>
  </div>
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/2.jpg') }}">
        <img src="{{ asset('img/gallery/2.jpg') }}" alt="Nature" style="width:100%">

      </a>
    </div>
  </div>
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/3.jpg') }}">
        <img src="{{ asset('img/gallery/3.jpg') }}" alt="Fjords" style="width:100%">
      </a>
    </div>
  </div>
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/4.jpg') }}">
        <img src="{{ asset('img/gallery/4.jpg') }}" alt="Lights" style="width:100%">
      </a>
    </div>
  </div>
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/9.jpg') }}">
        <img src="{{ asset('img/gallery/9.jpg') }}" alt="Nature" style="width:100%">

      </a>
    </div>
  </div>
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/6.jpg') }}">
        <img src="{{ asset('img/gallery/6.jpg') }}" alt="Fjords" style="width:100%">
      </a>
    </div>
  </div>
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/7.jpg') }}">
        <img src="{{ asset('img/gallery/7.jpg') }}" alt="Lights" style="width:100%">
      </a>
    </div>
  </div>
  <div class="col-md-3 pb-4">
    <div class="thumbnail">
      <a href="{{ asset('img/gallery/8.jpg') }}">
        <img src="{{ asset('img/gallery/8.jpg') }}" alt="Nature" style="width:100%">
      </a>
    </div>
  </div>
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

        <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form p-3 p-md-4">
          @csrf
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
@push('js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('vendor/magnific/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.thumbnail').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery: {
    enabled: true,
    preload: [0, 2],
    navigateByImgClick: true,
    tPrev: 'Previous (Left arrow key)',
    tNext: 'Next (Right arrow key)',
    tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
  },
  removalDelay: 300,
  mainClass: 'mfp-fade',
  zoom: {
    enabled: true, // By default it's false, so don't forget to enable it

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    // The "opener" function should return the element from which popup will be zoomed in
    // and to which popup will be scaled down
    // By defailt it looks for an image tag:
    opener: function(openerElement) {
      // openerElement is the element on which popup was initialized, in this case its <a> tag
      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }
  // other options
});
});
</script>
@endpush


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blogosfera</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Barra de Navegação(Bootstrap)-->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./assets/images/logo.svg" alt="Logo Blogosfera" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#inicio">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sobre">Sobre</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#blog">Blogs</a>
            </li>

            <li class="nav-item">
              <a
                href="registro.php"
                class="btn btn-primary rounded-pill btn-sm ms-3"
                id="login-btn"
              >
                <i class="fa-solid fa-user me-2"></i> Entrar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Seção de Início -->
    <section
      id="inicio"
      class="min-vh-100 d-flex align-items-center text-center"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1
              data-aos="fade-left"
              class="text-uppercase text-white fw-semibold display-1"
            >
              Bem vindo a <span class="typewriter-text"></span>
              <span class="cursor">|</span>
            </h1>
            <h5 class="text-white mt-3 mb-4" data-aos="fade-right">
              Descubra histórias e notícias de todo o mundo e interaja com elas
              de forma envolvente
            </h5>
            <div data-aos="fade-up" data-aos-delay="50">
              <a
                href="login.html"
                class="btn btn-brand rounded-pill btn-sm me-3"
                >Vamos lá</a
              >
              <a href="#" class="btn btn-light rounded-pill btn-sm me-3"
                >Download</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sobre -->
    <section id="sobre" class="section-padding">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="50"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Sobre nós</h1>
              <div class="line"></div>
              <p>Grupo formado pelos piores que tá tendo</p>
              <i class="fa-solid fa-skull-crossbones"></i>
            </div>
          </div>
        </div>

        <div class="row justify-content-between align-items-center">

          <!-- Texto à esquerda -->
          <div
            class="col-lg-5 order-lg-1 order-2"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <h1>Sobre a Blogosfera</h1>
            <p class="mt-3 mb-4">
              A Blogosfera é um espaço inovador que conecta leitores a conteúdos
              de qualidade sobre os mais variados temas
            </p>
            <div class="d-flex pt-4 mb-3">
              <div class="iconbox me-4">
                <i class="fa-solid fa-globe"></i>
              </div>
              <div>
                <h5>Feito para todos</h5>
                <p>
                  Temos espaço inclusivo, onde qualquer pessoa pode
                  explorar, compartilhar e se conectar com conteúdos de
                  qualidade.
                </p>
              </div>
            </div>

            <div class="d-flex mb-3">
              <div class="iconbox me-4">
                <i class="fa-solid fa-person-running"></i>
              </div>
              <div>
                <h5>Fácil de se usar</h5>
                <p>
                  Com uma interface intuitiva, garantimos que você encontre e
                  publique blogs sem complicações, tornando a experiência leve e
                  prática.
                </p>
              </div>
            </div>

            <div class="d-flex">
              <div class="iconbox me-4">
                <i class="fa-solid fa-sack-xmark"></i>
              </div>
              <div>
                <h5>Totalmente de graça</h5>
                <p>
                  Acreditamos no poder do conhecimento acessível, por isso,
                  oferecemos uma plataforma 100% gratuita para todos os
                  usuários.
                </p>
              </div>
            </div>
          </div>

          <!-- Imagem à direita -->
          <div
            class="col-lg-5 order-lg-2 order-1"
            data-aos="fade-down"
            data-aos-delay="50"
          >
            <img
              src="./assets/images/LogoAmpliada.svg"
              alt="Tiringa Thomas shelby"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- BLOG -->
    <section id="blog" class="section-padding">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">O que está acontecendo?</h1>
              <div class="line"></div>
              <h5 class="text-muted">Confira os blogs mais populares da semana</h5>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
            <div class="image-zoom">
              <div class="image-zoom-wrapper">
                <img src="./assets/images/Blog1.jpg" alt="Dia a Dia" />
              </div>
              <h5 class="mt-4">Os Segredos da Produtividade no Dia a Dia</h5>
              <p>
                Técnicas simples para organizar sua rotina e aumentar sua
                produtividade.
              </p>
              <a href="blog1.html">Leia Mais</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
            <div class="image-zoom">
              <div class="image-zoom-wrapper">
                <img src="./assets/images/Blog2.jpg" alt="Imagem da IA" />
              </div>
              <h5 class="mt-4">
                Inteligência Artificial: Como Ela Está Transformando o Mundo
              </h5>
              <p>
                Descubra como a IA está impactando diferentes setores e o que
                esperar do futuro.
              </p>
              <a href="#">Leia Mais</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
            <div class="team-member image-zoom">
              <div class="image-zoom-wrapper">
                <img src="./assets/images/Blog3.jpg" alt="Viagem" />
              </div>
              <h5 class="mt-4">
                Viagem dos Sonhos: Destinos Incríveis para Conhecer em 2025
              </h5>
              <p>
                Uma seleção de lugares imperdíveis para sua próxima aventura!
              </p>
              <a href="#">Leia Mais</a>
            </div>
          </div>
        </div>
      </div>

 <!-- Botão Veja Mais -->
 <div class="text-center mt-5" 
    data-aos="fade-down" 
    data-aos-delay="35-">
    <a href="#" class="btn btn-primary d-inline-flex align-items-center rounded-5">
      Veja Mais
    </a>
  </div>
</div>
</section>

    <!-- FOOTER -->
    <footer class="bg-dark">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-3 col-sm-3">
              <a href="#"><img src="./assets/images/logo.svg" alt="" /></a>
              <p>Os piores que tá tendo</p>
              <div class="social-icons">
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <h5 class="mb-0 text-white">CONTATO</h5>
              <div class="line"></div>
              <ul>
                <li>Acre, Sena Madureira</li>
                <li>Boca do Caeté</li>
                <li>Telefone foi cortado (Luiz n pagou a conta)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row g-4 justify-content-between">
            <div class="col-auto">
              <p class="mb-0">© Site feito a fins de estudos</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>

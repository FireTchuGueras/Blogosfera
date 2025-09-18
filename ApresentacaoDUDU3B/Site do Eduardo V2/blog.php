<?php
include("conexao.php");

$slug = $_GET['slug'] ?? '';

if (!$slug) {
    header("Location: index.php");
    exit;
}

$sql = "SELECT b.titulo, b.descricao, b.conteudo, b.imagem, b.data_publicacao, u.name AS autor_nome
        FROM blogs b
        JOIN users u ON b.autor_id = u.id
        WHERE b.slug = '".mysqli_real_escape_string($conexao, $slug)."' LIMIT 1";

$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) === 0) {
    echo "Blog não encontrado.";
    exit;
}

$blog = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blogosfera - <?= htmlspecialchars($blog['titulo']) ?></title>

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
        <a class="navbar-brand" href="index.php">
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
              <a class="nav-link" href="index.php#inicio">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#sobre">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#blog">Blogs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Conteúdo da Notícia -->
    <section id="noticia" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-4 fw-bold"><?= htmlspecialchars($blog['titulo']) ?></h1>
            <h2 class="lead text-muted"><?= htmlspecialchars($blog['descricao']) ?></h2>
            <h5>Escrito por: <?= htmlspecialchars($blog['autor_nome']) ?></h5>
            <p class="text-muted"><em>Publicado em <?= date('d/m/Y', strtotime($blog['data_publicacao'])) ?></em></p>
            <img
              src="<?= htmlspecialchars($blog['imagem']) ?>"
              alt="<?= htmlspecialchars($blog['titulo']) ?>"
              class="img-fluid rounded mb-4"
            />
            <div class="text-muted">
              <?= $blog['conteudo'] /* já com tags HTML */ ?>
            </div>
          </div>
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

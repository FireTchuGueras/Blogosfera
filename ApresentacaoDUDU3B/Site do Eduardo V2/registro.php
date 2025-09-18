<?php
session_start();
include("conexao.php");

$erro = "";
$sucesso = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!$name || !$email || !$password) {
        $erro = "Por favor, preencha todos os campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Email inválido.";
    } else {
        // Escapa para evitar SQL Injection
        $nameEscaped = mysqli_real_escape_string($conexao, $name);
        $emailEscaped = mysqli_real_escape_string($conexao, $email);

        // Verifica se email já existe
        $sql = "SELECT id FROM users WHERE email = '$emailEscaped'";
        $res = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($res) > 0) {
            $erro = "Este email já está cadastrado.";
        } else {
            // Cria hash da senha
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $sqlInsert = "INSERT INTO users (name, email, password) VALUES ('$nameEscaped', '$emailEscaped', '$passwordHash')";
            if (mysqli_query($conexao, $sqlInsert)) {
                $sucesso = "Conta criada com sucesso! <a href='login.php'>Faça login aqui</a>.";
            } else {
                $erro = "Erro ao criar conta: " . mysqli_error($conexao);
            }
        }
    }
}
?>
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


    <section
      id="registro"
      class="min-vh-100 d-flex align-items-center bg-light"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-lg p-4 rounded-5">
              <div class="text-center mb-4">
                <h2 class="fw-bold">Registro</h2>
                <p class="text-muted">Crie uma conta para começar.</p>
              </div>

              <?php if ($erro): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($erro) ?></div>
              <?php endif; ?>

              <?php if ($sucesso): ?>
                <div class="alert alert-success"><?= $sucesso ?></div>
              <?php endif; ?>

              <form method="POST" action="registro.php">
                <div class="mb-3">
                  <label for="name" class="form-label">Nome</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Digite seu nome"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    name="email"
                    class="form-control"
                    id="email"
                    placeholder="Digite seu email"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Senha</label>
                  <input
                    type="password"
                    name="password"
                    class="form-control"
                    id="password"
                    placeholder="Digite sua senha"
                    required
                  />
                </div>
                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-primary btn-lg rounded-5">
                    Registrar
                  </button>
                </div>
                <div class="text-center">
                  <p class="text-muted">
                    Já tem uma conta?
                    <a href="login.php" class="text-primary">Faça login</a>
                  </p>
                </div>
              </form>
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

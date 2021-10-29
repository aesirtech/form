<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MEU CSS -->
    <link href="css/main.css" rel="stylesheet">

    <title>Login</title>
  </head>

  <body>
    <h1>Login</h1>

    <!--    FORMULÁRIO    -->
    <div  class="form-container">
        <form action="index.php" class="row g-3 needs-validation" novalidate method="post">

                <!--    E-MAIL    -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" required>
                    <div class="invalid-feedback">
                        Digite o seu e-mail.
                    </div>
                </div>

                <!--    PASSWORD    -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Senha" required>
                    <div class="invalid-feedback">
                      Digite a sua senha.
                    </div>
              </div>


              <div class="mb-3">
                Não tem cadastro? Cadastre-se <a href="index.php">Aqui</a>
              </div>


                <!--    BOTÃO ENTRAR    -->
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
        </form>
    </div>

      <!--  FOOTER  -->
      <footer>
            <h2 class="text-footer">&copy; Copyright Reserved.</h2>
      </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- MEU JAVASCRIPT -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">PORTIFÓLIO MARIA EDUARDA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="eu.html">Quem sou?</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="matematica.html">Matemática</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="natureza.html">C.Natureza</a>
                    <li class="nav-item">
                        <a class="nav-link" href="humanas.html">C.Humanas</a>
                        <li class="nav-item">
                            <a class="nav-link" href="linguagens.html">Linguagens</a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Tecnologias
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="ciber.html">Cibersegurança</a></li>
                                      <li><a class="dropdown-item" href="block.html">Blockchain</a></li>
                                      <li><a class="dropdown-item" href="auto.html">Automação e Robótica</a></li>
                                      <li><a class="dropdown-item" href="edge.html">Edge Computing</a></li>
                  </li>
                </ul>
              </div>
            </div>
            <i class="bi bi-mortarboard"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/>
                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/>
              </svg>
              <i class="bi bi-suit-heart-fill"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1"/>
              </svg>
          </nav>

          <?php
$servername = "localhost"; // ou o IP do seu servidor
$username = "root"; // seu usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "teste"; // nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Preparar e vincular
$stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $email);

// Executar e verificar
if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

// Fechar conexão
$stmt->close();
$conn->close();
?>
 
</body>
</html>
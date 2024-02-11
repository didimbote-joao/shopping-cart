<?php
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $required_level = 1;
   // Verifica se não há a variável da sessão que identifica o usuário
   if (!isset($_SESSION['UserID'])) {
     
       // Destrói a sessão por segurança
        session_destroy();
       // Redireciona o visitante de volta pro login
        header("Location: index.php"); exit;
   }else{
        if ($_SESSION['UserLevel'] != $required_level) {
            header("Location: index.php"); exit;
        } 
   }

  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ZADAL Fruits System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar inicial -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-fruit-alt"></i>&nbsp;&nbsp;ZADAL Fruits</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-mobile-alt mr-2"></i>Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-th-list mr-2"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar fim -->

  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
              
  			$stmt = $conn->prepare('SELECT * FROM orders');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
    </div>
    <?php endwhile; ?>

    <div class="container">
    <h2>Seja bem-vindo a página ADMIN</h2>
    <p>Lista de vendas da Loja de Frutas</p>    
    
    <!-- <a href="addproduto.php" class="btn btn-warning"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Adicionar produto</a> -->
<br>
<br>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Contacto</th>
            <th>Endereço</th>
            <th>Modo de pagamento</th>
            <th>Produtos</th>
            <th>Total Pago</th>
            <th>Apagar</th>
        </tr>
        </thead>
        <tbody>
            <?php
                include 'config.php';
                
                $stmt = $conn->prepare('SELECT * FROM orders');
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()):
            ?>
        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['name']?></td>
            <td><?= $row['email']?></td>
            <td><?= $row['phone']?></td>
            <td><?= $row['address']?></td>
            <td><?= $row['pmode']?></td>
            <td><?= $row['products']?></td>
            <td>$ <?= $row['amount_paid']?></td>
            <td><a href="action.php?removecostumer=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Deseja eliminar?');"><i class="fas fa-trash-alt"></i></a></td>
            
           

            
        </tr>
        <?php endwhile;?>
        
        </tbody>
    </table>
    </div>

    
</body>
</html>
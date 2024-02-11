<?php
 if(isset($_POST['submit']))
 {
  include 'config.php';

  $name=$_POST['name'];
  $preco=$_POST['preco'];
  $code=$_POST['code'];
  
  
  $stmt = $conn->prepare('INSERT INTO produto (product_name,product_price,product_code)VALUES(?,?,?)');
  $stmt->bind_param('sssss',$name,$preco,$code);
  $stmt->execute();
  header("Location: index.php");
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
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="addproduto">
        <h4 class="text-center text-info p-2">Adicionar produto</h4>
        
        <form action="addproduto.php" method="post">
          
          <div class="form-group">
            <!-- <label for="txUser">Nome do produto</label> -->
            <input type="text" name="name" class="form-control" placeholder="Digite o nome do produto" required>
          </div>
          <div class="form-group">
            <input type="text" name="price" class="form-control" placeholder="Digite o preço do produto" required>
          </div>
          <div class="form-group">
            <input type="text" name="code" class="form-control" placeholder="Digite o código do produto" required>
          </div>
          
          <div class="">
            <input type="file" name="image" class="" required>
          </div>
          <br><br>
          
          <div class="form-group">
            <input type="submit" name="submit" value="Add" class="btn btn-success btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>



<div class="box">
        <form action="addproduto.php" method="POST">
        <fieldset>
                <legend><b>Registrar</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="preco" id="preco" class="inputUser" required>
                    <label for="email" class="labelInput">Preço</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="code" id="code" class="inputUser" required>
                    <label for="pass" class="labelInput">Código</label>
                </div><br><br>
                
                
               
                 <input type="submit" name="submit" id="submit" value ="Cadastrar">
            </fieldset>
        </form>
        
    </div>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Enviando dados a partir do servidor
    $("#add").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=addproduto",
        success: function(response) {
          $("#addproduto").html(response);
        }
      });
    });

    // Carrega as frutas adicionados no carrinho e mostra no navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script> -->

  </body>
  </html>
<?php
    // include('protecao.php');
   if(isset($_POST['submit']))
   {
    include 'config.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $address = $_POST['address'];
    $phone=$_POST['phone'];
    
    $stmt = $conn->prepare('INSERT INTO users (name,email,passwordkey,phone,address)VALUES(?,?,?,?,?)');
	$stmt->bind_param('sssss',$name,$email,$pass,$phone,$address);
	$stmt->execute();
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- <div class="box">
        <form action="addcostumer.php" method="POST">
        <fieldset>
                <legend><b>Registrar</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="password" name="pass" id="pass" class="inputUser" required>
                    <label for="pass" class="labelInput">Palavra passe</label>
                </div><br><br>
                
                <div class="inputBox">
                    <input type="text" name="phone" id="user" class="inputUser" required>
                    <label for="user" class="labelInput">Telefone</label>
                </div><br><br>
                
                <div class="inputBox">
                    <input type="text" name="address" id="active" class="inputUser" required>
                    <label for="active" class="labelInput">Endereço</label>
                </div><br><br>
               
                 <input type="submit" name="submit" id="submit" value ="Cadastrar">
            </fieldset>
        </form>
        
    </div> -->


    <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="addproduto">
      <h4 class="text-center text-info p-2">Cadastro</h4>

            <form action="addcostumer.php" method="post">
                <div class="form-group">
                    <label for="txPassword">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Digite o seu nome" required>
                </div>

                <div class="form-group">
                    <label for="txPassword">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite o seu email" required>
                </div>

                <div class="form-group">
                    <label for="txPassword">Senha</label>
                    <input type="password" name="pass" class="form-control" placeholder="Digite a sua senha" required>
                </div>

                <div class="form-group">
                    <label for="txPassword">Telefone</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Digite o seu número de telefone" required>
                </div>


                <div class="form-group">
                    <label for="txPassword">Endereço</label>
                    <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Digite seu endereço aqui..." required></textarea>
                </div>

            <!-- <input type="text" name="user" id="txUser" maxlength="25" required />
            <label for="txPassword">Senha</label>
            <input type="password" name="password" id="txPassword" required /> -->
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value ="Cadastrar" class="btn btn-success btn-block">
                </div>
                
                
            </form> 
      </div>
    </div>
  </div>
</body>
</html>
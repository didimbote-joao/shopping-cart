<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="addproduto">
      <h4 class="text-center text-info p-2">LOGIN</h4>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label for="txPassword">Email</label>
                    <input type="email" name="user" class="form-control" placeholder="didi@gmail.com" required>
                </div>
                
                <div class="form-group">
                    <label for="txPassword">Senha</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

            <!-- <input type="text" name="user" id="txUser" maxlength="25" required />
            <label for="txPassword">Senha</label>
            <input type="password" name="password" id="txPassword" required /> -->
                <div class="form-group">
                    <input type="submit" value="Entrar" class="btn btn-success btn-block"/>
                </div>
                <p>Ainda não tem uma conta? <a href="addcostumer.php" id="novo2">Inscreva-se</a></p>
                
            </form> 
      </div>
    </div>
  </div>

</body>
</html>


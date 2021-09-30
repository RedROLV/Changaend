<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="stylesheet" href="Css/login.css">

</head>

<body> 
   <div class="container">
    <div class="card">
      <h1 class="login_head">LOGAR-SE</h1>
        <label class="position text">

        <Form action="<?=site().'/login'?>" method="POST">

          <h3 class="text">USUÁRIO:</h3><p><input type="text" name="usuario" maxlength="16" required class="input" placeholder="Usuário" autocomplete="off"><br>
        </label>
          <br>
        <label class="position text">
          <h3 class="text">SENHA:<p></h3><input type="password" name="senha"  minlength="6" maxlength="14" required class="input" placeholder="Senha" autocomplete="off">
        </label>
        <label class="position text">
          <h6>ESQUECEU SUA SENHA?</h6>
        </label>
        <button type="submit" class="btn-submit"> Enviar </button>

        </Form>
  
        <div class="center">
          <h6><b>NÃO TEM UMA CONTA?</b><a href="./cadastro.html" class="text"> CADASTRE-SE</a></h6> 
        </div>
    </div>
   </div>
   
</body>
<script   src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='<?=asset('js/req.js')?>'>   </script>  
</html>
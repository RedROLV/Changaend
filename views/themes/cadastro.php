<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="<?=asset("css/style.css")?>">
    <link rel="stylesheet" href="<?=asset("css/Cadastro.css")?>">
</head>

<body> 
   <div class="container">
    <div class="card">
      <h1>CADASTRE-SE</h1>
        <br>

      <form action="<?=site().'/register'?>" method="POST">

        <div class="position text">
          NOME COMPLETO:<p><input type="text" name="nome"  maxlength="50"><br>
        </div>

        <div class="position text">
          NOME DE USUÁRIO:<p><input type="text" name="usuario"  maxlength="12" required><br>
        </div>
        
        <div class="position text">
          E-MAIL:<p><input type="text" name="email"  maxlength="45" required><br>
        </div>

        <div class="position text">
          TELEFONE(OPCIONAL):<p><input type="number" name="telefone"  maxlength="14"><br>
        </div>

        <div class="position text">
          SENHA:<p><input type="password" name="senha"  minlength="6" maxlength="16" required><br>
        </div>

        <div class="position text">
          REPITA A SENHA:<p></h4><input type="password" name="csenha"  minlength="6" maxlength="16" required><br>
        </div>
      
        <div>
          <button class="btn-submit" type="submit">Cadastrar</button>
        </div>

        </form>

           <br>
        <div class="center">
          <h5>JÁ POSSUI UMA CONTA?<a href="<?=site().'/login'?>" class="text"> LOGIN</a></h5> 
        </div>
    </div>
   </div>
   
</body>
<script   src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='<?=asset('js/req.js')?>'>   </script>  
</html>
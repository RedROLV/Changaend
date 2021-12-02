<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="<?=asset("css/style.css")?>">
    <link rel="stylesheet" href="<?=asset("css/cadastro.css")?>">

</head>

<body> 
<div class="container" >
    <div class="content">      
      <div id="login">
      <h1>Login</h1>
        <label class="position text">

        <Form action="<?=site().'/login'?>" method="POST">

         <class="text">Usuário:<p><input type="text" name="usuario" maxlength="16" required class="input" placeholder="Usuário" autocomplete="off"><br>
        </label>
          
        <label class="position text">
          <class="text">Senha:<p><input type="password" name="senha"  minlength="6" maxlength="14" required class="input" placeholder="Senha" autocomplete="off">
        </label><p>
        
        <div>
          <input class="btn-submit" type="submit" value="Entrar"/>
        </div>

        </Form>
  
        <p class="link">
            Ainda não tem conta?
            <a href="<?=site().'/cadastro'?>"class="text"> Cadastre-se</a>
    </div>
   </div>
   
</body>
<script   src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='<?=asset('js/req.js')?>'>   </script>  
</html>
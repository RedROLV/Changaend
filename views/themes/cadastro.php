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
<div class="content"> 
   <div class="container">
    <div id="cadastro">
      <h1>Cadastro</h1>
        <br>

      <form action="<?=site().'/register'?>" method="POST">
    

        <div class="position text">
          Nome Completo:<p><input type="text" name="nome"  maxlength="50" required placeholder="Nome Sobrenome "/><p>
        </div>

        <div class="position text">
          Nome de Usuário:<p><input type="text" name="usuario"  maxlength="12" required placeholder="Usuário"/><p>
        </div>
        
        <div class="position text">
          E-mail:<p><input type="text" name="email"  maxlength="45" required placeholder="email@teste.com"/><p>
        </div>

        <div class="position text">
          Telefone(opicional):<p><input type="number" name="telefone"  maxlength="14" placeholder="(xx) xxxxx-xxxx"/><p>
        </div>

        <div class="position text">
          Senha:<p><input type="password" name="senha"  minlength="6" maxlength="16" required  placeholder="Senha"/><p>
        </div>

        <div class="position text">
          Repita a Senha:<p></h4><input type="password" name="csenha"  minlength="6" maxlength="16" required placeholder="Repita a Senha"/><p>
        </div>
      
        <div>
          <input class="btn-submit" type="submit" value="cadastrar"/>
        </div>
  
           <br>
           <p class="link">  
            Já tem conta?
           <a href="<?=site().'/login'?>" class="text">Ir para login</a>
     </form>
    </div>
   </div>
</div>
</body>
<script   src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='<?=asset('js/req.js')?>'>   </script>  
</html>
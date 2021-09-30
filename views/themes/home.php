<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=asset("css/style.css")?>">
    <link rel="stylesheet" href="<?=asset("css/index.css")?>">
    <link rel="stylesheet" href="<?=asset("css/carrossel.css")?>">
    <title>Inicio</title>
</head>
<body>
    <header>
        <nav class="navbar-container">
            <ul class="nav">
               <center><li class="nav_item" class="logo_container"><a href="<?=site()."/"?>"><img src="<?=asset('img/logo.png')?>" class="logo_nav"></a></li></center>
            </ul>
            <ul class="nav">
                <input type="text" name="search" id="search" placeholder="Faça sua Busca" required>
                <button type="submit"><i class="fas fa-search"></i></button>
                <li class="nav_item"><a class="cad_btn" href="<?=site()."/ca"?>"> Cadastrar </a></li>
                <li class="nav_item"><a class="login_btn" href="<?= site()."/login"?>"> Login </a></li>
            </ul>
        </nav>

        <nav class="navbar-container">
            <ul class="nav">
                <li class="nav_item">NOVIDADES</li>
                <li class="nav_item">BLUSAS</li>
                <li class="nav_item">BERMUDAS</li>
            </ul>
        </nav>

    </header>
    <main>
      <section class="main_section">
        <div class="slider">
            <div class="slides">

              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">
              
                <div class="slide first">
                    <img src="<?=asset('img/conjunto1.png')?>" alt="">
                </div>
                <div class="slide">
                    <img src="<?=asset('img/conjunto2.png')?>" alt="">
                </div>
                <div class="slide">
                    <img src="<?=asset('img/conjunto3.png')?>" alt="">
                </div>
                <div class="slide">
                    <img src="<?=asset('img/conjunto4.png')?>" alt="">
                </div>

                <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <div class="auto-btn4"></div>
                </div>

            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>

        <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
              counter = 1;
            }
        }, 5000);
        </script>
      </section>  

        <aside class="about">
            <h1>SOBRE NÓS</h1>
            <div class="containers">
                <div class="right">
                    <article>
                        <h3>Nosso Objetivo</h3>
                        <p style="margin-bottom: 40px;">O nosso objetivo sera escrito e definido aqui eu estou <br> enchendo linguica para ver como vai ficar</p>
                    </article>
                    <article>
                        <h3>O que fazemos ?</h3>
                        <p>Aqui ficara o que nos fazemos na empresa, ou o que nao fazemos</p>
                    </article>
                </div>
            </div>
        </aside>
        <footer>
                <span> Direitos Autorais e &copy; copyright </span>
        </footer>
    </main>
</body>
</html>
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
</head>
<body>
    <header>
        <nav class="navbar-container">
            <ul class="nav">
               <center><li class="nav_item" class="logo_container"><a href="./index.html"><img src="<?=asset('img/logo.png')?>" class="logo_nav"></a></li></center>
            </ul>
            <ul class="nav">
                <li><a class="enter_btn" href="<?=site().'/cadastro'?>"> Cadastrar </a></li>
                <li><a class="login_btn" href="<?=site().'/login'?>">login </a></li>
            </ul>
        </nav>

        <nav class="navbar-container nav-color">
            <ul class="nav">
                <li class="nav_item item_text">
                    <img src="<?=asset('img/blusa.png')?>" class="navbar-icon">
                    blusa 
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/calca.png')?>" class="navbar-icon">
                    <p>Calças</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/casaco.png')?>" class="navbar-icon">
                    <p>Casacos</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/vestido.png')?>" class="navbar-icon">
                    <p>Vestidos</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/macacao.png')?>" class="navbar-icon">
                    <p>Macacão</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/short.png')?>" class="navbar-icon">
                    <p>Shorts</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/bermuda.png')?>" class="navbar-icon">
                    <p>Bermudas</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/saia.png')?>" class="navbar-icon">
                    <p>Saias</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/biquini.png')?>" class="navbar-icon">
                    <p>Biquinis</p>
                </li>
                <li class="nav_item item_text">
                    <img src="<?=asset('img/geral.png')?>" class="navbar-icon">
                    <p>Geral</p>
                </li>
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
      </section>  
      <section id="products">
            <div class="product">
                <img src="" alt="" class="product_image">
                <p>nome-1</p>
                <p>preço: R$0,00</p>
            </div>
            <div class="product">
                <img src="" alt="" class="product_image">
                <p>nome-2</p>
                <p>preço: R$0,00</p>
            </div>
            <div class="product">
                <img src="" alt="" class="product_image">
                <p>nome-3</p>
                <p>preço: R$0,00</p>
            </div>
            <div class="product">
                <img src="" alt="" class="product_image">
                <p>nome-4</p>
                <p>preço: R$0,00</p>
            </div>
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
                <span> Empresa com &copy;copyright </span>
        </footer>
    </main>
</body>
</html>
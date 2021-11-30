<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=asset("css/style.css")?>">
    <link rel="stylesheet" href="<?=asset("css/index.css")?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/blusa.png')?>" class="navbar-icon">
                        blusa 
                    </a>
                </li>
                
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/calca.png')?>" class="navbar-icon">
                        <p>Calças</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/casaco.png')?>" class="navbar-icon">
                        <p>Casacos</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/vestido.png')?>" class="navbar-icon">
                        <p>Vestidos</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/macacao.png')?>" class="navbar-icon">
                        <p>Macacão</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/short.png')?>" class="navbar-icon">
                        <p>Shorts</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/bermuda.png')?>" class="navbar-icon">
                        <p>Bermudas</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/saia.png')?>" class="navbar-icon">
                        <p>Saias</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/biquini.png')?>" class="navbar-icon">
                        <p>Biquinis</p>
                    </a>
                </li>
                <li class="nav_item item_text">
                    <a href="<?=site().'/login'?>">
                        <img src="<?=asset('img/geral.png')?>" class="navbar-icon">
                        <p>Geral</p>
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <main>
      <section class="main_section">

        <h1>A melhor loja online do mercado!</h1>
        <h3>Garanta já sua peça</h3>
        <a href="<?=site().'/login'?>">
            <button class="btn btn-danger font-weight-bold">VEJA MAIS!</button>
        </a>
               
      </section>  
      <section >
            <a href="<?=site().'/login'?>" id="products">
                <div class="product">
                    <img src="<?=asset('img/vestido-floral.png')?>" width="250" class="product_image">
                    <p>Vestido cinza floral</p>
                    <p>preço: R$150,00</p>
                </div>
                <div class="product">
                    <img src="<?=asset('img/conjunto-floral.png')?>" width="250" class="product_image">
                    <p>conjunto floral</p>
                    <p>preço: R$120,00</p>
                </div>
                <div class="product">
                    <img src="<?=asset('img/calça-e-blusa-rosa.png')?>" width="250calça-e-blusa-rosa.png" class="product_image">
                    <p>Blusa rosa</p>
                    <p>preço: R$50,00</p>
                </div>
                <div class="product">
                    <img src="<?=asset('img/short-coral.png')?>" width="250" class="product_image">
                    <p>short coral</p>
                    <p>preço: R$50,00</p>
                </div>
            </a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
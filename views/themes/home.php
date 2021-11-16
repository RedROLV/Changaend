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

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=asset('img/conjunto1.png')?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?=asset('img/conjunto2.png')?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?=asset('img/conjunto3.png')?>" class="d-block w-100" alt="...">
                    </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
      </section>  
      <section id="products">
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
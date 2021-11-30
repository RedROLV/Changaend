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
    <style>
        .product {
            width: 300px;
            display: flex;
            flex: 1;
            flex-basis: 28%;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .texts {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar-container border">
            <ul class="nav">
               <center><li class="nav_item" class="logo_container"><a href="./index.html"><img src="<?=asset('img/logo.png')?>" class="logo_nav"></a></li></center>
            </ul>
            <ul class="nav">
                <li><div class="btn-sm btn-danger">sair</div></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h1 class="h2 mt-3 mb-5">Lista de produtos</h1>
    <?php 
        if ($products): 
            foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?= $product->img ?>" width="200"/>
                    <div class="texts text-center">
                            <p><?= $product->nome ?></p>
                            <p><?= $product->descricao ?></p>
                            <p>R$<?= $product->preco ?>,00</p>
                            <P>
                                <a href="<?=site()."/buy/{$product->id}"?>">
                                    <button class="btn btn-success">comprar</button>
                                </a>
                            </P>
                    </div>
                </div>
    <?php 
            endforeach;
        else:
    ?>
        <h2 class="text-center mt-3"> não há produtos cadastrados </h2>
    <?php endif; ?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
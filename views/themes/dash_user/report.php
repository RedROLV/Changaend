<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        div.voadora {
            border-style: solid;
            width: fit-content;
            height: fit-content;

            /* Moz para o mozila firefox poder ler tbm */

            width: -moz-fit-content;
            height: -moz-fit-content;
        }

        div.organiza {
            width: 50vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .product {
            width: 100%;
            display: flex;
            flex: 1;
            justify-content: flex-end;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .product img {
            position: relative;
            left: calc(50% - 100px);
        }
        .texts {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .font-weight-bold {
            font-weight: 900;
        }
    </style>
</head>
<body >
    <div class="border">
            <ul class="nav container">
               <center><li class="nav_item" class="logo_container"><a href="<?= site()."/user" ?>"><img src="<?=asset('img/logo.png')?>" width="60" class="logo_nav mt-3 mb-3 ml-5"></a></li></center>
            </ul>
    </div>
    <div class="container">
        <?php foreach ($payments as $payment): ?>
            <div class="border mt-3 p-4">
            <div class="h4">Pedido #<?=$payment[0]->hash_buy?></div>

            <div class="row">
                <div class="col">
                <div class="product">
                        <img src="<?= $payment[1]->img ?>" width="200"/>
                        <div class="texts text-center">
                                <p><?= $payment[1]->nome ?></p>
                                <p><?= $payment[1]->descricao ?></p>
                                <p>R$<?= $payment[1]->preco ?>,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="user">
                                <p><p class="font-weight-bold">Nome:</p> <?= $payment[2]->nome ?></p>
                                <p><p class="font-weight-bold">Nick:</p> <?= $payment[2]->usuario ?></p>
                                <p><p class="font-weight-bold">Email:</p> <?= $payment[2]->email ?></p>
                                <p><p class="font-weight-bold">Telefone:</p> <?= $payment[2]->telefone ?></p>
                    </div>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
    </div>
 
</body>
</html>
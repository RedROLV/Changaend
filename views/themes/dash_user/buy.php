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
    </style>
</head>
<body>
<div class="border">
            <ul class="nav container">
               <center><li class="nav_item" class="logo_container"><a href="<?= site()."/user" ?>"><img src="<?=asset('img/logo.png')?>" width="60" class="logo_nav mt-3 mb-3 ml-5"></a></li></center>
            </ul>
    </div>
    <div class="container mt-5 mb-5">
        <h2 class="mb-5">Finalize a sua compra</h2>
        <div class="row">
            <div class="col border-right">
                <div class="product ">
                    <img src="<?= $product->img ?>" width="200"/>
                    <div class="texts text-center">
                            <p><?= $product->nome ?></p>
                            <p><?= $product->descricao ?></p>
                            <p>R$<?= $product->preco ?>,00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="<?= site().'/user/buy'?>" method="POST">
                    <div class="voador">
                        <div class="organiza text-left">
                            <input type="hidden" value="<?=  $product->id ?>" name="product_id">
                            <input type="hidden" value="<?= $_SESSION["user"] ?>" name="user_id">
                            Cartão<input type="number" name="cartao" maxlength="18"> 
                            Titular<input type="text" name="titular" maxlength="18">
                            Codigo CVV<input type="text" name="cvv" maxlength="18">
                            Validade<input type="text" name="val" maxlength="18">
                            UF<input type="text" name="uf" maxlength="18">
                            Logradouro<input type="text" name="logradouro" maxlength="50">
                            CEP<input type="number" name="cep"  maxlength="8" required>
                            Complemento<input type="text" name="Complemento"  maxlength="8" required>
                            <button class="btn btn-success mt-2" type="submit">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
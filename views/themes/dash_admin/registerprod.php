<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="telapgmt.css" rel="stylesheet">
    <title>Document</title>
    <style>
        div.organiza{
            height: 95vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


    </style>
</head>
<body>

<form action="<?= site() . '/admin/registerProduct'?>" method="POST">

    <div class="voador">

        <div class="organiza">

        Imagem<input type="text" name="img"> 

        Nome<input type="text" name="nome" maxlength="18">

        Desc<input type="text" name="descricao" maxlength="18">

        Preço<input type="text" name="preco" maxlength="18">

        <button class="btn btn-success mt-4" type="submit">Cadastrar</button>

        </form>

        </div>

    </div>
    
</form>

</body>

</html>
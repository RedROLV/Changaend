<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dash.css" rel="stylesheet">

    <title>Document</title>
    <style>
        body {
  margin: 0px;
}

.wrapper {
  width: 100%;
  height: 100vh;
  padding: 20px 0px;
  display: block;
  align-items: center;
  background: #ff9a02;
  background: linear-gradient(
    0deg,
    rgba(195, 74, 34, 1) 0%,
    rgba(255, 154, 2, 1) 100%
  );
}

.content {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.avatar-profile {
  display: block;
  width: 245px;
  height: 247px;
  border-radius: 50%;
  background: #c4c4c4;
}

.funcoes {
  font-size: 22px;
  display: flex;
  flex-direction: column;
  height: 100%;
  justify-content: space-around;
  align-items: center;
  color: #0e1715;
  text-transform: uppercase;
  font-family: "Courier New", Courier, monospace;
}

.links {
  text-decoration: none;
  cursor: pointer;
}

    </style>
</head>
<body>
    <div class="wrapper">
        <div class='content'>
            <img class="avatar-profile" src="<?= asset('img/avatar-profile.png')?>" ></img>
            <div class="funcoes">
                <a class='links' href="<?= site()."./admin/register" ?>">cadastrar produtos</a>
            </div>
        </div>
    </div>
</body>
</html>
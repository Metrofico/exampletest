<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maquetado</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c76b2cfe52.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="container">
    asdasd
    <div id="menu-expand">
        <div class="btn-interact-menu" onclick="hideRateMenu()">
            <i id="iconExpandMenu" class="fas fa-chevron-up" style="color: white"></i>
        </div>
        <div class="menu-content">
            <div class="displayName">
                ¿Qué tanto te gustó nuestra página web?
            </div>
            <div id="rateBar" class="badgeNumber">
                <div class="Number low" onclick="selectorRateNumber(this)">1</div>
                <div class="Number low" onclick="selectorRateNumber(this)">2</div>
                <div class="Number medium-low" onclick="selectorRateNumber(this)">3</div>
                <div class="Number medium-low" onclick="selectorRateNumber(this)">4</div>
                <div class="Number medium" onclick="selectorRateNumber(this)">5</div>
                <div class="Number medium" onclick="selectorRateNumber(this)">6</div>
                <div class="Number medium-high" onclick="selectorRateNumber(this)">7</div>
                <div class="Number medium-high" onclick="selectorRateNumber(this)">8</div>
                <div class="Number high" onclick="selectorRateNumber(this)">9</div>
                <div class="Number high" onclick="selectorRateNumber(this)">10</div>
            </div>
            <div class="msg-rate">
                <div>No me gusta</div>
                <div>Excelente</div>
            </div>
        </div>
        <hr class="solid">
        <div class="menu-content menu-footer">
            <div class="input-comentar">
                <label>
                    <input type="text" name="search" placeholder="Comentar.">
                </label>
            </div>
            <div class="btn-enviar ">
                Enviar &nbsp;&nbsp;
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
</div>

</body>
</html>
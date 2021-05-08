<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Trabajo Practico Nº3</title>
</head>
<body background="../img/abstract-yellow.jpg" class="container-fluid">
    <header>
    <div class="container-fluid text-center mt-5">
        <h1 style="color:rgb(54,66,155)">Jonathan Daniel Garello</h1>
    </div>
    <nav class="navbar navbar-light container mt-5">
        <form class="form-inline">
                <a href="../Ejercicio1/ejercicio1.php"class="btn btn-primary">EJERCICIO 1</a>
                <a href="../Ejercicio2/ejercicio2.php"class="btn btn-secondary">EJERCICIO 2</a>
                <a href="../Ejercicio3/ejercicio3.php"class="btn btn-success">EJERCICIO 3</a>
                <a href="../Ejercicio5/ejercicio5.php"class="btn btn-dark">EJERCICIO 5</a>
                <a href="../Ejercicio6/ejercicio6.php"class="btn btn-info">EJERCICIO 6</a>
        </form>
    </nav>
    </header>
    <main class="container mt-5 pb-5 justify-content-center align-items-center">
    <form class="container-fluid btn-primary" action="resultado.php" method="get">
    <br>
    <div class="btn-success"><h6>Entrada</h6>
    <input type="checkbox" name="menu[]" id="entrada" value="queso">
    <label for="queso">queso</label>
    <input type="checkbox" name="menu[]" id="entrada" value="pan">
    <label for="pan">pan</label>
    </div>
    <br>
    <br>
    <div class="btn-secondary"><h6>Menu principal</h6>
    <input type="checkbox" name="menu[]" id="entrada" value="fideos">
    <label for="fideos">fideos</label>
    <input type="checkbox" name="menu[]" id="entrada" value="milanesa">
    <label for="milanesa">milanesa</label>
   
    </div>
    <br>
    <br>
    <div class="btn-dark"><h6>Acompaneamiento</h6>
    <input type="checkbox" name="menu[]" id="entrada" value="papas">
    <label for="papas">papas</label>
    <input type="checkbox" name="menu[]" id="entrada" value="salsa">
    <label for="salsa">salsa</label>
    </div>
    <br>
    <br>
    <div class="btn-info"><h6>Postre</h6>
    <input type="checkbox" name="menu[]" id="entrada" value="helado">
    <label for="helado">helado</label>
    <input type="checkbox" name="menu[]" id="entrada" value="flan">
    <label for="flan">flan</label>
   
    </div>
    <br>
    <br>
    <input type="submit">
    <br>
    <br>
    </form>

    
    </main>
</body>
</html>
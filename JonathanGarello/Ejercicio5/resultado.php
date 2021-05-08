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
                <a href="../Ejercicio4/ejercicio4.php"class="btn btn-danger">EJERCICIO 4</a>
                <a href="../Ejercicio6/ejercicio6.php"class="btn btn-info">EJERCICIO 6</a>
        </form>
    </nav>
    </header>
    <main class="container mt-5 pb-5 justify-content-center align-items-center">
        
    <?php
    
    function verVariable($variable){
        if(isset($_GET[$variable])){
            
                return $_GET[$variable];
                
                    } 
                }
                $z=1;
        for ($i=0; $i <verVariable("tamaneo"); $i++) {
            for ($j=0; $j <verVariable("tamaneo"); $j++) { 
                
                $matriz[$i][$j] = $z;
                $z++;
            }
        }
       
        $nfil = count($matriz);
        $ncol = count($matriz[0]);

        echo "la matriz \$matriz tiene $nfil filas y $ncol columnas<br />";

        for($i=0;$i<$nfil;$i++){
            for($j=0;$j<$ncol;$j++){
                if($i==$j){
                    $diagoPrincipal[$i] = $matriz[$i][$j];
                }
                 
                if($i+$j ==$nfil-1){
                    $diagoSecundaria[$i] = $matriz[$i][$j];
                }
            }
        }
        echo "la diagonal Principal es: ";
        echo "<br />";
        foreach ($diagoPrincipal as  $value) {
        
            echo  $value;
            echo "<br />";
        }
        echo "la diagonal Secuandaria es: ";
        echo "<br />";
        foreach ($diagoSecundaria as  $value) {
           
            echo  $value;
            echo "<br />";
        }
        $r=1;
        $m=0;
        for ($d=0; $d <verVariable("tamaneo"); $d++) {
            for ($f=0; $f <verVariable("tamaneo"); $f++) { 
                
                $matriz[$i][$j] = $r;
                $m+=$r;
                $r++;
            }
        }
        echo "la suma de todo la matriz es : " . $m;

    
    ?>


    </main>
</body>
</html>
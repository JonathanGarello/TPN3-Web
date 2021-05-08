<?php
   
function dadosimprimir($variable){
    $directorio = 'imagen';
    $ficheros  = scandir($directorio);
    switch ($variable) {
       
        case '1':
            foreach ($ficheros as $value) {
                if($value == "1.jpg")
                echo "<img src='./imagen/" . $value. "' >" . "<br>" . "<br>";
            }
            break;
            case '2':
                foreach ($ficheros as $value) {
                    if($value == "2.jpg")
                    echo "<img src='./imagen/" . $value. "' >" . "<br>" . "<br>";
                }
                break;
                case '3':
                    foreach ($ficheros as $value) {
                        if($value == "3.jpg")
                        echo "<img src='./imagen/" . $value. "' >" . "<br>" . "<br>";
                    }
                    break;
                    case '4':
                        foreach ($ficheros as $value) {
                            if($value == "4.jpg")
                            echo "<img src='./imagen/" . $value. "' >" . "<br>" . "<br>";
                        }
                        break;
                        case '5':
                            foreach ($ficheros as $value) {
                                if($value == "5.jpg")
                                echo "<img src='./imagen/" . $value. "' >" . "<br>" . "<br>";
                            }
                            break;
                            case '6':
                                foreach ($ficheros as $value) {
                                    if($value == "6.jpg")
                                    echo "<img src='./imagen/" . $value. "' >" . "<br>" . "<br>";
                                }
                                break;
        default:
            echo "dado no existe";
            break;
    }
}


function imprimirGet($variable){
    if(isset($_GET[$variable])){
        return $_GET[$variable];
    }
}
    








        function dadosGet($variable){
            $ingreso = $variable;
            switch ($ingreso) {
                case '1':
                    $random = random_int ( 1 , 6 );
                    $resultado = dadosimprimir($random);
                    echo $resultado;
                    echo "la sumatoria de los dados seria = " . $random;
                    break;
                    
                case '2':
                    $random = random_int ( 1 , 6 );
                    $random2 = random_int ( 1 , 6 );
                    $resultado = dadosimprimir($random);
                    $resultado2 = dadosimprimir($random2);
                    echo $resultado;
                    echo $resultado2;
                    echo "la sumatoria de los dados seria = " . $random + $random2;
                    break;

                    case '3':
                        $random = random_int ( 1 , 6 );
                        $random2 = random_int ( 1 , 6 );
                        $random3 = random_int ( 1 , 6 );
                        $resultado = dadosimprimir($random);
                        $resultado2 = dadosimprimir($random2);
                        $resultado3 = dadosimprimir($random3);
                        echo $resultado;
                        echo $resultado2;
                        echo $resultado3;
                        echo "la sumatoria de los dados seria = " . $random + $random2 + $random3;
                        break;
                
                default:
                    # code...
                    echo "cantidad de dados incorrecta";
                    break;
            }
        }
    ?>
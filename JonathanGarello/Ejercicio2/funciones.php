<?php

function copiarArchivo($destination){
    return move_uploaded_file($_FILES["archivo"]["tmp_name"], $destination);
}
?>
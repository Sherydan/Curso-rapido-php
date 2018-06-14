<?php
    $path = "/dir0/dir1/file.php";
    $file = 'file1.txt';
    /*
    // devolver el nombre de un archivo a partir de su ruta
    echo basename($path);
    //devolver solo el nombre del archivo, sin la extension
    echo basename($path, '.php');
    
    //devuelve solo la ruta del archivo
    echo dirname($path);
    //chequea si existe el archivo o carpeta
    echo file_exists($file);
    //muestra la ruta absoluta del archivo
    echo realpath($file);
    
    //chequea si existe el archivo
    echo is_file($file);
    
    //chequea que el archivo sea de solo lectura o no
    echo is_writable($file);
    //chequea que el archivo se pueda leer
    echo is_readable($file);
    
    //obtener el tamaño de un archivo (en bytes)
    echo filesize($file);
    
    //crear una carpeta
    mkdir('test');
    
    //eliminar un directorio en caso que este vacio
    rmdir('test')
    
    //copiar archivo
    echo copy($file, 'file2.txt');
    
    //renombrar archivo
    rename('file2.txt', 'myfile.txt');
    
    //elimminar archivo
    unlink('myfile.txt');
    
    echo file_get_contents($file);

    //escribir dentro del archivo (reemplaza)
    echo file_put_contents($file, 'Goodbye World');
    
    //escirbir el archivo sin eliminar el contenido
    $current = file_get_contents($file);
    $current .= ' Hello World';
    file_put_contents($file, $current);
    
    //abrir un archivo para leerlo
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data;
    */

    //abrir un archivo para editarlo 
    $handle = fopen($file, 'w');
    $txt = "Jhon Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve Smith\n";
    fwrite($handle, $txt);
    fclose($handle);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
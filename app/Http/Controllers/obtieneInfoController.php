<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class obtieneInfoController extends Controller
{
    //
public function ObtieneDato (Request $request){

//return request('nombre'); 

?> 

    url
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido </title>
</head>
<body>

<h1> BIENVENIDO: </h1>
    
<h1> <?php  return request('nombre') ?></h1>

</body>
</html>




<?php

}

}



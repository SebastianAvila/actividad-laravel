<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/indexADA.css">
    <title>Inserte Nombre </title>

</head>

<body>
    <div id="form" class="form">

        <form method="POST"  action=" {{route('onichan')}}" >
        @csrf 
                <br>
                <br>
            <label for="nombre">Inserte su Nombre</label> <br> <br>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-fulltext-ig placeholder-gray-900 p-2 my-2" type="text" name="nombre" id="nombre" placeholder="Juan Ejemplo" > <br> <br>
            <input type="submit" value="Enviar" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"> 



        </form>
    </div>
</body>

</html>





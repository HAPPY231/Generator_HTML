<?php 

    include_once("connect.php");

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="java.js"></script>
</head>
<body onload="generate()">
    <center><h1>Generator HTML</h1></center>
    <div class="two">
    <div class="semantic">
    <?php 

    $select = "SELECT * FROM podstawowe";
    $res = mysqli_query($dbc,$select);

    while($row = mysqli_fetch_row($res)){

echo<<<END
    <input type="submit" value="$row[1]" id="$row[1]" onclick="sprawdz('{$row[2]}')"> 
END;


    }


    ?>

    </div>
    <div class="structur">
        <input type="submit" value="Struktura HTML" id="HTML" onclick="struktura_HTML()">
        <input type="submit" value="Tabela" id="HTML" onclick="struktura_table()">
    </div>
</div>
<div class="textareas">
    <img src="recycle.png" alt="recycle.png" onclick="Cclear()" width="64" height="64" style="position: fixed; bottom: 100px; right: 50px;">

    <textarea id="text" style="width: 60vh; height: 80vh"></textarea>
    <textarea id="structures" style="width: 60vh; height: 80vh; transition: all 0.7s ease-in-out;"></textarea>
</div>
<footer>
    Kacper Marszycki
</footer>


</body>
</html>


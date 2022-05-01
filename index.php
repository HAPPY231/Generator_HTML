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
    <input type="submit" value="<p></p>" id="<p></p>" onclick="sprawdz('<p></p>')"> 
    <input type="submit" value="<h1></h1>" id="<h1></h1>" onclick="sprawdz('<h1></h1>')"> 
    <input type="submit" value="<h2></h2>" id="<h2></h2>" onclick="sprawdz('<h2></h2>')"> 
    <input type="submit" value="<h3></h3>" id="<h3></h3>" onclick="sprawdz('<h3></h3>')"> 
    <input type="submit" value="<h4></h4>" id="<h4></h4>" onclick="sprawdz('<h4></h4>')"> 
    <input type="submit" value="<article></article>" id="<article></article>" onclick="sprawdz('<article></article>')"> 
    <input type="submit" value="<details></details>" id="<details></details>" onclick="sprawdz('<details></details>')"> 
    <input type="submit" value="<header></header>" id="<header></header>" onclick="sprawdz('<header></header>')"> 
    <input type="submit" value="<footer></footer>" id="<footer></footer>" onclick="sprawdz('<footer></footer>')"> 
    <input type="submit" value="<main></main>" id="<main></main>" onclick="sprawdz('<main></main>')"> 
    <input type="submit" value="<section></section>" id="<section></section>" onclick="sprawdz('<section></section>')"> 
    <input type="submit" value="<script></script>" id="<script></script>" onclick="sprawdz('<script></script>')"> 
    <input type="submit" value="Wyczyść" id="Wyczyśc" onclick="wyczysc()"> 

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


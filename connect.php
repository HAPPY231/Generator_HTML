<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $data_base = "gen_html";

    $dbc = new mysqli($host,$user,$password,$data_base);

    if(!$dbc){
        echo "Nie udało się połączyć z bazą danych!";
    }
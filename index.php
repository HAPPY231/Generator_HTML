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
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sematic">
    <?php 

    $select = "SELECT * FROM podstawowe";
    $res = mysqli_query($dbc,$select);
    while($row = mysqli_fetch_row($res)){

echo<<<END
    <input type="submit" value="$row[1]" id="$row[1]" onclick="sprawdz('{$row[2]}')">
END;
    }

    ?>

<input type="submit" value="HTML" id="HTML" onclick="struktura_HTML()">
<input type="submit" value="HTML" id="HTML" onclick="struktura_table()">
</div>
<textarea id="text" style="width: 60vh; height: 80vh "></textarea>

<script>
    function sprawdz(a){
        var curPos = document.getElementById("text").selectionStart;
        let x = $("#text").val();
        let text_to_insert = a+"\n";
        $("#text").val(
x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function struktura_HTML(){
        var curPos = document.getElementById("text").selectionStart;
        let x = $("#text").val();
        let text_to_insert = "<!DOCTYPE html> \n<html lang='en'> \n<head> \n<meta charset='UTF-8'> \n<meta http-equiv='X-UA-Compatible' content='IE=edge'> \n<meta name='viewport' content='width=device-width, initial-scale=1.0'> \n<title>Document</title> \n</head> \n<body> \n \n</body> \n</html> \n ";
        $("#text").val(
x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }

</script>
</body>
</html>


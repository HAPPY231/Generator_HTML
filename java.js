function generate(){
    var curPos = document.getElementById("text").selectionStart;
    let x = $("#text").val();
    let text_to_insert = "<!DOCTYPE html> \n<html lang='en'> \n<head> \n<meta charset='UTF-8'> \n<meta http-equiv='X-UA-Compatible' content='IE=edge'> \n<meta name='viewport' content='width=device-width, initial-scale=1.0'> \n<title>Document</title> \n</head> \n<body> \n \n</body> \n</html> \n ";
    $("#text").val(
x.slice(0, curPos) + text_to_insert + x.slice(curPos));
}
function sprawdz(a){
    var curPos = document.getElementById("text").selectionStart;
    let x = $("#text").val();
    let text_to_insert = a+"\n";
    $("#text").val(
x.slice(0, curPos) + text_to_insert + x.slice(curPos));
}

function Cclear(){
 document.getElementById("text").value = " ";

}

function struktura_HTML(){
    document.getElementById("structures").value  = "<!DOCTYPE html> \n<html lang='en'> \n<head> \n<meta charset='UTF-8'> \n<meta http-equiv='X-UA-Compatible' content='IE=edge'> \n<meta name='viewport' content='width=device-width, initial-scale=1.0'> \n<title>Document</title> \n</head> \n<body> \n \n</body> \n</html> \n ";
}
function struktura_table(){
    document.getElementById("structures").value= "<table> \n<tr> \n<th>Company</th> \n<th>Contact</th> \n<th>Country</th> \n</tr> \n<tr> \n<td>Alfreds Futterkiste</td> \n<td>Maria Anders</td> \n<td>Germany</td> \n</tr> \n<tr> \n<td>Centro comercial Moctezuma</td> \n<td>Francisco Chang</td> \n<td>Mexico</td> \n</tr> \n</table>";

}
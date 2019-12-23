<?php
$usename = "root";
$passowrd = '';
$db ='mydatabase';

$conn= new mysqli('localhost', $usename, $passowrd, $db) or die("unable to connect");

$sql = "SELECT * FROM mytable where id=1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$menu = $row['div1'];
?>

<!DOCTYPE html>
<Html>  
    <head>
        <title>
        Editable page
        </title>
        <style>
            body{margin:0, padding:0;}

        </style>
        <script>
            function saveText(){
                var xr=new XMLHttpRequest();
                var url="saveNewText.php";
                var text = document.getElementById("editable").innerHTML;
                var vars = "newText="+text;
                xr.open("POST", url, true);
                xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xr.send(vars);

            }

        </script>
        <style>
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            }

            li {
            float: left;
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            li a:hover:not(.active) {
            background-color: #111;
            }

            .active {
            background-color: #4CAF50;
            }
        </style>
    </head>
    <body>
        <div id="main">
        <ul>
            <li><a href="#Notepad">Notepad</a></li>
        </ul>
            <div id='editable' contenteditable="true" onblur="saveText()">
                <?php echo $menu; ?>
            </div>
             
        </div>
        <button type="button" onclick="saveText()"> Save</button>

    </body>

</Html>

<?php
    $usr = "";
    $ps = "";

    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        $ps = $_GET["txPASSWORD"];
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Menggunakan Methode GET</title>
</head>
<body>
   <form method="GET" action="latihan01.php">

        <div>
            User Name
            <input type ="text" name="txUSER" required>
        
        </div>
        
        <div>
            Password
            <input type ="text" name="txPASSWORD" required>
        
        </div>

        <div>
            <button type="submit"> Login </button>
        </div>
   </form> 

<div>
    <pre>
        User name : <?=$usr?>
        Password  : <?=$ps?>

    </pre>
</div>

</body>
</html>

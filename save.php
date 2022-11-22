<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Form</title>
</head>
<body>
    <?php
    if(isset($_POST['title'])&&isset($_POST['description'])){
        echo "<h1>".$_POST['title']."</h1><br>";
        echo "<h3>".$_POST['description']."</h3>";
    }






    ?>
</body>
</html>
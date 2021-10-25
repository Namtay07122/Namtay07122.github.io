<?php
    require_once('dbhelper.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <title>Document</title>
</head>
<body>

    <form action="" method="POST" enctype='multipart/form-data'>
        <input type="text" placeholder="Name" name="title" id="">
        <input type="file" name="uploadFile" >
        <input type="text" name="other" id="">
        <input type="file" name="image" id="" id="" onchange="readURL(this);">
        <img id="blah" src="#" alt="your image" />
        <input type="text" name="summary" id="">
        <select name="category" id="">
        <?php 

            $sql = "select * from category " ;
            $variable = executeResult($sql);
            foreach ($variable as  $value) { ?>
                    
            <option value="<?=$value['id']?>"><?=$value['name']?></option>

        <?php } ?>
        </select>
        <?php  require('action.php') ?>
        <input type="submit" name="submit1" value="Submit">
    </form>
    
</body>
</html>
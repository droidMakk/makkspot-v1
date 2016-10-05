<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Decrypt Image</title>
        <link rel='icon' href="../../images/Icon-inside.webp">
    </head>
    <body>
        <link rel="stylesheet" href="../../css/bootstrap4.css" type="text/css">
        <link rel="stylesheet" href="../../css/w3.css" type="text/css">
        
        <div class="row" style="margin: 25px;">
            <div class='col-lg-3 col-md-2 col-sm-1 col-xs-1'></div>
            <div class='col-lg-6 col-md-8 col-sm-10 col-xs-10'>
                <div class="card">
                    <div class="card-header" style="text-align: center;font-size: 30px;">DeCrypt Image</div>
                    <div class="card-block">
                        <form action="" enctype="multipart/form-data" method="post">
                            <textarea type="text" name="code_img" placeholder="Enter your code here" style="width: 70%"></textarea><br>
                            <input type="submit" name="submit" value="Decrypt" class="btn btn-outline-success" style='float: right'>
                        </form>
                    </div>
                    <div class='card-block'>
                    <?php
                        if(isset($_POST['submit'])){
                            $img_code = $_POST['code_img'];
                            echo "<img src='data:image;base64,$img_code' style='width: 300px;'>";
                        }            
                    ?>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>

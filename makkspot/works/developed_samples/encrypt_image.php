<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="keywords" content="encrypt,image,php,base64,base,64,makkspot,encryptimage,file,change,decrypt,code,display,copy">
        <title>Encrypt Image</title>
        <link rel="icon" href="../../images/Icon-inside.webp">
    </head>
    
    <script src='../../js/jquery_31.js'></script>
    <script src='../../js/clipboard.min.js'></script>
    
    <style>
        #image_up{
            opacity: 0;
            margin-left: -120px;
            height: 25px;
            width: 120px;
        }
        .upload_btn{
            text-align: center;
            background-color: #005599;
            padding: 10px;
            color: white;
        }
        .upload{
            margin-left: 0px;
        }
    </style>
    <body style="background-color: #c3bfbf">
        <link rel='stylesheet' href="../../css/bootstrap4.css" type="text/css">
        <link rel="stylesheet" href='../../css/w3.css' type="text/css">
        <?php
            if(isset($_POST['upload'])){
                $img = $_FILES['img_upload']['tmp_name'];
                $img = addslashes($img);
                $img = file_get_contents($img);
                $img_encoded = base64_encode($img);
                    }
                        ?>
        <div class="row" style="margin: 30px;">
            <div class="col-lg-3 col-md-3 col-sm-1 col-xs-1"></div>
            <div class="w3-card-4 card w3-center col-lg-6 col-md-6 col-sm-10 col-xs-10">
                <div class='card-header' style="padding: 20px;margin: 10px;background-color: #005599;color: whitesmoke;border-radius: 5px;">Image Encryptor Base64</div>
                <div class="card-block">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="upload">
                            <span class="upload_btn">Select Image</span>
                            <input type='file' name="img_upload" id="image_up">
                        </div>
                        <div style="margin-top: 30px;">
                            <input type="submit" name='upload' class="btn btn-outline-primary" value="Encrypt" onclick="alert('Please wait while the image gets uploaded!')">
                        </div>
                        <div style="margin: 20px;" class="card">
                            <div class="card-header card-outline-warning w3-center">
                                We won't save your image!
                            </div>
                            <div class="card-block">
                                <?php
                                  if(isset($_POST['upload'])){
                                    echo "<img style='width: 250px' src='data:image;base64,$img_encoded'>";
                                    }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 w3-card-4 card">
                <div class="w3-center card-header">Encrypted Code<br><p style="font-size: 12px;">click button to copy</p></div>
                <div style="padding: 10px;" class="card-block">
                    
                    <input  type="text"
                        style="overflow-x: 
                        scroll;width: 70%" 
                        id="copyfile_2" placeholder="Your Code will Appear Here" value="<?php if(isset($_POST['upload'])) echo $img_encoded; ?>"
                        >
                    
                    <button class="clipbtn btn btn-primary" style="float: right;margin: 10px;" data-clipboard-action='copy' data-clipboard-target='#copyfile_2'>
                        Copy Code
                    </button>
                </div>
                <div class="card-block">
                    <button class="btn btn-primary" onclick="location.href='decrypt_imge.php'" style="margin-left: 35%">
                        Decrypt Image Here
                    </button>
                </div>
            </div>
        </div>   
        
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-sm-3 col-xs-3">
            </div>
            <div class="col-lg-6 col-sm-6 col-sm-6 col-xs-6">
                <button class="btn btn-secondary btn-block" onclick="location.href='../view_samples/image_encryption_view.php'">Go Back</button>
            </div>
            <div class="col-lg-3 col-sm-3 col-sm-2 col-xs-2">
            </div>
        </div>
        
    </body>
    
    <script>
        var clipboard = new Clipboard('button.clipbtn');
        
        clipboard.on('success',function(e){
            console.log(e);
            alert('Copied');
        });
        clipboard.on('error',function(e){
            console.log(e);
            alert('Unable to Copy!');
        });
    </script>
</html>


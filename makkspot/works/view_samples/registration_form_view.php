<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="icon" href="../../images/Icon-inside.webp">
    </head>
    
    <style>
        .text-box{
            border-radius: 5px;
            background-color: whitesmoke;
        }
    </style>
    
    <script src="../../js/jquery_31.js"></script>
    <script src="../../js/clipboard.min.js"></script>
    
    <script id="anim_nav">
        $(document).ready(function(){
            $('.nav_style').mouseenter(function(){
               $(this).animate({
                right: '5px',
                letterSpacing: '2px'
            },'slow');
            });
            $('.nav_style').mouseleave(function(){
               $(this).animate({
                right: "0px",
                letterSpacing: '0px'
            },'slow');
            });
            $('.icon').mouseenter(function(){
               $(this).animate({
                  left: '5px'
               },'slow');
            });
            $('.icon').mouseenter(function(){
               $(this).animate({
                  left: '0px'
               },'slow');
            });
        });
    </script>
    
    <script>
        $(document).ready(function(){
            $('div.toggler').click(function(){
                $('ul.navbar').toggle('1000');
            });
        });
    </script>
    
    <style>
        .nav_style{
            text-align: center;
            margin: 15px;
            padding: 5px;
            cursor: pointer;
            opacity: 0.7;
            position: relative;
        }
        .nav_style:hover{
            border-bottom-color: dodgerblue;
            opacity: 1;
        }
        .secondary{
            font-size: 15px;
        }
        .active{
            font-size: 25px;
            color: darkslateblue;
            opacity: 1;
            letter-spacing: 4px;
        }
        .icon{
            width: 30px;
            position: relative;
            margin: 2px;
        }
        #frame{
            width: 100%;
            height: 400px;
        }
        .toggler{
            margin: auto;
            text-align: center;
            background-color: dodgerblue;
            color: white;
            padding: 10px;
            font-size: 20px;
        }
    </style>
    
    
    <body>
        <link rel="stylesheet" href="../../css/bootstrap4.css" type="text/css">
        <link rel="stylesheet" href="../../css/w3.css" type="text/css">
        
        <div class="row">
            <img src="../../images/background.jpg" alt="Makkspot Background" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        </div>
        
        
            
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height: 20px;background-color: #1F90F2"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height: 20px;background-color: #ED400C"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height: 20px;background-color: #1FC20A"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height: 20px;background-color: #F5E833"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height: 20px;background-color: #9E0EE6"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height: 20px;background-color: #ED0974"></div>
        </div>
    
        <div class="row" style="margin-top: 10px;">
           <div class="animate-right card col-lg-4 col-md-3 col-sm-12 col-xs-12" 
              id="nav" 
               style="float: right">
               <div class='toggler'>NavPane</div>
                <ul class=" nav nav-stacked navbar">
                    <li onclick="location.href='../../index.php'">
                        <h5 class="nav-tabs nav_style ">Home</h5>
                    </li>
                    <li>
                        <h5 class="nav-tabs nav_style">Works</h5>
                    </li>
                    <li onclick="location.href='works/view_samples/registration_form_view.php'">
                        <h5 class="nav-tabs nav_style secondary active">
                            Registration Form
                        </h5>
                    </li>
                    <li onclick="location.href='image_encryption_view.php'">
                        <h5 class="nav-tabs nav_style secondary">Image Encryption</h5>
                    </li>
                    <li>
                        <h5 class="nav-tabs nav_style">Blogs &amp; Reviews</h5>
                    </li>
                    <li>
                        <h5 class="nav-tabs nav_style secondary">
                            <abbr title="It's a Blog on One The of Oldest Society" style="text-decoration: none;border-bottom-style: none;">
                                The Freemasons
                            </abbr>
                        </h5>
                    </li>
                    <li>
                        <h5 class="nav-tabs nav_style secondary">The LastSupper</h5>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 w3-center" id="content">
                <div class="card w3-card-4">
                    <section class="card-header"><h3>View of Registration Form</h3></section>
                    <section class="">
                        <iframe scrolling="no" src="../developed_samples/registration_form.php" id="frame" style="height: 620px;" >
                        </iframe>
                    </section>
                    <section class="source_code card-footer" style="">
                       <div style="float: left">
                           You can download the source code from GitHub
                       </div>
                        <div style="float: right">
                            <div class="btn btn-primary" onclick="location.href='../developed_samples/registration_form.php'">View Page</div>
                            <img src="../../icons/github.png" class="icon" onclick="location.href='https://github.com/khankafroze/registration-form'">
                        </div>
                    </section>
                </div>
                <div class="card w3-card-4">
                    <section class="card-header"><h3>Hosted Libraries</h3><header style="font-size: 12px;color: grey">Click Button to copy link</header></section>
                    <section style="padding: 20px;" class="card-blockquote card-warning">
                        The StyleSheet by W3Schools is not hosted but you can manually download and include it
                        the download link is given below<br>
                        I have created with <b>Bootstrap 4</b> which is not hosted, but you can download it from below link. I
                        have also added it in github repo.
                    </section>
                    <section class="card-block" style="background-color: #efeeee">
                        <div style="margin: 10px;">
                        <seciton>
                            <input id="bootstrap_link" type="text" class="text-box" style="width: 70%;text-align: center" value="http://v4-alpha.getbootstrap.com/getting-started/download/">
                        </seciton>
                        <span>
                            <button style="width: 120px;"  data-clipboard-action="copy" data-clipboard-target="#bootstrap_link" class="btnclipone btn w3-green">BootStrap</button>
                        </span>
                        </div>
                        <div style="margin: 10px;">
                        <seciton>
                            <input id="jquery_link" type="text" class="text-box" style="width: 70%;text-align: center" value="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
                        </seciton>
                        <span>
                            <button style="width: 120px;"  data-clipboard-action="copy" data-clipboard-target="#jquery_link" class="btnclipone btn w3-green">JQuery</button>
                        </span>
                        </div>
                        <div style="margin: 10px;">
                        <seciton>
                            <input id="w3css" type="text" class="text-box"  style="width: 70%;text-align: center" value="http://www.w3schools.com/lib/w3.css">
                        </seciton>
                        <span>
                            <button style="width: 120px;"  data-clipboard-action="copy" data-clipboard-target="#w3css" class="btnclipone btn w3-green">w3 CSS</button>
                        </span>
                        </div>
                    </section>
                </div>
            </div>
                
            <script>
                var clipboardone = new Clipboard('.btnclipone');
                
                clipboardone.on('success',function(e){
                    console.log(e);
                    alert('Copied!');
                });
                
                clipboardone.on('failure',function(e){
                    console.log(e);
                    alert('Not Copied!');
                });
            </script>
            
            
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 card btn btn-secondary" style="font-size: 20px;text-align: center;padding: 30px;background-color: #c8c8c8">
                <div><img src="../../images/Icon-inside.webp" style="width: 60px;float: left"></div><div style="float: right;padding-top: 20px;">&copy; MakkSpot 2016</div>
            </div>
        </div>
    </body>
</html>

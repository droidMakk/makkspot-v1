<html>
    <head>
        <meta name="keywords" content="makkspot,afroze,k,khan,afrozekkhan,blog,site,code,snippets,html,javascript,reviews,php,mysql">
        <title>Makkspot</title>
        <link rel="icon" href="images/Icon-inside.webp" id="icon_makkspot">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <script src="js/jquery_31.js"></script>
    
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
        .img_bg{
            
        }
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
        .toggler{
            margin: auto;
            text-align: center;
            background-color: dodgerblue;
            color: white;
            padding: 10px;
            font-size: 20px;
        }
        .toggler_one{
            margin: auto;
            text-align: center;
            background-color: gainsboro;
            color: dodgerblue;
            padding: 10px;
            font-size: 20px;
        }
        .clsbtn{
            cursor: pointer;
        }
    </style>
    
    
    <body>
        <link rel="stylesheet" href="css/bootstrap4.css" type="text/css">
        <link rel="stylesheet" href="css/w3.css" type="text/css">
        
        
        <div class="row">
            <img src="images/background.jpg" alt="Makkspot Background" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="image_bg">
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
                <ul class=" nav nav-stacked navbar" style="overflow-y: scroll;overflow-x: hidden;height: device-height;">
                    <li>
                        <h5 class="nav-tabs nav_style active">Home</h5>
                    </li>
                    <li>
                        <h5 class="nav-tabs nav_style">Works</h5>
                    </li>
                    <li onclick="location.href='works/view_samples/registration_form_view.php'">
                        <h5 class="nav-tabs nav_style secondary">
                            Registration Form
                        </h5>
                    </li>
                    <li onclick="location.href='works/view_samples/image_encryption_view.php'">
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
                        <h5 class="nav-tabs nav_style secondary"></h5>
                    </li>
                </ul>
            </div>
               
               <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 w3-center" id="content">
                <div class="card w3-card-4 card-info" id="nav_beta" style="padding: 20px;color: azure;">Sorry About the NavPane it's just for Beta Version! 
                    <span style="float: right" onclick="document.getElementById('nav_beta').style.display='none'" class='clsbtn'>&times;</span>
                </div>
                <div class="card w3-card-4">
                    <section class="card-header w3-blue"><h6>About Me</h6></section>
                    <section class="card-block">
                        Hi, I'm Afroze this is my blogging site. If you're here then you must have lookedup my
                        profile in any of social networks
                    </section>
                    <section class="card-footer">
                        <div style="float: left">
                            You Can get in touch with me here
                        </div>
                        <div style="float: right">
                            <img src="icons/github.png" class="icon" onclick="location.href='https://github.com/khankafroze'" title="Github/KhanKAfroze">
                            <img src="icons/google-plus.png" class="icon" onclick="location.href=''" title="Google/KhanKAfroze">
                            <img src="icons/linkedin.png" class="icon" onclick="location.href='https://www.linkedin.com/in/khankafroze'" title="LinkedIn/KhanKAfroze">
                            <img src="icons/twitter.png" class="icon" onclick="location.href='https://twitter.com/@khankafroze'" title="@KhanKAfroze">
                        </div>
                    </section>
                </div>
                <div class="card w3-card-4">
                    <section class="card-header w3-blue"><h6>About Blog</h6></section>
                    <section class="card-block">
                        Here I Would be blogging about some tech stuffs, reviews if i happen to buy some product &amp; also about books which
                        i learn, some code samples or snippets i would be putting those in this blog
                    </section>
                </div>
            </div>
            
            
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 card btn btn-secondary" style="font-size: 20px;text-align: center;padding: 30px;background-color: #c8c8c8">
                <div><img src="images/Icon-inside.webp" style="width: 60px;float: left"></div><div style="float: right;padding-top: 20px;">&copy; MakkSpot 2016</div>
            </div>
        </div>
    </body>
</html>
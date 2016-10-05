<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <script src="../../js/jquery_31.js"></script>
    </head>
    
    <style>
        #cls{
            cursor: pointer;
        }
    </style>
    
    
    <body>
        <link rel="stylesheet" href="../../css/login.css" type="text/css">
        <link rel="stylesheet" href="../../css/w3.css" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap4.css" type="text/css">
        
        
        <div class="w3-container w3-col l3">
            <div class="btn btn-primary" onclick="location.href='../view_samples/login_credentials_view.php'">Go Back</div>
        </div>
        
        <div class="w3-container w3-col l6 form_container_1" style="margin-top: 25px;">
            <header class="w3-center" style="font-size: 25px;color: dodgerblue;margin-bottom: 30px;">Login Credentials</header>
            <form action="" enctype="multipart/form-data">
                
                <div class="w3-center w3-container" style="margin-top: 15px;margin-bottom: 15px;">
                    
                    <input type="text" class="input_field" placeholder="Your Username" id="username" name="username" 
                       onfocusout="empty_username()" style="float: left;width: 40%" >
                    
                    <span class="prompt_display w3-animate-opacity" id="username_prompt" onfocusout="empty_username()" style="display: none;">
                        Enter Your Username
                        
                        <span id='cls' style="padding-left: 5px;" onclick="document.getElementById('username_prompt').style.display='none';">
                            &times;
                        </span>
                    </span>
                </div>
                
                
                
                <div class="w3-container w3-center" style="margin-top: 15px;margin-bottom: 15px;">
                    
                    <input id="password" class="password input_field" type="password" placeholder="Your Password" name="password" onfocusout="empty_password()" style="float: left;width: 40%">
                    
                    <span id="password_prompt" style="display: none;" class="w3-center prompt_display w3-animate-opacity">
                        Enter Password
                        
                        <span id="cls" style="padding-left: 5px;" onclick="document.getElementById('password_prompt').style.display='none';">
                            &times;
                        </span>
                    </span>
                </div>
                
                <div class="w3-center">
                    <input type="submit" name="login" value="Login" class="w3-btn w3-blue login_btn" style="margin-top: 20px;" disabled="diabled">
                </div>
            </form>
        </div>
        <div class="w3-container w3-col l3">
        </div>
        
        
    </body>
</html>

<script>
            function empty_username(){
                if(document.getElementById('username').value==''){
                     document.getElementById('username_prompt').style.display='block';
                    document.getElementById('username').style.borderColor='firebrick';
                    $('.login_btn').attr('disabled','disabled');
                }
                else if((document.getElementById('password').value!='')&&(document.getElementById('username').value!='')){
                    $('.login_btn').removeAttr('disabled','disabled');
                    document.getElementById('password_prompt').style.display='none';
                    document.getElementById('password').style.borderColor='dodgerblue';
                    document.getElementById('username_prompt').style.display='none';
                    document.getElementById('username').style.borderColor='dodgerblue';
                }
                else if((document.getElementById('password').value=='')&&(document.getElementById('username').value=='')){
                    $('.login_btn').attr('disabled','disabled');
                    
                }
                else if(document.getElementById('username').value!=''){
                    document.getElementById('username_prompt').style.display='none';
                    document.getElementById('username').style.borderColor='dodgerblue';
                }
            }
        </script>
        <script>
            function empty_password(){
                if(document.getElementById('password').value==''){
                     document.getElementById('password_prompt').style.display='block';
                    document.getElementById('password').style.borderColor='firebrick';
                    $('.login_btn').attr('disabled','disabled');
                }
                else if((document.getElementById('password').value!='')&&(document.getElementById('username').value!='')){
                    $('.login_btn').removeAttr('disabled','disabled');
                    document.getElementById('password_prompt').style.display='none';
                    document.getElementById('password').style.borderColor='dodgerblue';
                }
                else if((document.getElementById('password').value=='')&&(document.getElementById('username').value=='')){
                    $('.login_btn').attr('disabled','disabled');
                }
                else if(document.getElementById('password').value!=''){
                    document.getElementById('password_prompt').style.display='none';
                    document.getElementById('password').style.borderColor='dodgerblue';
                }
            }
        </script>
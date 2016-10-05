 <html>
    <head>
        <meta name="keywords" content="registration,form,code,snippet,makkspot">
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
        <link rel="icon" href="../../images/Icon-inside.webp">
        <title>Form Validating</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

     <script>
        function check_empty_name(){
            if(document.getElementById("name").value==''){
                document.getElementById("name").style.borderBottomColor='firebrick';
                $("#alert_name").animate({
                opacity: 1,
                });
                $('#submit').attr('disabled','disabled');
                }else if(document.getElementById("name").value!=''){
                document.getElementById("name").style.borderBottomColor='dodgerblue';
                $("#alert_name").animate({
                opacity: 0,
                });
                if((document.getElementById("name").value!='')&&
                        (document.getElementById("regnum").value!='')&&
                            (document.getElementById("collegename").value!='')&&
                                (document.getElementById("mobilenumber").value!='')&&
                                    (document.getElementById("mail").value!='')){
                                $('#submit').removeAttr('disabled','disabled');
                }else if((document.getElementById("name").value=='')||
                        (document.getElementById("regnum").value=='')||
                            (document.getElementById("collegename").value=='')||
                                (document.getElementById("mobilenumber").value=='')||
                                    (document.getElementById("mail").value=='')){
                                $('#submit').attr('disabled','disabled');
                }
            }
        }
     </script>
     
     <script>
        function check_empty_num(){
            if(document.getElementById("regnum").value==''){
                document.getElementById("regnum").style.borderBottomColor='firebrick';
                $("#alert_num").animate({
                    opacity: 1,
                });
                $('#submit').attr('disabled','disabled');
                }else if(document.getElementById("regnum").value!=''){
                    document.getElementById("regnum").style.borderBottomColor='dodgerblue';
                    $("#alert_num").animate({
                        opacity: 0,
                    });
                       if((document.getElementById("name").value!='')&&
                        (document.getElementById("regnum").value!='')&&
                            (document.getElementById("collegename").value!='')&&
                                (document.getElementById("mobilenumber").value!='')&&
                                    (document.getElementById("mail").value!='')){
                                $('#submit').removeAttr('disabled','disabled');
                }else if((document.getElementById("name").value=='')||
                        (document.getElementById("regnum").value=='')||
                            (document.getElementById("collegename").value=='')||
                                (document.getElementById("mobilenumber").value=='')||
                                    (document.getElementById("mail").value=='')){
                                $('#submit').attr('disabled','disabled');
                }
                }
            }
    </script>
     
     <script>
        function check_empty_college(){
            if(document.getElementById("collegename").value==''){
                document.getElementById("collegename").style.borderBottomColor='firebrick';
                $("#alert_college").animate({
                    opacity: 1,
                });
                $('#submit').attr('disabled','disabled');
                }else if(document.getElementById("collegename").value!=''){
                    document.getElementById("collegename").style.borderBottomColor='dodgerblue';
                    $("#alert_college").animate({
                        opacity: 0,
                    });
                    if((document.getElementById("name").value!='')&&
                        (document.getElementById("regnum").value!='')&&
                            (document.getElementById("collegename").value!='')&&
                                (document.getElementById("mobilenumber").value!='')&&
                                    (document.getElementById("mail").value!='')){
                                $('#submit').removeAttr('disabled','disabled');
                }else if((document.getElementById("name").value=='')||
                        (document.getElementById("regnum").value=='')||
                            (document.getElementById("collegename").value=='')||
                                (document.getElementById("mobilenumber").value=='')||
                                    (document.getElementById("mail").value=='')){
                                $('#submit').attr('disabled','disabled');
                }
                
                }
            }
    </script>
     
     <script>
            function check_empty_mobnumber(){
                if(document.getElementById("mobilenumber").value==''){
                    document.getElementById("mobilenumber").style.borderBottomColor='firebrick';
                    $("#alert_mobnumber").animate({
                        opacity: 1,
                    });
                    $('#submit').attr('disabled','disabled');
                    }else if(document.getElementById("mobilenumber").value!=''){
                        document.getElementById("mobilenumber").style.borderBottomColor='dodgerblue';
                        $("#alert_mobnumber").animate({
                            opacity: 0,
                        });
                        if((document.getElementById("name").value!='')&&
                        (document.getElementById("regnum").value!='')&&
                            (document.getElementById("collegename").value!='')&&
                                (document.getElementById("mobilenumber").value!='')&&
                                    (document.getElementById("mail").value!='')){
                                $('#submit').removeAttr('disabled','disabled');
                }else if((document.getElementById("name").value=='')||
                        (document.getElementById("regnum").value=='')||
                            (document.getElementById("collegename").value=='')||
                                (document.getElementById("mobilenumber").value=='')||
                                    (document.getElementById("mail").value=='')){
                                $('#submit').attr('disabled','disabled');
                }
                
                    }
                }
    </script>
     
     <script>
         function check_empty_mail(){
            if(document.getElementById("mail").value==''){
                document.getElementById("mail").style.borderBottomColor='firebrick';
                $("#alert_email").animate({
                    opacity: 1,
                });
                $('#submit').attr('disabled','disabled');
                }else if(document.getElementById("mail").value!=''){
                    document.getElementById("mail").style.borderBottomColor='dodgerblue';
                    $("#alert_email").animate({
                        opacity: 0,
                    });
                    if((document.getElementById("name").value!='')&&
                        (document.getElementById("regnum").value!='')&&
                            (document.getElementById("collegename").value!='')&&
                                (document.getElementById("mobilenumber").value!='')&&
                                    (document.getElementById("mail").value!='')){
                                $('#submit').removeAttr('disabled','disabled');
                }else if((document.getElementById("name").value=='')||
                        (document.getElementById("regnum").value=='')||
                            (document.getElementById("collegename").value=='')||
                                (document.getElementById("mobilenumber").value=='')||
                                    (document.getElementById("mail").value=='')){
                                $('#submit').attr('disabled','disabled');
                }
                
                }
            }
    </script>

    <body>

        <link rel="stylesheet" type="text/css" href="../../css/bootstrap4.css">
        <link rel="stylesheet" type="text/css" href="../../css/w3.css">
        <link rel="stylesheet" type="text/css" href="../../css/makkspot_css.css">

        <div>
            
            <form action="" method="post">
                
                <div class="row" style="margin-top: 50px;">
                    
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1"></div>    
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10  w3-card-16 w3-white" style="padding: 40px;border-radius: 20px;">
                        <div style="margin: 20px;margin-bottom: 50px;">
                            <header style="text-align: center">
                                <h2><b style="font-family: sans-serif;color: dodgerblue">Registration Form</b></h2>
                            </header>
                        </div>
                        
                        <div style="margin-bottom: 10px;">
                            <abbr title="Enter your name right in this!">
                                <input type="text" name="name" id="name" placeholder="Your Full Name" class="text_box_style" style="width: 100%;" onfocusout="check_empty_name()">
                                
                            </abbr>
                            <span class="alert" id="alert_name" style="float: right;opacity: 0">
                                You must be having a name?
                                <span class="m_closebtn" onclick="document.getElementById('alert_name').style.opacity='0'">
                                    &times;
                                </span>
                            </span>
                        </div>
                        
                        <div  style="margin-bottom: 10px;">
                            <abbr title="Your Register Number goes here!">
                                <input type="number" name="regnum" id="regnum" placeholder="Your Register Number" class="text_box_style" style="width: 100%" onfocusout="check_empty_num()">
                            </abbr>
                            <span class="alert" id="alert_num" style="float: right;opacity: 0">
                                How do they allow you to write exams &#58;&#41;
                                <span class="m_closebtn" onclick="document.getElementById('alert_num').style.opacity='0';">
                                    &times;
                                </span>
                            </span>
                        </div>
                        
                        <div  style="margin-bottom: 10px;">
                            <abbr title="Your Register Number goes here!">
                                <input type="text" id="collegename" name="collegename" placeholder="College Name" class="text_box_style" style="width: 100%" onfocusout="check_empty_college()">
                            </abbr>
                            <span class="alert" id="alert_college" style="float: right;opacity: 0">
                                Are you really a student!
                                <span class="m_closebtn" onclick="document.getElementById('alert_college').style.opacity='0';">
                                    &times;
                                </span>
                            </span>
                        </div>
                        
                        <div  style="margin-bottom: 10px;">
                            <abbr title="Your Mobile Number!">
                                <input type="number" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number" class="text_box_style" style="width: 100%" onfocusout="check_empty_mobnumber()">
                            </abbr>
                            <span class="alert" id="alert_mobnumber" style="float: right;opacity: 0">
                                We need this for verification
                                <span class="m_closebtn" onclick="document.getElementById('alert_mobnumber').style.opacity='0';">
                                    &times;
                                </span>
                            </span>
                        </div>
                        
                        <div  style="margin-bottom: 10px;">
                            <abbr title="Your Email-ID Here!">
                                <input type="text" name="mail" id="mail" placeholder="yourmailid@example.com" class="text_box_style" style="width: 100%" onfocusout="check_empty_mail()">
                            </abbr>
                            <span class="alert" id="alert_email" style="float: right;opacity: 0">
                                We need this for verification
                                <span class="m_closebtn" onclick="document.getElementById('alert_email').style.opacity='0';">
                                    &times;
                                </span>
                            </span>
                        </div>
                        
                        
                        <div style="margin-bottom: 20px;margin-top: 50px;">
                            <input id="submit" type="submit" name="register" value="Register" class="btn btn-success" style="width: 40%" disabled="disabled">
                            <abbr title="This will reset all that you have entered">
                                <input type="reset" name="reset" onclick="$('#submit').attr('disabled','disabled');" value="Reset" class="btn btn-danger" style="width: 40%;float: right">
                            </abbr>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3"></div>
                </div>
                
            </form>
            
        </div>
        
        <div>
            <button class="btn btn-secondary btn-block" onclick="location.href='../view_samples/registration_form_view.php'">Go Back</button>
        </div>
    </body>
</html>
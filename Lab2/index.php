<?php
    require_once("./config.php");
    require_once("./functions.php");
    $error="";
    if(!empty($_POST))
    {
         $error=validate_form();
         if(empty($error))
         {
            $submit_date=date("F j Y g:i a");
            save_to_file($submit_date);

            die('<body style="background: linear-gradient(#ECF2FF,
            #E3DFFD,
            #E5D1FA,
            #FFF4D2) ;background-attachment: fixed;">
            <div style=";
            width:50%;
            margin:10vh auto;
            padding:3%;
            background-color: white;
            border-radius: 20px;">' 
            .'<center><h1 style="color:#A3C7D6;">'._THANK_YOU_.'</h1></br>'
            ."<h3> Your Submitted Data is </h3></br>"
            ."<p> This form was submitted at $submit_date</p>"
            ."<p> Name:  ".trim($_POST['name'])."</p>"
            ."<p> Email:  ".trim($_POST['email'])."</p>"
            ."<p> Message:  ".trim($_POST['message'])."</p>"
            .'</center>'.
       '</div></body>'

    );
   
         }
    }

    $parameter = isset($_GET["page"]) ? $_GET["page"] : "";
    if ($parameter === "all")
       require_once("./view/users.php");
     else
       require_once("./view/form.php");
?>
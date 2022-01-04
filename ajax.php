<?php
include_once('db.php');

if(isset($_POST) && $_POST['type'] =='field_update'){
    $field_name = mysqli_real_escape_string($connect,$_POST['fieldname']);
    $field_value = mysqli_real_escape_string($connect,$_POST['fieldvalue']);
 
    if(isset($_COOKIE['quizToken']) && !empty($_COOKIE['quizToken'])){
        $token = $_COOKIE['quizToken'];
    }else{
        $token = '';
    }
    $cookie_query = mysqli_query($connect,"SELECT * FROM `tbl_registers` WHERE `token_id`='$token'");
    $cookie_result = mysqli_fetch_assoc($cookie_query);
    $num = mysqli_num_rows($cookie_query);
    if($num>0){
        //update
        $date = date('Y-m-d H:i:s');
        $up = mysqli_query($connect,"UPDATE `tbl_registers` SET `$field_name`='$field_value',`updated_at`='$date' WHERE `token_id`='$token'");
        if(mysqli_affected_rows($connect)){
           echo 'updated';
        }else{
            echo 'not updated';
        }
    }else{
       // insert
       $in_sql = "INSERT INTO `tbl_registers` SET `$field_name`='$field_value'";
       $in = mysqli_query($connect,$in_sql);
       if(mysqli_affected_rows($connect)){
           $insert_id = mysqli_insert_id($connect);
           $token_id = uniqid().'_'.$insert_id;
           //setcookie
           setcookie('quizToken',$token_id,time() + (60*60*24*30),'/'); // for 30 days
           $date = date('Y-m-d H:i:s');
           $up = mysqli_query($connect,"UPDATE `tbl_registers` SET `token_id`='$token_id',`updated_at`='$date' WHERE `id`=$insert_id");
           echo 'inserted';
       }
    }

}

if(isset($_POST) && $_POST['type'] =='submit'){
    $exercise_intensity = mysqli_real_escape_string($connect,$_POST['exercise_intensity']);
    $perspiration_level = mysqli_real_escape_string($connect,$_POST['perspiration_level']);
    $fname = mysqli_real_escape_string($connect,$_POST['fname']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $phone = mysqli_real_escape_string($connect,$_POST['phno']);
 
    if(isset($_COOKIE['quizToken']) && !empty($_COOKIE['quizToken'])){
        $token = $_COOKIE['quizToken'];
    }else{
        $token = '';
    }
    $cookie_query = mysqli_query($connect,"SELECT * FROM `tbl_registers` WHERE `token_id`='$token'");
    $cookie_result = mysqli_fetch_assoc($cookie_query);
    $num = mysqli_num_rows($cookie_query);
    if($num>0){
        //update
        $date = date('Y-m-d H:i:s');
        $up = mysqli_query($connect,"UPDATE `tbl_registers` SET `exercise_intensity`='$exercise_intensity',`perspiration_level`='$perspiration_level',`name`='$fname',`email`='$email',`phone`='$phone',`updated_at`='$date' WHERE `token_id`='$token'");
        if(mysqli_affected_rows($connect)){
            //mail
            $to = $email;
            $subject = "Thank you for taking our quiz, ".explode(' ',$fname)[0];

            $message = "
            <html><head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Hi,".explode(' ',$fname)[0]."</p>
            <p>We used your responses to formulate a Personalized Nutrition System informed by science.</p>
            <p>Here's what our Registered Dietitians recommend adding to your daily regimen to support performance, expedite recovery + help you reach your individual fitness goals.</p>
            <p>products url</p>
            </body>
            </html>
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From: OZ Protein <ozprotein@example.com>' . "\r\n";
            // $headers .= 'Cc: te@example.com' . "\r\n";
            $mail = mail($to,$subject,$message,$headers);
            if($mail){
              mysqli_query($connect,"UPDATE `tbl_registers` SET `email_send`='1' WHERE `token_id`='$token'");
            }
            mysqli_close($connect);
            setcookie('quizToken',null,-1,'/');
           echo 'updated';
        }else{
            echo 'not updated';
        }
    }

}
?>
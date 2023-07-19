<?php
	if(isset($_POST['email']) && isset($_POST['message']) && isset($_POST['subject'])){
	    $to      = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $headers = 'From: music4bverify@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        if(mail($to, $subject, $message, $headers)){
            $response=array("success"=>"1","message"=>"update successfull");
        }else{
    	    $response=array("success"=>"0","message"=>"update failed");
        }
        
        header('Content-type: application/json');
        echo json_encode($response);
	}
?>
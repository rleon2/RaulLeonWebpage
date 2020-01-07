<?php
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $name = $_POST['email'];
        $name = $_POST['subject'];
        $name = $_POST['message'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth= true;
        $mail->Username = "rleon198419@gmail.com";
        $mail->Password = '';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("rleon198419@gmail.com");
        $mail->Subject=$subject;
        $mail->Message=$message;

        if($mail->send())
        $response = "Email is sent";
        else
            $response= "Something else"; 
    
        exit(json_encode(array("response" => $response)));
        
    }
?>

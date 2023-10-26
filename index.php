<?php
// mxlp ngkn hdvs bwph
    use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;
    // require "phpMailer/src/Exception.php";
    require "phpMailer/src/PHPMailer.php";
    require "phpMailer/src/SMTP.php";

    if(isset($_POST['submit'])){
        $mail = new PHPMailer(true);
        $mail -> isSMTP();
        $mail -> Host = "smtp.gmail.com";
        $mail -> SMTPAuth = true;
        $mail -> Username = "hamza.nawabi119@gmail.com"; // from which email send 
        $mail -> Password = "hgxt cbmf xjeq erkm"; // from 
        $mail -> SMTPSecure = "ssl";
        $mail -> Port = 465;

        $mail -> setFrom("hamza.nawabi119@gmail.com"); // from which email send
        $mail -> FromName = "Pizzerian Gigante";
        $mail -> addAddress("h.nawabi007@gmail.com"); // send to email 
        $mail -> isHTML(true);
        $mail -> Subject = $_POST["email"];
        $mail -> mailHeader = $_POST["email"];
        $mail -> Body = "<p style='font-size:20px;'>".$_POST['message']."</p>";
        $mail -> send();
        echo 
        "  
        <div class='container my-4'>
            <div class='alert alert-success mx-5'>your email send successfuly...</div>
        <div>
        ";


    }

    

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bs.min.css">
    <script src="./bs.min.js"></script>
    <title>Send Email</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4 my-3">
                <form action="" class="form-control py-4" method="POST">
                    <h3 class="text-center">Send Email</h3>
                    <label for="name">username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email">
                    <label for="Message">Message</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-success my-2" name="submit">Send Email</button>
                </form>
            </div>
            <div class="col-12 col-md-4"></div>
        </div>
    </div>
</body>
</html>
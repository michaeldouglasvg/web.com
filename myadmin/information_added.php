<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-form-collector</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $data_missing = array();

            if(empty($_POST['name'])){
                $data_missing[] = 'name'
            }else{
                $name = trim($POST['name']);
            }

            if(empty($_POST['email'])){
                $data_missing[] = 'email'
            }else{
                $email = trim($POST['email']);
            }

            if(empty($_POST['contact'])){
                $data_missing[] = 'contact'
            }else{
                $contact = trim($POST['contact']);
            }

            if(empty($_POST['subject'])){
                $data_missing[] = 'subject'
            }else{
                $subject = trim($POST['subject']);
            }

            if(empty($_POST['message'])){
                $data_missing[] = 'message'
            }else{
                $message = trim($POST['message']);
            }
            
            if(empty($data_missing)){
                require_once('myadmin/myadmin_added.php');

                $query = "INSERT INTO login_information(name, email, contact, subject, message) VALUES(NULL, ?, ?, ?, ?)";

                $stmt = mysqli_prepare($dbc, $query);
                i Integer
                d Double
                b Blobs
                s Everything Else

                mysqli_stmt_bind_param($stmt, "ssiss", $name, $email, $contact, $subject, $message)

                mysqli_stmt_execute($stmt);

                $affected_rows = mysqli_stmt_affected_rows($stmt);

                if($affected_row == 1){
                    echo 'Information entered successful';
                    mysqli_stmt_close();
                    mysqli_close($dbc);
                }else{
                    echo 'error occured <br/>';
                    echo mysql_eeror();
                }
            }else{
                echo 'You need to enter the folloeing data missing...<br />'
                foreach($data_missing as $missing){
                    echo '$missing<br />';
                }
            }
        }

    ?>
    <form action="myadmin/information_added.php" method="post">
    <b></b>
    <div class="contact-form" id="form">
      <div class="input-fields">
        <input type="text" class="input" id="name" name="name" placeholder="Name" maxlength="25">
        <input type="text" class="input" id="email" name="email" placeholder="Email Address" maxlength="40">
        <input type="text" class="input" id="phone" name="phone" placeholder="Phone" maxlength="15">
        <input type="text" class="input" id="subject" name="subject" placeholder="Subject" maxlength="40">
      </div>
      <div class="msg">
        <textarea placeholder="Message" maxlength="180" name="message"></textarea>
        <div class="btn" id="submit" name="submit">send</div>
      </div>
    </div>
</form>
</form>
</body>
</html>
<?php include 'config.php'?>
<?php include 'header.php'?>

<?php
    
    if(isset($_POST['Name']))
    {//data is submitted show it
        //echo $_POST['FirstName'];
        
        $to      = 'robert.byers@seattlecentral.edu';
        $subject = 'Clean Contact Page';
        $message = 'hello from ' . $_POST['Name'];
        $replyTo = 'robert.e.byers@gmail.com';
        $headers = 'From: noreply@example.com' . PHP_EOL . 
        'Reply-To: ' .$replyTo . PHP_EOL . 
        'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);        
        echo '<p>Thanks for contacting us!</p>';
        
    }else{//show a form
        echo '
    <form action="" method="post">
    Name: <input type="text" name="Name" /><br />
    Email: <input type="email" name="Email" /><br />
    <input type="submit" />
    </form>
    ';
}

    
?>

<?php include 'footer.php'?>
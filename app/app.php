<?php
    require('db.php');

    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
    
        if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
            insert_into_database($name, $email, $phone, $message);
            echo "<script>alert('Dekojame. Jusu uzklausa gauta. Netrukus susisieksime.');</script>";
        }
    }

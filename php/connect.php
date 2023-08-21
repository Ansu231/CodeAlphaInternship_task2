<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $token = $_POST['g-recaptcha-response'];
    $key = "6LfUu6snAAAAAPtKKC5FDyggxBRjQtvNyl-UHPbw";
    $url="https://www.google.com/recaptcha/api/siteverify?secret=".$key.'&response='.$token;
    $data=file_get_contents($url);
    $response = json_decode($data,true);
    if($response['success']){
        //connenction code
        $conn=mysqli_connect('localhost','root','','contact');
        if(!$conn)
             echo"error in database";
        else{
            $query="insert into data(name,email,phone,message) values('$name','$email','$phone','$message')";
           $res= mysqli_query($conn,$query);
           if(!$res){
            echo"error in query";
           }
           else{
            echo"message submitted";
           }
        }

    }
    else{
        echo "error";
    }
}
else{
    echo"error";
}
?>
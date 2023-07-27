<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$namecard = $_POST['namecard'];
$number = $_POST['number'];
$Expdate = $_POST['Expdate'];
$Amount = $_POST['Amount'];
$cvv = $_POST['cvv'];

//Database connection
$conn = new mysqli('127.0.0.1:3307','root','','pay');

if ($conn){
    $sql = "INSERT INTO `pay` ( `fullname`, `email`,`address`,`city`, `state`, `zipcode`, `namecard`,`number`,`Expdate`,`Amount`,`cvv`) VALUES ('$fullname', '$email', '$address' ,'$city' ,'$state', '$zipcode', '$namecard', '$number', '$Expdate', '$Amount', '$cvv')";
    $result = mysqli_query($conn, $sql);
    echo "payment successfully";
    if ($result){
        $showAlert = true;
        echo "<script>
            alert(\" success\");
            window.location = \"index.php\"
          </script>";
    }
    
}
else{
    die("Error".mysqli_connect_error());
}
// if ($conn->connect_error){
//     die('connection failed : '.$conn->connect_error); 
    
// }
// else{
//     $stmt = $conn->prepare("insert into pay(fullname, email, address, city, state, zipcode, namecard, number, Expmonth, Expyear, cvv) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)");
//     $stml->bind_pay("sssssisissi",$fullname, $email, $address ,$city ,$state, $zipcode, $namecard, $number, $Expmonth, $Expyear, $cvv);
//     $stml->execute();
//     echo "payment successfully...";
//     $stml->close();
//     $conn->close();
// }


?>
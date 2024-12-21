<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
 </head>
 <style>
        h3 {
            color: #964B00;
        }
        label {
            color: #964B00;
        }
        input {
            border: 1px solid #964B00;
            background-color: #ffffff;
            height: 35px; 
        }
        .div1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .div2 {
            padding: 30px 50px 30px 50px;
            border: 1px solid #ccc;
            background-color: white;
            border-radius: 20px;
            background-color: #E8E4C9;
        }
        #input1 {
            width: 407px;
        }
        #input2 {
            height: 65px;
            width: 407px;
        }
        #input3 {
            height: 65px;
            width: 407px;
        }
        .btn1 {
            width: 110px;
            margin-left: 140px;
            background-color: #964B00;
            border-radius: 10px;
            color: white; 
            margin-top: 10px;
            padding: 10px;
        }
    </style>
 <body>
        <div class="div1">
        <div class="div2">
            <h3>Formal Dinner Reservation Form</h3>
                <form action="" method="post">
                <label for="name">Name:</label>
                    <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="firstname" placeholder="Enter first name" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="lastname" placeholder=" Enter last name" required>
                   </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="email">Email:</label>
                        <br>
                        <input type="email" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone">Phone:</label>
                        <br>
                        <input type="number" name="phone" placeholder="  ### ### ####" required>
                   </div>
                </div>
                <br>
                <label for="tickets">Number of tickets that you would like to purchase</label>
                <br>
                <input type="number" name="tickets" id="input1" required>
                <br><br>
                <label for="name">Names of the people that will accompany you</label>
                <br>
                <input type="text" name="names" id="input2" required>
                <br><br>
                <label for="info">Any additional information that we should know</label>
                <br>
                <input type="text" name="info" id="input3">
                <br><br>
                <button name="sub" class="btn1" type="submit"> <h4>Send</h4></button>
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST['sub'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $tickets=$_POST['tickets'];
        $names=$_POST['names'];
        $info=$_POST['info'];

        $q = "insert into reservation_table(Firstname,Lastname,Email,Phone,No_of_Tickets,Name_of_people,Additional_info) value ('$fname','$lname','$email','$phone','$tickets','$names','$info')";
     $res = mysqli_query($con,$q);

     if ($res) {
        echo '<script>alert("Reservation Completed");window.location.href="read.php";</script>';
     }
    } 

    ?>
</body>
</html>
<?php
               

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $uname = $_POST['uname'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $dob = $_POST['dob'];
                    $amount = $_POST['amount'];

                     $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "trip";
                  
                    $conn = mysqli_connect($servername, $username, $password,$dbname);

                    // Check connection
                    if (!$conn) {
                      die("There is some issues in the server.We are Sorry for the inconvinence Caused ");
                    }
                    else{
                      $sql = "INSERT INTO trip (name, email, uname, phone, address, dob, amount) VALUES ('{$name}', '{$email}', '{$uname}', '{$phone}', '{$address}', '{$dob}', '{$amount}')";
                       if (mysqli_query($conn, $sql)) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="padding:50px; text-align:center; margin:50px;">
                        <strong>Success!</strong> Your entry has been submitted successfully!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>';
                
                                      } 
                                      else{
                                       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Failure!</strong> Server Problem Try after few minutes
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>';
                                      }
                                    }
                                }
                                ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Create Account</title>
        <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <nav>
        <nav id="navbar">
        <div id="logo">
         <p>BANK</p>
         </div>
         <ul>
            <li class="item"><a href="index.php">HOME</a></li>
            <li class="item"><a href="view-customer.php">VIEW-CUSTOMER</a></li>
            <li class="item"><a href="Money-Transfer.php">MONEY-TRANSFER</a></li>
         </ul>
        </nav>
        <div class="container">
        <h3>Register</h3>
        <p class="SubmitMsg">Thanks for submitting the form . We are happy to welcome you in our bank.</p>
        <form action="sid.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your name" required>
        <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
               <input type="text" name="uname" id="uname" placeholder="Enter Your Username" required>
               <input type="phone" name="phone" id="name" placeholder="Enter Your Phone" required>
        <input type="text" name="address" id="address" placeholder="Enter Your Address" required>
        <input type="text" name="dob" id="dob" placeholder="Enter Your Dob" required>
        <input type="text" name="amount" id="amount" placeholder="Enter Your Amount" required>
        </table>
         <button class="btn">Submit</button>

</div>
</form>
</body>
</html>
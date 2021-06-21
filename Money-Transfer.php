<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Money_Transfer</title>
    <style>
      html{
        margin:0;
        padding: 0;
      }
      body{
        margin:0;
        padding:0;
        background-color: white;
      }
      .container{
        width:80%;
        height:auto;

      }

      footer{
        background-color: skyblue;
        height:auto;
        margin-bottom: 0;
       }
       .container{
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       }

    </style>
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
            <li class="item"><a href="view-customer.php">View-Customer</a></li>
            <li class="item"><a href="Money-Transfer.php">Money-Transfer</a></li>
        </ul>
        </nav>
    <?php 


          if ($_SERVER["REQUEST_METHOD"] == "POST"){

             $user1 = $_POST['user1'];
             $user2 = $_POST['user2'];
             (float)$amo = $_POST['money'];

             $username = "root";
             $password = "";
             $servername = "localhost";
             $dbname = "trip";

             $conn = mysqli_connect($servername, $username, $password,$dbname);

             // Check connection
             if (!$conn) {
               die("There is some issues in the server.We are Sorry for the inconvinence Caused ");
            }


            else{
                $sql = "select * from trip where uname = '$user1'";
                $sql1 = "select * from trip where uname = '$user2'";

                $result = mysqli_query($conn, $sql);
                $result1 = mysqli_query($conn, $sql1);
                //  echo $result;
                // echo $result1;
                $num = mysqli_num_rows($result);
                $num1 = mysqli_num_rows($result1);
                if($num<0 && $num1<0){
                    echo'<div class="alert alert-primary text-center" role="alert">
                    No Data of Customer Present
                  </div>';
                                  }
                  
                                  else{
                                    $row = mysqli_fetch_assoc($result);
                                    $row1 = mysqli_fetch_assoc($result1);
                                    $amount = (float)$row["amount"];
                                    $amount1 = (float)$row1["amount"];
                  
                  
                                    if($amo>$amount){
                                      echo'<div class="alert alert-primary text-center" role="alert"><h3>
                    Account Balance is less</h3>
                  </div>';
                                    }
                                    else{
                                      $amount1 += $amo;
                                      $amount -= $amo;
                  
                                      $que = "update trip set amount = '$amount' where uname = '$user1'";
                                       $que1 = "update trip set amount = '$amount1' where uname = '$user2'";
                                        if(mysqli_query($conn, $que) && mysqli_query($conn, $que1)){
                                        echo'<div class="alert alert-primary text-center" role="alert" style="text-align:center";><h3 style="padding-top:10px 20px 10px 10px";>
                    Transaction Successful... username - '.$user1.' Transfered Rupees '.$amo.' to username - '.$user2.'</h3>
                  </div>';
                }
                else{
                 echo'<div class="alert alert-warning text-xenter" role="alert"><h3>
Transaction UnSuccessful</h3>
</div>';
                }




             }
           }


     }

}

     ?>


 <div class ="container my-4 mx-auto" ><br>
   <h4 align = "center" >Transfer Money Safely</h4><br>
   <form method = 'post' action = "Money-Transfer.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Sender's username" name = "user1" required>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Enter Recievers username" name = "user2" required>
            </div>

             <div class="form-group">
              <input type="text" class="form-control"  placeholder="Enter Amount to be transfered" name = "money" required>
             </div>
             <center>

        <button type="submit" class="btn btn-info btn-lg" >Send Money</button>
            </center>
             </form>

             <br>


</div>

    <footer class = "container-fluid text-center fixed-bottom" >

            <h4 class = "mt-3 text-center " >&copy;Copyright 2021 by Ritika Gupta</h4>


    </footer>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 
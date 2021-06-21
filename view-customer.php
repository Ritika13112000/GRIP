<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View -Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php


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
            $sql = "select * from trip";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num<0){
            echo'<h2>No Data of Customer Present</h2>';
          }
  
  
          }?>
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
         <div class="container">
            <table style="border-collapse:collapse;width:100%;color:#588c7e;font-family:monospace;font-size:20px;text-align:left;>
             <thead>
                 <tr>
                 <th scope="col">Our Customers</th>

                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Amount Present</th>
                 </tr>
             </thead>
             <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <th scope="row"><?php echo $row['name'];?></th>
            <td><?php echo $row['uname'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo 'Rs '.$row['amount'];?></td>
         </tr>
     
      <?php } ?>
             </tbody>
                </table>
            <!-- <center>
   
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">
  Send Money
</button>
  
</center> -->

</div>
 <footer style="padding:80px;" >
 <li class = "mt-3 text-center "style="text-align:center;font-size:20px; background-color:grey;" >&copy;Copyright 2021 by Ritika Gupta</li>

         
       
    </footer>



    <!-- al JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>
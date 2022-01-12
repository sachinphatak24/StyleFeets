<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
        .success-container {
            width:50%;
            position:absolute;
            top:30%;
            left:50%;
            transform:translate(-50%,-50%);
            color:#bdc3c7;
            font-weight:bold;
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
      <div class="success-container">
        
            <h2>Your Transaction has been Successfully Completed.</h2>
            <p>Your Order Will Arrive At Your Doorstep In 2-4 Business Days!</p>
            <p style="text-align:right;">Shop More? <br>
            <a style="text-align:right;" href="homee.php">Home</a></p>
        </div>  
       <?php session_unset(); ?>
</body>
</html>
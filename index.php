<?php
   include "GoogleData.php";
    
   if(isset($_POST['submit']))
   {
    if (empty($values[1])) {
        // print "No data found.\n";
        ?>
        <script> alert('Please Enter Atleast One Record...!');</script>
        <?php
    } else {
        // print "Name, Major:\n";
        // foreach ($values as $row) {
        //     // Print columns A and E, which correspond to indices 0 and 4.
        //     printf("%s, %s\n", $row[0], $row[1]);
        // }
        header('LOCATION: /project1/main.php');
    }
   }
?>
<!-- Client ID = 1024410539884-615h5p447o4kvh5leisbo806p5imotcd.apps.googleusercontent.com -->
<!-- API KEY = AIzaSyDr2M1W6DCKefju-3KZBmhtiGSyyTzwuVk -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style1.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-color:#3c3c3c; font-family:lato;">
<!-- <div style="width: 75%;
    margin: auto;
    margin-top:20px;
    margin-bottom: 20px;
    border: 2px solid #eaff79;
    border-radius: 5px;
    padding: 5px;"> -->
<!-- https://docs.google.com/spreadsheets/d/1eV39YX_qySbRIfqJ82CFas6w3aeAKiaTOB6hFY7hCMM/edit?usp=sharing -->
<h1>Welcome User</h1>
<h1>Please Enter Your Data Here</h1>


<center>
<iframe src="https://docs.google.com/spreadsheets/d/1eV39YX_qySbRIfqJ82CFas6w3aeAKiaTOB6hFY7hCMM/edit?usp=sharing?&amp;rm=minimal&amp;single=true&amp;" width="500" height="400" id="frame"></iframe><br>
</center>


<h5 id="validate">(Note: Name field is Mandatory.)</h5>
    <form action="" method="POST">
        <center><Button class="btn btn-primary btn-lg" type="submit" value="Next" name="submit">NEXT</Button></center>
    </form>
<!-- </div> -->
</body>
</html>
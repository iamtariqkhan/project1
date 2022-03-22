<?php
    require "fpdf.php";
    require "GoogleData.php";

    $img = $_GET['img'];
    $type = $_GET['type'];
    

    // echo "<img src='templates/$img' width=500 height=500/>";
    $data = array();
    $data = $values;
    $row= count($data)-1;
    // echo $data[1][0];
    
    
        for($i=1; $i<=$row; $i++)
        {
            
            $dir= dirname(realpath(__FILE__));
            $sep="/";   
            $font =$dir.$sep.'arial.ttf';
            // $font = realpath('/project1/arial.ttf');
            $image = imagecreatefromjpeg("templates/$img");
            $color = imagecolorallocate($image, 19, 21, 22);
            $name = $data[$i][0]; //[1][0], [2][0], [][], [][]
            $cert_type = $data[$i][1];//[1][1], [2][1], [][]
            imagettftext($image, 25, 0, 400, 340, $color, $font, $name,);
            imagettftext($image, 25, 0, 370, 470, $color, $font, $cert_type,);
            if($type=='jpg'){
                imagejpeg($image, __DIR__."/certificates/".$name.$i.".jpg");
                imagedestroy($image);
            }else{
                imagejpeg($image, __DIR__."/certificates/".$name.$i.".jpg");
                $pdf = new FPDF('L','in',[11.7, 8.27]);
                $pdf->AddPage();
                $pdf->Image(__DIR__."/certificates/".$name.$i.".jpg",0,0,11.7,8.27);
                $pdf->Output(__DIR__."/certificates/$name.$i.pdf","F");
                imagedestroy($image);
                unlink(__DIR__."/certificates/".$name.$i.".jpg"); 
            }
        }

        // // if(isset($_POST['back']))
        // {
        //     // header('/Certificate-Generator/project1/index.php');
        // }
        ?>
        <!-- <script> alert('Certificate Generated Successfully');</script> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\style1.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body id="download-body" style="background-color:#3c3c3c; font-family:lato;">
<br>
<h1> Your Certificates Generated Successfully</h1><br>
    <!-- <form action="" method="POST"> -->
    <center><img src="Smiley.png" height="200" width=""200/><br><br><br>
        <a href="/project1/index.php" class="btn btn-primary btn-lg" type="submit" name="back">Back to Home Page</a></center>
    <!-- </form> -->

</body>
</html>

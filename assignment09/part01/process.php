<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>
<!--
    Deepa Natarajan
    assignment 09
    19WI_INFO_2340_WW - Online - Internet Scripting
    Ms.Lisa Thoendel

    -->


<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php
        function BmiValue(){
            global $weight,$height;

            return ($weight/($height*$height))*703 ;

        }



   // $BMI_VALUE=($weight/($height*$height))*703 ;
    if (BmiValue() <18){ 
        $LABEL_VALUE="Underweight";
    } else if (BmiValue() >30){
        $LABEL_VALUE="Obese";
    }else {
        $LABEL_VALUE="Normal";
    }
  
?>


<h1>BMI Calculation</h1>

<p id="output-here">"Your BMI is <?php echo  BmiValue() ?>, which is considered  <?php echo  $LABEL_VALUE?> !"</p>

</body>

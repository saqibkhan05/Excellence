<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- founts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>pixsay news</title>
</head>

<body style="font-family: 'Montserrat', sans-serif;">

    <h1 align="center"><b>Excellence Technologies</b> </h1>
    <h1 align="center"> PHP Test </h1>
    <hr>
    <div class="container">

        <h1>Question 1</h1>
        </h1>
        <h5>
            Define an array of numbers (use any random numbers). Write a program in PHP to find the sum of the array of numbers defined. Do not use any library functions, need to do via for loops only
        </h5>

        <?php
        $numarray = [4, 2, 3, 2, 5, 6, 7, 8, 4];
        $sum = null;
        $sumforeach = null;
        for ($i = 0; $i <= 8; $i++) {
            $sum = $sum + $numarray[$i];
        }
        echo "( for loop) The sum is . " . $sum;
        ?>

        <!-- -------------------------------------------------------------------------------------- -->
        <hr>
        <h1>Question 2</h1>
        <h5>Suppose you have an array of 101 integers. This array is already sorted and all numbers in this array are consecutive. Each number only occurs once in the array except one number which occurs twice. Write a php code to find the repeated number
        </h5>
        <h5>e.g $arr = array(0,1,2,3,4,5,6,7,7,8,9,10...................);</h5>

        <?php

        $numarray = [0, 1, 2, 3, 4, 5, 6, 7, 7, 8, 9, 10, 11];
        $number_of_index = 0;

        foreach ($numarray as $var) {
            $number_of_index += 1;
        }
        $number_of_index = $number_of_index - 1;

        echo "<br>";

        for ($i = 0; $i < $number_of_index; $i++) {
            if ($numarray[$i] == $numarray[$i + 1]) {
                echo "the repeated number is " . $numarray[$i];
            }
        }
        ?>

        <!-- -------------------------------------------------------------------------------------- -->
        <hr>
        <h1>Question 4
        </h1>
        <h5>You are given an array of values, (positive, negative values both, but only integers) and a value. You have to print all the pairs whose sum is the given value. Write a function to do this.
        </h5>

        <?php

        $numarray = [1, 2, 3, 4, 5, 6, 7, 8, 9, -1, -2, -3, -4, -5, -6, -7];

        function getnumbers($num)
        {
            global $numarray;
            $value = $num;
            for ($i = 0; $i <= 10; $i++) {
                for ($j = 0; $j < 16; $j++) {
                    $sum = $numarray[$i] + $numarray[$j];
                    if ($sum == $value) {
                        echo "the pair is = " . $numarray[$i] . " & " . $numarray[$j];
                        echo "<br>";
                    }
                }
            }
        }
        getnumbers(7);
        ?>



    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
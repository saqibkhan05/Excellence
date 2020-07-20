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

        <h1>Question 5</h1>
        <h5> Design a mysql database. Requirements are as follows
            We have a user entity with columns username, password
            Every use can have multiple addresses. Address entity will have column street, pincode, country, state, phone no. So one user can have multiple addresses.
            Design a db structure for this using create table sql syntax
        </h5>

        <form method="POST" action="from.php">
            <div class="form-group">
                <label>street</label>
                <input type="text" name="street" class="form-control">
            </div>

            <div class="form-group">
                <label>pincode</label>
                <input type="text" name="pincode" class="form-control">
            </div>

            <div class="form-group">
                <label>country</label>
                <input type="text" name="country" class="form-control">
            </div>

            <div class="form-group">
                <label>state</label>
                <input type="text" name="state" class="form-control">
            </div>
            <div class="form-group">
                <label>phone_no</label>
                <input type="text" name="phone_no" class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">save</button>
        </form>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'Excellence') or die("databse connection error");

        if (isset($_POST['submit'])) {
            $street = $_POST['street'];
            $pincode = $_POST['pincode'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $phonenum = $_POST['phone_no'];

            $class_sql = "INSERT INTO `address`(`add_id`, `street`, `pincode`, `country`, `state`, `phone_no`) VALUES ('{$street}','{$pincode}','{$country}','{$state}','{$phonenum}')";
            $class_data = mysqli_query($conn, $class_sql) or die("databse query error");
        }
        ?>


        <pre>
    step1:
    create databade Excellence;

    step2:
    CREATE TABLE user(userid int[10], username varchar[20], password[20]);

    step3:
    CREATE TABLE address (add_id int(10), street varchar(20), pincode int(20), country varchar(20), state varchar(20), phone_no int(10));

    step4:
    INSERT INTO address(add_id, street, pincode, country, state, phone no) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]);


</pre>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
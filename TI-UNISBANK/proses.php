<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEM INFORMASI</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) 
        {
            $name = $_POST['name'];
            $p_number = $_POST['phoneNumber'];
            $email = $_POST['email'];
            $message = $_POST['message'];
        }

    ?>
    <div class="container">
    <br>
    <h1 align="center">Data Input</h1>
    <form action="form.html">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $name; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control" id="inputPassword" placeholder="No E-Mail for a moment" value="<?php echo $email; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control" id="inputPassword" placeholder="No Phone Number" value="<?php echo $p_number; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $message; ?>">
            </div>
        </div>
        <a href="form.html"><button type="submit" class="btn btn-light" name="ok" > OK</button> </a>
    </form>
    </div>
</body>
</html>



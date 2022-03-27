<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>LogIn</title>
</head>
<body class="justify-content-center">

    <?php require '../tmp/header.php'; ?>

    <h1>LogIn</h1>

    <form action="login.php" method="post">

        <div class="input-group mb-3 w-50 p-3 text-center">
            <span class="input-group-text" id="basic-email">@ Email Address</span>
            <input type="email" name="email" class="form-control" placeholder="email@hacking.es" aria-label="Email address" aria-describedby="basic-email">
        </div>
        <div class="input-group mb-3 w-50 p-3 text-center">
            <span class="input-group-text" id="basic-password">$ Password</span>
            <input type="password" name="password" class="form-control" placeholder="pass*****">
        </div>

        <input type="submit" name="Send">
        
    </form>

</body>
</html>


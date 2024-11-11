<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Shop Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="footernav.css">

</head>

<body>
    <?php include "navbaruser.php"?>
    <div class="container">
        <div class="login-form">
            <h2>Login Admin</h2>
            <form>
                <h1>Username</h1>
                <input type="text" placeholder="Username" required>
                <h1>Password</h1>
                <input type="password" placeholder="Password" required>
                <button type="submit">MASUK</button>


            </form>
        </div>
    </div>

    <?php include "footer.php"?>
</body>

</html>
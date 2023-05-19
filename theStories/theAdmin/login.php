<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <title>login</title>
</head>
<style>
    body {
        font-family: Roboto, Arial, sans-serif;
    }

    .main {
        width: 400px;
        height: 500px;
        box-shadow: 1px 0.5px 8px 0.5px #888888;
        margin: 60px auto;
        border-radius: 20px;
        background-color: white;

    }

    .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
        text-align: center;
    }

    .header1 {
        width: 100%;
        text-align: center;
        background-color: #214761;
        color: white;
        height: 100px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        line-height: 90px;
        margin-bottom: 20px;
    }

    input {
        width: 300px;
        background-color: #ebebeb;
        color: black;
        border-radius: 15px;
        border: 0px solid #ebebeb;
        text-align: left;
        height: 40px;
        margin-left: 40px;
        margin-top: 20px;
        padding-left: 10px;
    }

    input:focus {
        border: none;
        outline: none;
    }

    button {
        width: 310px;
        border-radius: 15px;
        text-align: center;
        border: none;
        background-color: #214761;
        color: white;
        height: 40px;
        margin-left: 40px;
        margin-top: 40px;
        font-weight: bold;
        cursor: pointer;


    }


    button:hover {
        opacity: 0.7;
    }

    .info {
        margin-top: 90px;
        margin-left: 140px;
        color: gray;
    }
</style>

<body>
    <form method="post" action="loginn.php">
        <div class="main">
            <div class="header1">
                <h2>Log In</h2>

            </div>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div>
                <input class="email" name="uname" type="text" placeholder="email">
            </div>
            <div>
                <input name="password" type="password" placeholder="Password">
            </div>
            <button type="submit">Log In</button>
            <div class="info">
                <small>An Admin Login Page</small>
            </div>

        </div>



    </form>
</body>


</html>
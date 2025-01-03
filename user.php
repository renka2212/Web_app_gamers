<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Account</title>
    <link rel="stylesheet" href="/css/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #141414;
            color: #e0e0e0;
        }

        .account-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #1f1f1f;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        .account-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .account-header h2 {
            font-size: 2rem;
            color: #ffffff;
        }

        .account-header p {
            font-size: 1.2rem;
            color: #bbbbbb;
        }

        .welcome-message {
            background-color: #1a4d77;
            border: 1px solid #307cbf;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #ffffff;
            text-align: center;
        }

        .account-details {
            margin-top: 20px;
        }

        .account-details h3 {
            color: #307cbf;
            margin-bottom: 10px;
        }

        .account-details ul {
            list-style: none;
            padding: 0;
        }

        .account-details ul li {
            margin-bottom: 10px;
            font-size: 1rem;
            color: #cccccc;
        }

        .account-actions {
            margin-top: 20px;
            text-align: center;
        }

        .account-actions button {
            background-color: #307cbf;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .account-actions button:hover {
            background-color: #1a4d77;
        }
    </style>
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="account-container">
        <div class="account-header">
            <h2>Personal Account</h2>
            <p>Manage your details, view activity, and more.</p>
        </div>

        <div class="welcome-message">
            <p>Welcome, <b><?=$_COOKIE['login']?></b>! Glad to see you here.</p>
        </div>

        <div class="account-details">
            <h3>Your Details:</h3>
            <ul>
                <li><b>Username:</b> <?=$_COOKIE['login']?></li>
                <li><b>Email:</b> <?=$_COOKIE['email']?></li>
                <li><b>Member Since:</b> January 2022</li>
                <li><b>Last Login:</b> <?php echo date("F j, Y, g:i a"); ?></li>
            </ul>
        </div>

        <div class="account-actions">
            <form action="lib/logout.php" method="POST">
                <button type="submit" name="logout">Logout</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>

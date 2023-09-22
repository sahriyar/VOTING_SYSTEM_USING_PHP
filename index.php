<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onlin Voating System - OVS.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
    <div id="headerSection">
        <h1>Online Voting System</h1>
    </div>
    <hr>
    
    <div id="bodySection">
        <form action="api/login.php" method="POST">
            <h3>Login</h3>
            <input type="number" name="mobile" placeholder="Enter Mobile"><br><br>
            <input type="password" name="password" placeholder="Enter password"><br><br>
            <select id="dropbox" name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select><br><br>
            <button id="loginbutton">Login</button><br><br>
            New user? <a href="routes/register.php">Register here</a>
        </form>
    </div>
    </center>
</body>
</html>
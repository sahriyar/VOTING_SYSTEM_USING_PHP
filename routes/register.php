<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onlin Voating System - OVS.</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center>

    <style>
        #address {
            width: 20%;
        }

        #imagepart {
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px;
            width: 20%;
        }

        #role {
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px;
            width: 20%;
        }

        #role select {
            border-radius: 5px;
            padding: 10px;
        }

    </style>

    <div id="headerSection">
        <h1>Online Voting System</h1>
        <hr>
    </div>
    <div id="bodySection">
        <h3>Registration</h3>
        <form action="../api/register.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter name">
            <input type="number" name="mobile" placeholder="Enter mobile"><br><br>
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="cpassword" placeholder=" Confirm Password"><br><br>
            <input id="address" type="text" name="address" placeholder="Address"><br><br>
            
                <div id="imagepart">
                    Upload Image: <input type="file" name="photo">
                </div>
                <br>
                <div id="role">
                    Select Role: <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                </div>
            
            <br>
            <button style="padding: 5px; font-size: 15px; background-color: green; color: white; border-radius: 5px; cursor: pointer;">Register</button><br><br>
            Already user? <a href="../index.php">Login here</a>
        </form>
    </div>
    </center>
</body>
</html>
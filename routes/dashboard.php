<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'];

    if($_SESSION['userdata']['status']==0){
        $status = '<b style="color: red;">Not Voted</b>';
    }
    else{
        $status = '<b style="color: green;">Voted</b>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onlin Voating System - OVS.</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <style>
        #backbtn{
            padding: 10px;
            border-radius: 5px;
            background-color: green;
            color: white;
            cursor: pointer;
            float: left;
            margin: 10px;
        }

        #backbtn:hover{
            color: red;
        }

        #logoutbtn{
            padding: 10px;
            border-radius: 5px;
            background-color: green;
            color: white;
            cursor: pointer;
            float: right;
            margin: 10px;
        }

        #logoutbtn:hover{
            color: red;
        }

        #Profile {
            background-color: lightgray;
            width: 30%;
            padding: 20px;
            border-radius: 10px;
            float: left;
        }

        #Group {
            background-color: lightgray;
            width: 60%;
            padding: 20px;
            border-radius: 10px;
            float: right;
        }

        #votebtn{
            padding: 10px;
            border-radius: 5px;
            background-color: green;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        #mainpanel{
            padding: 10px;
        }

        #voted{
            padding: 10px;
            border-radius: 5px;
            background-color: green;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }


    </style>
    <div id="mainSection">
        <center>
        <div id="headerSection">
            <a href="../"><button id="backbtn">Back</button></a>
            <a href="logout.php"><button id="logoutbtn">Logout</button></a>
            <h1>Online Voting System</h1>
        </div>
        </center>
        <hr>
        <div id="mainpanel">
        <div id="Profile">
        <center><img src="../uploads/<?php echo $userdata['photo']; ?>" height="100" width="100"></center><br><br>
            <b>Name:</b> <?php echo $userdata['name']; ?> <br><br>
            <b>Mobile:</b> <?php echo $userdata['mobile']; ?><br><br>
            <b>Address:</b> <?php echo $userdata['address']; ?><br><br>
            <b>Status:</b> <?php echo $status ?><br><br>
        </div>
        <div id="Group">
            <?php 
                if($_SESSION['groupsdata']){
                    for($i=0; $i<count($groupsdata); $i++){
                        ?>
                        <div>
                            <img style="float: right;" src="../uploads/<?php echo $groupsdata[$i]['photo']; ?>" height="100" width="100">
                            <b>Groups Name: </b><?php echo $groupsdata[$i]['name']; ?><br><br>
                            <b>Votes: </b><?php echo $groupsdata[$i]['votes']; ?><br><br>
                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']; ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']; ?>">

                                <?php 
                                    if($_SESSION['userdata']['status']==0){
                                        ?>
                                        <input type="submit" name="votebtn" value="Vote" id="votebtn">
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <button disabled type="button" name="votebtn" value="Vote" id="voted">Voted</button>
                                        <?php
                                    }
                                ?>
                                
                            </form>
                        </div>
                        <hr>
                        <?php
                    }
                }
                else{

                }
            ?>
        </div>
        </div>
    </div>
</body>
</html>
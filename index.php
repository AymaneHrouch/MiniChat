<!DOCTYPE html>
<html>

<head>
    <title>Chat With Me Now</title>

    <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
</head>

<body style="background-image: url('https://image.ibb.co/j0HvDp/bg.png');width: 100%;background-repeat: no-repeat;background-size: 20%">
    <div class="container-fluid text-center">
        <h1>
            Chat With Me Now
        </h1>
        <img src="https://image.ibb.co/ic8DzU/me.jpg" alt="Me" style="width: 13%;padding-bottom: 15px" class="img-circle">
    </div>
    <div class="container">
        <form method="post" action="minichat_post.php">
            <!-- <pre> -->
            <div class="form-group" style="width: 300px;margin: auto;">
                <label for="user" style="text-shadow: 1px 1px #444;">Username :</label>
                <input type="text" name="user" value="<?php if (isset($_COOKIE['user'])) {echo $_COOKIE['user'];} ?>" class="form-control">
                <label for="msg" style="text-shadow: 1px 1px #444">Message :</label>
                <input type="text" name="msg" class="form-control">
                <input class="btn btn-primary" type="submit" value="Send" class="form-control">
        </form>
        <a href="index.php" class="btn btn-default"><B>Refresh</B></a>
    </div>
    </div>
    <!-- </pre> -->


    <div class="text-center" style="padding-top: 10px;">
        <?php

include("connect_to_sql.php");

$answer = $db->query('SELECT id, user, msg, date_format(datemsg,\'[%d/%m/%Y/%H:%i:%s]\') AS datemsg FROM minichat ORDER BY id DESC LIMIT 0, 10');
while ($infos = $answer->fetch()) {
?>
        <div class="well" style="margin: auto; width: 500px; padding: 10px;word-wrap: break-word;">
            <strong>
                <?php echo htmlspecialchars($infos['user']) ?> : </strong>
            <?php echo $infos['msg'] ?>
            <p style="size: 25px; padding-top: 10px ">
                <em><?php echo $infos['datemsg'] ?></em>
            </p><br>
        </div>
        <?php

}
?>
    </div>
</body>

</html>

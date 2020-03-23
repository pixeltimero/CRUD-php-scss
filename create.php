<?php 
include ('db.php'); 
?>
<html>
<head>
    <title>PHP Crud</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Add new task</h1>
        <a href="index.php">View all tasks</a>
    </div>
    <div class="content">
        <form action="create.php" method="POST">
            <div class="item single">
                <div class="text">
                    <textarea placeholder="Type something here..." name="text"></textarea>
                    <?php 
                    if (isset($_POST['text'])) {
                        $text=$_POST['text'];
                        $sql = "insert into tasks (text) values ('$text')";
                        $val = $db->query($sql);
                        if ($val) {
                            header('location:index.php');
                        }
                        else{
                            echo "nasol";
                        }
                    }
                    ?>
                </div>
                <div class="actions">
                    <button class="button" type="submit"><i class="icon icon-icon-check"></i>Create task</button>
                    <a href="index.php" class="button white"><i class="icon icon-icon-cancel"></i>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
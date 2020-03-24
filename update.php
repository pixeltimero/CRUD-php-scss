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
        <h1>Update task</h1>
        <a href="index.php">View all tasks</a>
    </div>
    <div class="content">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <div class="item single">
                <div class="text">
                    <?php 
                        if (isset($_GET['id'])) {
                            $id=$_GET['id'];
                            $sql = "select * from tasks where id =$id";
                            $rows = $db->query($sql) or die($db->error);
                            $row = $rows->fetch_assoc();
                            echo ' <textarea placeholder="Type something here..." name="text" required>'.$row['text'].'</textarea>';
                            echo '<input type="text" name="id" value="'.$row['id'].'">';
                        } 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $text=$_POST['text'];
                            $id2=$_POST['id'];
                            $sql2 = "update tasks set text='$text' where id =$id2";
                            $db->query($sql2) or die($db->error);
                            header('location:index.php');
                        }
                    ?>
                </div>
                <div class="actions">
                    <button class="button" type="submit"><i class="icon icon-icon-check"></i>Update task</button>
                    <a href="index.php" class="button white"><i class="icon icon-icon-cancel"></i>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
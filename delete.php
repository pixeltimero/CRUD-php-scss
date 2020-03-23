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
        <h1>Todo list</h1>
        <a href="index.php">View all tasks</a>
    </div>
    <div class="content">
            <div class="item single">
                <div class="text">
                    <?php 
                    if (isset($_GET['id'])) {
                        $id=$_GET['id'];
                        $sql = "delete from tasks where id = '$id'";
                        $val = $db->query($sql);
                        if ($val) {
                            header('location:index.php');
                        }
                        else{
                            echo "error";
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

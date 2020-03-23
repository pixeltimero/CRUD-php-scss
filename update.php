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
                    <?php 
                    if (isset($_GET['id'])) {
                        $id=$_GET['id'];
                        $sql = "select * from tasks there id = '$id'";
                        $rows = $db->query($sql);
                       
                    }
                    while($row = $rows->fetch_assoc()){
                        ?>
                        <textarea placeholder="Type something here..." name="text" required><?php echo $row['text']; ?></textarea>
                        <?php } ?>
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
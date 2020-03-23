<?php 
include ('db.php'); 
$sql = "select * from tasks order by id desc";
$rows = $db->query($sql);
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
    <a href="create.php">Add new task</a>
  </div>
  <div class="content">
      <?php while($row = $rows->fetch_assoc()): ?>

    <div class="item">
      <div class="text"><?php echo $row['text']; ?></div>
      <div class="actions">
      <a href="update.php?id=<?php echo $row['id']; ?>" class="icon"><i class="icon icon-icon-edit"></i></a>
      <a href="delete.php?id=<?php echo $row['id']; ?>" class="icon"><i class="icon icon-icon-trash"></i></a>
      </div>
    </div>
      <?php endwhile; ?>
  </div>
</div>
</body>
</html>

<?php require "Task.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($task as $key) : ?>
            <?php if($key->isComplete()): ?>
            <li><del><?php echo $key->description(); ?></del></li>
            <?php else: ?>
            <li><?php echo $key->description(); ?></li>
            <?php endif; ?>
            <?php endforeach; ?>
    </ul>
</body>
</html>
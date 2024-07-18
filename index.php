<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="create_task.php" method="post">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit">Add Task</button>
        </form>
        <ul>
            <?php
            $sql = "SELECT * FROM tasks";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li" . ($row['status'] ? " class='completed'" : "") . ">";
                    echo $row['task'];
                    if (!$row['status']) {
                        echo " <a href='update_task.php?id=" . $row['id'] . "'>Complete</a>";
                    }
                    echo " <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a>";
                    echo "</li>";
                }
            } else {
                echo "No tasks found";
            }
            $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>

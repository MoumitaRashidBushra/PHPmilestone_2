<?php
if (isset($_POST['addTask'])) {
    $newTask = $_POST['task'];
    if (!empty($newTask)) {
        saveTaskToFile($newTask);
    }
}

function saveTaskToFile($task) {
    file_put_contents('tasks.txt', $task . PHP_EOL, FILE_APPEND);
}

function loadTasksFromFile() {
    if (file_exists('tasks.txt')) {
        return file('tasks.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    return [];
}

$tasks = loadTasksFromFile();
foreach ($tasks as $task) {
    echo "<li class='task'>$task</li>";
}
?>

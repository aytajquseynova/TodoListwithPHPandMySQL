<?php

require 'conn.php';

if (isset($_GET['upd_id'])) {
    $id = $_GET['upd_id'];

    $data = $conn->query("SELECT * FROM tasks WHERE id='$id'");

    $rows = $data->fetch(PDO::FETCH_OBJ);

    if (isset($_POST["submit"])) {
        $task = $_POST['mytask'];
        $update = $conn->prepare("UPDATE tasks SET name = :name WHERE id = :id");
        $update->execute([':name' => $task, ':id' => $id]);
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <form method="POST" action="update.php?upd_id=<?php echo $id; ?>">
        <div class="form-group mt-2">
            <label for="taskName">Task Name</label>
            <input type="text" name="mytask" class="form-control" id="taskName" value="update" aria-describedby="taskNameHelp">
            <button type="submit" class="btn btn-success mt-2">Update</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
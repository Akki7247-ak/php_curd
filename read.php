<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read || PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Username</th>
                <th>Number</th>
                <th>Job Title</th>
                <th>work Update</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM crud";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                ?>
     
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['number'] ?></td>
            <td><?php echo $row['job_title'] ?></td>
            <td><?php echo $row['work_update'] ?></td>
            <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
            <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
        </tr>
        </tbody>
        <?php
    }
        }

        ?>
    </table>

    <div>
        <a href="create.php" class="btn btn-info">Add New Data</a>
    </div>
   </div>
</body>
</html>
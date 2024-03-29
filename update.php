<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    include 'config.php';
    if (isset($_POST['update'])) {
        $u_id = $_POST['u_id'];
        $username = $_POST['username'];
        $number = $_POST['number'];
        $job_title = $_POST['job_title'];
        $work_update = $_POST['work_update'];

        $sql = "UPDATE `crud` SET `username`='$username', `number`='$number', `job_title`='$job_title', `work_update`='$work_update' WHERE `id`='$u_id'";
        $result = $conn->query($sql);
        if ($result == true) {
            echo "<script>alert('Work Report Update Successfully')</script>";
        } else {
            echo "Error :" . $sql . "<br>" . $conn->error;
        }
    }



    if (isset($_GET['id'])) {
        $u_id = $_GET['id'];

        $sql = "SELECT * FROM crud WHERE id='$u_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $username = $row['username'];
                $number = $row['number'];
                $job_title = $row['job_title'];
                $work_update = $row['work_update'];
            }
            ?>

            <fieldset>
                <center>
                    <legend>Employees Information Uppdate</legend>
                    <div>
                        <a href="create.php" class="btn btn-info">Add New Data</a>
                    </div>

                    <form action="" method="post">
                        Username :- <input type="text" name="username" id="" value="<?php echo $username; ?>">
                        Username :- <input type="hidden" name="u_id" id="" value="<?php echo $id; ?>">
                        <br>
                        <br>
                        Phone Number :- <input type="text" name="number" id="" value="<?php echo $number; ?>">
                        <br>
                        <br>
                        Job Title :- <input type="text" name="job_title" id="" value="<?php echo $job_title; ?>">
                        <br>
                        <br>
                        Work Update :- <input type="text" name="work_update" id="" value="<?php echo $work_update; ?>">
                        <br>
                        <br>
                        <input type="submit" name="update" id="" value="Update">
                        <br>
                        <br>
                    </form>

                </center>
            </fieldset>
            <?php

        }
    }
    ?>



</body>

</html>
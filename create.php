<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create || PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <fieldset>
        <center>
            <legend>Employees Information</legend>
            <div>
                <a href="read.php" class="btn btn-info">Read Data</a>
            </div>
<br>
            <form action="" method="post">
                Username :- <input type="text" name="username" id="">
                <br>
                <br>
                Phone Number :- <input type="text" name="number" id="">
                <br>
                <br>
                Job Title :- <input type="text" name="job_title" id="">
                <br>
                <br>
                Work Update :- <input type="text" name="work_update" id="">
                <br>
                <br>
                <input type="submit" name="submit" id="" value="Submit">
                <br>
                <br>
            </form>
            <?php
            include 'config.php';
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $number = $_POST['number'];
                $job_title = $_POST['job_title'];
                $work_update = $_POST['work_update'];

                $sql = "INSERT INTO `crud`(`username`, `number`, `job_title`, `work_update`) VALUES ('$username', '$number', '$job_title', '$work_update')";
                $result = $conn->query($sql);
                if ($result == true) {
                    echo "<script>alert('Thanks !! Your Work Report Successfully Submitted')</script>";
                } else {
                    echo "Error : " . $conn->error;
                }
                $conn->close();
            }
            ?>
        </center>
    </fieldset>
</body>

</html>
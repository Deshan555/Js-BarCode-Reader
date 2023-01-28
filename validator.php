<?php

include('Components/header.php');

include('config.php');

if (isset($_POST['submit'])) {
    $index = $_POST['number_index'];

    $capture_time = $_POST['time_val'];

    $capture_date = $_POST['date_val'];

    $validation = "Validation";

    $name = "name";

    $faculty = "school-of-ict";

    $sql = "SELECT * FROM QR_DATA WHERE INDEX_NUMBER = '$index';";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows() > 0) {
        $validation = "User Validated Successfully";

        $data_select = "SELECT STUDENT_NAME, FACULTY FROM QR_DATA WHERE INDEX_NUMBER = '$index';";

        $stmt = $conn->prepare($data_select);

        $stmt->execute();

        $stmt->bind_result($name, $faculty);

        $stmt->fetch();

    } else {
        $validation = "User Validation Failed";
    }
}
?>


<html>

<body>
<div class="card text-center">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $validation ?></h5>
        <p class="card-text">all information from our primary database If there is a problem, contact the administrator</p>
        <p style="font-size: 14px;" class="card-text">Student Name: <span class="badge bg-primary"><?php echo $name?></span></p>
        <p style="font-size: 14px;" class="card-text">Student Based Faculty: <span class="badge bg-primary"><?php echo $faculty?></span></p>
        <p style="font-size: 14px;" class="card-text">Date : <span class="badge bg-primary"><?php echo $capture_date?></span></p>
        <p style="font-size: 14px;" class="card-text">Capture Time : <span class="badge bg-primary"><?php echo $capture_time?></span></p>
        <a href="index.php" class="btn btn-primary">Go Scanner Page</a>
    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
</div>
</body>

</html>



<?php
$conn = mysqli_connect("localhost", "db21_148", "db21_148", "db21_148");

if (isset($_POST['upload'])) {
    $filename = $_FILES['myfile']['name'];
    $destination = 'uploads/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension,['zip','pdf','png'])) {
        echo "Your file extension must be .zip, .pdf or .png<br><br><br>
        Hello Tour are my destiny";
    } elseif ($_FILES['myfile']['size'] > 1000000) {
        echo "file is too large";
    } else {
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO FileManagement(namefile, size, downloads)
                        VALUES('$filename', '$size', 0)";

            if (mysqli_query($conn, $sql)) {
                echo "file uploaded successfully";
            } else {
                echo "failed to upload file";
            }
        }
    }
}
?>
<?php
    include 'filesLogic.php';
?>
<style>
    form {
        width: 30%;
        margin: 100px auto;
        padding: 30px;
        border: 1px solid #555;
    }

    input {
        width: 100%;
        border: 1px solid #f1e1e1;
        display: block;
        padding: 5px 10px;
    }

    button {
        border: none;
        padding: 10px;
        border-radius: 10px;
    }
</style>
<!DOCTYPE html>
<head>
</head>
<body>
    <h1>Hello Everybody</h1>
    <form action="#" method="POST">
                        <h3>Upload Files</h3>
                        <input type="file" name="myfile"><br>
                        <button type="submit" name="upload">Upload</button>
                    </form>
</body>
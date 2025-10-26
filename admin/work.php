<?php
include('header.php');
include('db_connection.php');

// Handle Upload
if (isset($_POST['add-work'])) {
    $workName = mysqli_real_escape_string($conn, $_POST['workname']);
    
    $mainImg = $_FILES['main-img']['name'];
    $thumbnailImg = $_FILES['thumbnail-img']['name'];

    $mainImgTmp = $_FILES['main-img']['tmp_name'];
    $thumbnailImgTmp = $_FILES['thumbnail-img']['tmp_name'];

    $uploadDir = 'works/';

    // Upload files
    move_uploaded_file($mainImgTmp, $uploadDir . $mainImg);
    move_uploaded_file($thumbnailImgTmp, $uploadDir . $thumbnailImg);

    // Insert into DB
    $sql = "INSERT INTO work (name, main_img, thumbnail_img) VALUES ('$workName', '$mainImg', '$thumbnailImg')";
    mysqli_query($conn, $sql);

    header("Location: work.php");
}

// Handle Edit
if (isset($_POST['edit-work'])) {
    $id = $_POST['work-id'];
    $workName = mysqli_real_escape_string($conn, $_POST['workname']);

    $mainImg = !empty($_FILES['main-img']['name']) ? $_FILES['main-img']['name'] : $_POST['current-main-img'];
    $thumbnailImg = !empty($_FILES['thumbnail-img']['name']) ? $_FILES['thumbnail-img']['name'] : $_POST['current-thumbnail-img'];

    $uploadDir = 'uploads/';

    if (!empty($_FILES['main-img']['tmp_name'])) {
        move_uploaded_file($_FILES['main-img']['tmp_name'], $uploadDir . $mainImg);
    }
    if (!empty($_FILES['thumbnail-img']['tmp_name'])) {
        move_uploaded_file($_FILES['thumbnail-img']['tmp_name'], $uploadDir . $thumbnailImg);
    }

    $sql = "UPDATE work SET name='$workName', main_img='$mainImg', thumbnail_img='$thumbnailImg' WHERE id='$id'";
    mysqli_query($conn, $sql);

    header("Location: work.php");
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $result = mysqli_query($conn, "SELECT main_img, thumbnail_img FROM work WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);

    unlink('works/' . $row['main_img']);
    unlink('works/' . $row['thumbnail_img']);

    mysqli_query($conn, "DELETE FROM work WHERE id='$id'");

    header("Location: work.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Work Page</title>
    <style>
    .work-img {
        width: 10px;
        height: 10px;
        object-fit: cover;
        border-radius: 5px;
    }
</style>

</head>
<body>

<div class="body-content">

    <div class="main-heading">
        <h1>Our Work</h1>
    </div>

    <div class="homepage-work">
        <div class="list-of-homepage-work">
            <h2>Edit your featured work here:</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Main Img</th>
                    <th>Thumbnail Img</th>
                    <th colspan="2">Operations</th>
                </tr>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM work");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['name']}</td>
                        <td><img src='works/{$row['main_img']}' style='width: 100px; height: auto;'></td>
                        <td><img src='works/{$row['thumbnail_img']}' style='width: 100px; height: auto;'></td>
                        <td><a href='?edit={$row['id']}' class='edit-btn'>Edit</a></td>
                        <td><a href='?delete={$row['id']}' class='delete-btn' >Delete</a></td>
                    </tr>";
                }
                ?>
            </table>
        </div>
<div class="seperator-div">
        <div class="homepage-work-upload">
            <h2>Upload your work here:</h2>
            <form action="" method="POST" enctype="multipart/form-data" class="work-form">
                <label for="workname">Work name:</label><br>
                <input type="text" id="workname" name="workname" placeholder="Enter work name here" required><br><br>    

                <label for="main-img">Select Main image:</label><br>
                <input type="file" id="main-img" name="main-img" accept="image/*" required><br><br>

                <label for="thumbnail-img">Select Thumbnail image:</label><br>
                <input type="file" id="thumbnail-img" name="thumbnail-img" accept="image/*" required><br><br>

                <input type="submit" name="add-work" value="Upload Work" class="submit-btn">
            </form> 
        </div>

        <?php
        if (isset($_GET['edit'])) {
            $editId = $_GET['edit'];
            $editResult = mysqli_query($conn, "SELECT * FROM work WHERE id='$editId'");
            $editRow = mysqli_fetch_assoc($editResult);
            ?>
            <div class="homepage-work-upload">
                <h2>Edit your work here:</h2>
                <form action="" method="POST" enctype="multipart/form-data" class="work-form">
                    <input type="hidden" name="work-id" value="<?php echo $editRow['id']; ?>">
                    <input type="hidden" name="current-main-img" value="<?php echo $editRow['main_img']; ?>">
                    <input type="hidden" name="current-thumbnail-img" value="<?php echo $editRow['thumbnail_img']; ?>">

                    <label for="workname">Work name:</label><br>
                    <input type="text" id="workname" name="workname" value="<?php echo $editRow['name']; ?>"><br><br>

                    <label for="main-img">Select Main image:</label><br>
                    <input type="file" id="main-img" name="main-img" accept="image/*"><br><br>

                    <label for="thumbnail-img">Select Thumbnail image:</label><br>
                    <input type="file" id="thumbnail-img" name="thumbnail-img" accept="image/*"><br><br>

                    <input type="submit" name="edit-work" value="Update Work" class="submit-btn">
                </form> 
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</div>

</body>
</html>

<?php
include('session_check.php')
?>

<?php


include('header.php');

// Database Connection
$conn = new mysqli("localhost", "root", "", "glace");

// Upload Work
if (isset($_POST['upload_work'])) {
    $workname = $_POST['workname'];

    // Handle image uploads
    $main_img = $_FILES['main_img']['name'];
    $thumbnail_img = $_FILES['thumbnail_img']['name'];

    $target_dir = "uploads/";
    move_uploaded_file($_FILES['main_img']['tmp_name'], $target_dir . $main_img);
    move_uploaded_file($_FILES['thumbnail_img']['tmp_name'], $target_dir . $thumbnail_img);

    $conn->query("INSERT INTO homepage_work (work_name, main_img, thumbnail_img) VALUES ('$workname', '$main_img', '$thumbnail_img')");
}

// Update Work
if (isset($_POST['update_work'])) {
    $id = $_POST['work_id'];
    $workname = $_POST['edit_workname'];

    // Optional: Replace images if new ones are uploaded
    $main_img = $_FILES['edit_main_img']['name'];
    $thumbnail_img = $_FILES['edit_thumbnail_img']['name'];

    if ($main_img) {
        move_uploaded_file($_FILES['edit_main_img']['tmp_name'], "uploads/" . $main_img);
        $conn->query("UPDATE homepage_work SET main_img='$main_img' WHERE id=$id");
    }

    if ($thumbnail_img) {
        move_uploaded_file($_FILES['edit_thumbnail_img']['tmp_name'], "uploads/" . $thumbnail_img);
        $conn->query("UPDATE homepage_work SET thumbnail_img='$thumbnail_img' WHERE id=$id");
    }

    $conn->query("UPDATE homepage_work SET work_name='$workname' WHERE id=$id");
}

// Delete Work
if (isset($_POST['delete_work'])) {
    $id = $_POST['work_id'];
    $conn->query("DELETE FROM homepage_work WHERE id=$id");
}

// Fetch Works
$result = $conn->query("SELECT * FROM homepage_work");

// Edit Work (Pre-fill Form)
$edit_work = "";
$edit_id = "";
$edit_main_img = "";
$edit_thumbnail_img = "";

if (isset($_POST['edit_work'])) {
    $edit_id = $_POST['work_id'];
    $edit_result = $conn->query("SELECT * FROM homepage_work WHERE id=$edit_id");
    $edit_row = $edit_result->fetch_assoc();
    $edit_work = $edit_row['work_name'];
    $edit_main_img = $edit_row['main_img'];
    $edit_thumbnail_img = $edit_row['thumbnail_img'];

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage Work</title>
</head>
<body>

<!-- Main content starts here -->
<div class="body-content">


    <div class="main-heading">
        <h1>Homepage</h1>
    </div>

    <div class="homepage-work">
        <!-- Work List -->
        <div class="list-of-homepage-work">
            <h2>Edit your featured work here:</h2>
            <table border="1" cellpadding="10">
                <tr>
                    <th>Name</th>
                    <th>Main Img</th>
                    <th>Thumbnail Img</th>
                    <th colspan="2">Operations</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['work_name']; ?></td>
                        <td><img src="uploads/<?php echo $row['main_img']; ?>" width="100"></td>
                        <td><img src="uploads/<?php echo $row['thumbnail_img']; ?>" width="100"></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="work_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_work" class="edit-btn">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="work_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_work" class="delete-btn" onclick="return confirm('Delete this work?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <!-- Upload Work -->
        <div class="something">
            <div class="homepage-work-upload">
                <h2>Upload your work here:</h2>
                <form method="POST" enctype="multipart/form-data">
                    <label for="workname">Work name:</label><br>
                    <input type="text" id="workname" name="workname" placeholder="Enter work name here" required><br><br>

                    <label for="main_img">Select Main image:</label><br>
                    <input type="file" id="main_img" name="main_img" accept="image/*" required><br><br>

                    <label for="thumbnail_img">Select Thumbnail image:</label><br>
                    <input type="file" id="thumbnail_img" name="thumbnail_img" accept="image/*" required><br><br>

                    <input type="submit" name="upload_work" value="Upload Work" class="submit-btn">
                </form>
            </div>

            <!-- Edit Work Form -->
            <?php if ($edit_work != "") { ?>
                <div class="edit-homepage-work-upload">
                    <h2>Edit Work</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="work_id" value="<?php echo $edit_id; ?>">

                        <label for="edit_workname">Edit Work name:</label><br>
                        <input type="text" id="edit_workname" name="edit_workname" value="<?php echo $edit_work; ?>" required><br><br>

                        <label for="edit_main_img">Replace Main image (optional):</label><br>
                        <input type="file" id="edit_main_img" name="edit_main_img" accept="image/*"><br><br>

                        <label for="edit_thumbnail_img">Replace Thumbnail image (optional):</label><br>
                        <input type="file" id="edit_thumbnail_img" name="edit_thumbnail_img" accept="image/*"><br><br>

                        <input type="submit" name="update_work" value="Update Work" class="submit-btn">
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="script.js"></script>
</body>
</html>
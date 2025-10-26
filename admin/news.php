<?php
include('session_check.php')
?>

<?php
include('header.php');
$conn = new mysqli("localhost", "root", "", "glace");

// Add News
if (isset($_POST['add_news'])) {
    $news = $_POST['newsname'];
    $conn->query("INSERT INTO news (news_content) VALUES ('$news')");
}

// Edit News - Update Record
if (isset($_POST['update_news'])) {
    $news_id = $_POST['news_id'];
    $news_content = $_POST['editnewsname'];
    $conn->query("UPDATE news SET news_content='$news_content' WHERE id=$news_id");
}

// Delete News
if (isset($_POST['delete_news'])) {
    $news_id = $_POST['news_id'];
    $conn->query("DELETE FROM news WHERE id=$news_id");
}

// Fetch All News
$result = $conn->query("SELECT * FROM news");

// For Editing (Pre-fill Form)
$edit_news = "";
$edit_id = "";
if (isset($_POST['edit_news'])) {
    $edit_id = $_POST['news_id'];
    $edit_result = $conn->query("SELECT * FROM news WHERE id=$edit_id");
    $edit_row = $edit_result->fetch_assoc();
    $edit_news = $edit_row['news_content'];
}
?>

<head>
    <title>Header - News</title>
</head>
<body>
    <h1 style="margin: 0% 10%">News</h1><br>
    <div class="news-content">
        <!-- NEWS TABLE -->
        <div class="news-table">
            <table border="1" cellpadding="10">
                <tr>
                    <th>Sr No.</th>
                    <th>News</th>
                    <th colspan="2">Operations</th>
                </tr>
                <?php
                $sr = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$sr}</td>
                        <td>{$row['news_content']}</td>
                        <td>
                            <form method='POST' style='display:inline;'>
                                <input type='hidden' name='news_id' value='{$row['id']}'>
                                <button type='submit' name='edit_news' class='edit-btn'>Edit</button>
                            </form>
                        </td>
                        <td>
                            <form method='POST' style='display:inline;'>
                                <input type='hidden' name='news_id' value='{$row['id']}'>
                                <button type='submit' name='delete_news' class='delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</button>
                            </form>
                        </td>
                    </tr>";
                    $sr++;
                }
                ?>
            </table>
        </div>

        <!-- ADD NEWS FORM -->
        <div class="right-section">
        <div class="add-news" style="margin-top: 20px;">
            <h2>Add News</h2>
            <form method="POST" class="work-form">
                <label for="newsname">News:</label><br>
                <input type="text" id="newsname" name="newsname" placeholder="Enter latest News" required><br><br>
                <input type="submit" name="add_news" value="Add News" class="submit-btn">
            </form>
        </div>

        <!-- EDIT NEWS FORM (Visible when Edit is Clicked) -->
        <?php if ($edit_news != "") { ?>
        <div class="edit-news" style="margin-top: 20px;">
            <h2>Edit News</h2>
            <form method="POST" class="work-form">
                <input type="hidden" name="news_id" value="<?php echo $edit_id; ?>">
                <label for="editnewsname">Edit News:</label><br>
                <input type="text" id="editnewsname" name="editnewsname" value="<?php echo $edit_news; ?>" required><br><br>
                <input type="submit" name="update_news" value="Update News" class="submit-btn">
            </form>
        </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>
<?php
include('session_check.php')
?>
<?php 

include('header.php');
include('db_connection.php'); // For database connection

// Handle Delete Request
if (isset($_GET['delete']) && isset($_GET['type'])) {
    $id = intval($_GET['delete']);
    $type = $_GET['type'];

    if ($type === 'brand') {
        $deleteQuery = "DELETE FROM brands WHERE id = $id";
    } elseif ($type === 'influencer') {
        $deleteQuery = "DELETE FROM influencers WHERE id = $id";
    }

    if (isset($deleteQuery) && mysqli_query($conn, $deleteQuery)) {
        echo "<script>alert('Record deleted successfully'); window.location.href='".$_SERVER['PHP_SELF']."';</script>";
    } else {
        echo "<script>alert('Error deleting record');</script>";
    }
}

// Fetch brands form data
$brandsQuery = "SELECT * FROM brands";
$brandsResult = mysqli_query($conn, $brandsQuery);

// Fetch influencers form data
$influencersQuery = "SELECT * FROM influencers";
$influencersResult = mysqli_query($conn, $influencersQuery);
?>


<html>
<head>
    <title>Admin Panel - Contact Us Form Responses</title>
    <link rel="stylesheet" href="admin.css"> <!-- Add your admin panel CSS here -->

</head>
<body>
    <div class="contactus-admin" style="margin: 0% 10%">
        <!-- Brands Form Responses -->
        <div class="brands-form">
            <h2>Brands Form Responses</h2>
            <table>
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th>Service they are looking for</th>
                    <th class="message">Message</th>
                    <th>Operations</th>
                </tr>
                <?php
                $srNo = 1;
                while ($row = mysqli_fetch_assoc($brandsResult)) {
                    echo "<tr>";
                    echo "<td>".$srNo."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['phone']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['service']."</td>";
                    echo "<td>".$row['message']."</td>";
                    echo "<td><a href='?delete=".$row['id']."&type=brand' onclick=\"return confirm('Are you sure you want to delete this brand?');\" class='delete-btn'>Delete</a></td>";
                    echo "</tr>";
                    $srNo++;
                }
                ?>
            </table>
        </div>

        <!-- Influencers Form Responses -->
        <div class="influencer-form">
            <h2>Influencers Form Responses</h2>
            <table class="influencer-form-table">
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th class="message">Message</th>
                    <th>Genre</th>
                    <th>Followers Count</th>
                    <th colspan="2">Operations</th>
                </tr>
                <?php
                $srNo = 1;
                while ($row = mysqli_fetch_assoc($influencersResult)) {
                    echo "<tr>";
                    echo "<td>".$srNo."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['phone']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['message']."</td>";
                    echo "<td>".$row['genre']."</td>";
                    echo "<td>".$row['followers']."</td>";
                    echo "<td><a href='?delete=".$row['id']."&type=influencer' onclick=\"return confirm('Are you sure you want to delete this influencer?');\" class='delete-btn'>Delete</a></td>";
                    echo "</tr>";
                    $srNo++;
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>

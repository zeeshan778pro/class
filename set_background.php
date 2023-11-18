<?php
// Retrieve the last uploaded file from the database
$conn = new mysqli("localhost", "username", "password", "file_upload_db");
$result = $conn->query("SELECT file_name FROM backgrounds ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $background_file = $row["file_name"];
    // Set the background image
    echo "<style>body { background-image: url('uploads/$background_file');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    width: 300px;
    height: 200px;
    }
//img {
//    max-width: 100%;
//    height: auto;
//    border: 2px solid #000;
//}
</style>";
} else {
    echo "No background image uploaded yet.";
}

$conn->close();
?>
<body>
    <a href="index.php">Home</a>
</body>

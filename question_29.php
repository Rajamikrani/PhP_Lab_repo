<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Directory to save uploaded files
    $uploadDir = "uploads/";
    
    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // File information
    $fileName = $_FILES['cv']['name'];
    $fileTmpName = $_FILES['cv']['tmp_name'];
    $fileSize = $_FILES['cv']['size'];
    $fileError = $_FILES['cv']['error'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedExtensions = ['pdf', 'doc', 'docx'];

    if ($fileError === 0) {
        if (in_array($fileExt, $allowedExtensions)) {
            if ($fileSize <= 1048576) { // 1 MB in bytes
                $newFileName = uniqid('cv_', true) . "." . $fileExt;
                $fileDestination = $uploadDir . $newFileName;

                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    echo "CV uploaded successfully! File saved as: " . $newFileName;
                } else {
                    echo "Error moving the uploaded file.";
                }
            } else {
                echo "File size exceeds 1 MB. Please upload a smaller file.";
            }
        } else {
            echo "Invalid file type. Only PDF, DOC, and DOCX files are allowed.";
        }
    } else {
        echo "Error uploading file. Error code: " . $fileError;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CV</title>
</head>
<body>
    <h2>Upload Your CV</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="cv">Select your CV (PDF, DOC, DOCX, max 1 MB):</label><br>
        <input type="file" name="cv" id="cv" required><br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>

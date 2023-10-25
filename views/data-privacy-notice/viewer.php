<?php
// Get the PDF file name from the query string
if (isset($_GET['file'])) {
    $pdfFile = $_GET['file'];
    
    // Make sure the file exists
    if (file_exists($pdfFile)) {
        // Set the content type to PDF
        header('Content-type: application/pdf');
        
        // Display the PDF in the browser
        readfile($pdfFile);
    } else {
        echo "PDF file not found.";
    }
} else {
    echo "No PDF file specified.";
}
?>

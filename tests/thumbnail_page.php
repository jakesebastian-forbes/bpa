<?php

require "../php/db_func.php";

// Replace this function with your actual logic to fetch the PDF blob from the database
function getPDFBlobFromDatabase($pdfId)
{
    // Implement your database retrieval logic here
    // Create connection
    $conn = db_conn();

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve PDF blob data from the database
    $sql = "SELECT `file` FROM `documents` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $pdfId);
    $stmt->execute();
    $stmt->bind_result($pdfBlob);
    $stmt->fetch();
    $stmt->close();

    // Close database connection
    $conn->close();

    // Return the PDF blob data
    return base64_encode($pdfBlob);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://unpkg.com/pdfjs-dist@2.9.359/build/pdf.js"></script>
</head>

<body>
    <!-- Display area for the thumbnail -->


    <div style="object-fit:cover; width:300px; height:400px">
        <canvas id="pdfCanvas" style="width:inherit; height:inherit"></canvas>
    </div>


    <script>
        // Replace 'your_pdf_blob_data' with the actual PDF blob data

        <?php
        $blob_data = getPDFBlobFromDatabase('332a1bb5-bd45-11ee-8623-0a0027000017')
        ?>


        function generate_thumbnail(blob_data, canvas_id) {
            let pdfBlobData = blob_data;

            // console.log(pdfBlobData);

            // Initialize PDF.js
            pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://unpkg.com/pdfjs-dist@2.9.359/build/pdf.worker.min.js';

            // Load PDF from blob data
            pdfjsLib.getDocument({
                data: atob(pdfBlobData)
            }).promise.then(pdfDoc => {
                // Fetch the first page
                return pdfDoc.getPage(1); // 1 indicates the first page
            }).then(page => {
                // Set up the canvas
                let canvas = document.getElementById(canvas_id);
                let context = canvas.getContext('2d');
                let viewport = page.getViewport({
                    scale: 1.5
                });
                canvas.width = viewport.width;
                canvas.height = viewport.height;

                // Render PDF page to canvas
                let renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                return page.render(renderContext).promise;
            }).then(() => {
                // Convert the canvas to base64 data URL for further use
                let canvas = document.getElementById(canvas_id);
                let imageDataUrl = canvas.toDataURL('image/png');
                console.log('Thumbnail data URL:', imageDataUrl);
            }).catch(error => {
                console.error('Error:', error);
            });

        }

        
    </script>
</body>

</html>
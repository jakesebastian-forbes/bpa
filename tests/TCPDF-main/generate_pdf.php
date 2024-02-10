<?php
require_once('tcpdf.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get title and filename from form input
    $title = $_POST['title'];
    $filename = $_POST['filename'];

    // Create TCPDF instance
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    // Set PDF metadata
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('John Doe');
    $pdf->SetTitle($title);
    $pdf->SetSubject('Testing TCPDF');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // Disable header and footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 48); // Large font size

    // Calculate text block height
    $titleHeight = $pdf->getStringHeight($title, '', 48);

    // Calculate number of repetitions needed to fill the page vertically
    $pageHeight = $pdf->getPageHeight();
    $numRepetitions = ceil($pageHeight / $titleHeight);

    // HTML content for the PDF - only title repeated to fill the page
    $html = '';
    for ($i = 0; $i < $numRepetitions; $i++) {
        $html .= '<h1>' . $title . '</h1>';
    }

    // Write HTML content to PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output PDF to file
    $pdfDirectory = __DIR__ . '/dummy_pdfs/'; // Directory to save PDF files
    if (!is_dir($pdfDirectory)) {
        mkdir($pdfDirectory, 0777, true); // Create the directory if it doesn't exist
    }
    $pdfFilePath = $pdfDirectory . $filename . '.pdf';
    $pdf->Output($pdfFilePath, 'F');

    // Display success message
    echo 'PDF generated successfully! <a href="' . $pdfFilePath . '">Download PDF</a>';
} else {
    // Redirect to the form page if accessed directly
    header("Location: generate_pdfs.html");
    exit();
}
?>

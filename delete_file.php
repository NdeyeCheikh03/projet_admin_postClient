<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $fileToDelete = $_POST['delete'];
    if (file_exists($fileToDelete)) {
        unlink($fileToDelete);
        echo "Le fichier a été bien supprimé.";
    } else {
        echo "Le fichier n'existe pas.";
    }
}
?>

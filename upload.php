<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupérer un fichier</title>
</head>
<body>
    <h1>Récupérer un fichier depuis votre machine</h1>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];

            // Vérifiez s'il y a une erreur lors de l'upload
            if ($file['error'] !== UPLOAD_ERR_OK) {
                echo 'Erreur lors de l\'upload du fichier.';
            } else {
                $destination = __DIR__ . '/' . $file['name'];
                move_uploaded_file($file['tmp_name'], $destination);
                echo 'Fichier uploadé avec succès ! <br>';
                echo '<a href="' . $file['name'] . '" download> Télécharger le fichier</a>';
            }
        } else {
            echo 'Aucun fichier sélectionné.';
        }
    }
    ?>

    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Récupérer le fichier">
    </form>
</body>
</html>

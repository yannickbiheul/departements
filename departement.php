<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Départements</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Une appli web sur les départements'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- JAVASCRIPT -->
    <script src='js/main.js' defer></script>
</head>

<body>

<?php 
    require_once("connexion.php");

    $numero = $_POST['numero'];
    $sql = "SELECT departement_code, departement_nom FROM departement WHERE departement_code = $numero";
    $departements = $connex->query($sql);
    $code = $departements->fetch();

?>

    <div class="result">
        <h2>Vous avez entré le numéro <?php echo $_POST['numero']; ?></h2>
        <p>Département : <?php echo $code[1]; ?></p>
        <br>
        <a href="index.html">Retour</a>
    </div>


</body>
</html>
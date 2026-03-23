<?php
require_once 'conn.php';
$action = isset($_POST['action']) ? $_POST['action'] : '';


if ($action == "create") {
    
    $titel = isset($_POST['titel']) ? trim($_POST['titel']) : '';
    $beschrijving = isset($_POST['beschrijving']) ? trim($_POST['beschrijving']) : '';
    $afdeling = isset($_POST['afdeling']) ? trim($_POST['afdeling']) : '';
    $status = 'todo';

    if ($titel === '' || $beschrijving === '' || $afdeling === '') {
        echo "Vul alle velden in aub.";
        exit;
    }

    $sql = "INSERT INTO taken (titel, beschrijving, afdeling, status) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$titel, $beschrijving, $afdeling, $status]);

    header('Location: ../tasks/index.php');
    exit;
}

if ($action == "update") {

}

?>
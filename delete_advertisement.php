<?php
global $conn;
require_once "app/init.php";
require_once "app/backend/config.php";
require_once "app/backend/user/User.php";
require_once "app/backend/user/UserType.php";
require_once "app/backend/blob/Blob.php";
require_once "app/backend/advertisement/helpers.php";
require_once "app/backend/auth.php";
require_once "app/backend/helpers.php";
require_once "app/backend/extractors.php";
require_once "app/backend/inserters.php";
session_start();

$user = extractUser($_SESSION);

allowOnlyUserTypes($user, UserType::Landlord);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $advertisementId = $_POST["id"] ?? null;

    $advertisement = getAdvertisement($advertisementId, $conn);
    try {
        if (is_null($advertisement)) {
            throw new Exception("Advertisement not found");
        }
        if (!isset($_POST['agree'])) {
            throw new Exception("Please confirm that you want to delete the advertisement");
        }
        $advertisement->delete($conn);
        insertInfo($_SESSION, "Advertisement deleted successfully");
        redirectUsingUrlParam($user->getDashboardUrl());
    } catch (Exception $e) {
        insertError($_SESSION, $e->getMessage());
    }
}
redirectUsingUrlParam($user->getDashboardUrl());

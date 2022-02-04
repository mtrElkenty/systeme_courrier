<?php
session_start();

if (isset($_SESSION['user']) && strpos($_SESSION['user'], '"role_id":3')) { 
    header('Location: home');
    exit();
} if (!isset($_SESSION['user']) && strpos($_SERVER['REQUEST_URI'], 'login') == false) {
    header('Location: login');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="/systeme_courrier/public/assets/css/font-awesome-all.min.css" />
    
    <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> -->
    <script src="/systeme_courrier/public/assets/js/alpine.min.js"></script>

    <!-- <link rel="stylesheet" href="/systeme_courrier/public/assets/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="/systeme_courrier/public/assets/css/tailwind.min.css">
    
    <link rel="stylesheet" href="/systeme_courrier/public/assets/css/style.css">
    <title><?= $data['title'] ?> - Systeme Courrier</title>
</head>
<script>
    function setupMenu() {
        return {
            activeTab: 0,
            tabs: [
                "Tab No.1",
                "Tab No.2",
                "Tab No.3",
                "Tab No.4",
            ]
        };
    };
  </script>
<body x-data="setupMenu()">
    <div id="alerts" class="hidden">
        <div id="success-alert" class="hidden bg-green-200 rounded-lg py-5 px-6 mb-3 text-base text-green-900 inline-flex items-center w-full" role="alert">
            <i id="success-text"></i>
        </div>
        <div id="danger-alert" class="hidden bg-red-200 rounded-lg py-5 px-6 mb-3 text-base text-red-900 inline-flex items-center w-full" role="alert">
            <i id="danger-text"></i>
        </div>
        <div id="error-alert" class="hidden bg-yellow-200 rounded-lg py-5 px-6 mb-3 text-base text-yellow-900 inline-flex items-center w-full" role="alert">
            <i id="error-text"></i>
        </div>
    </div>

<?php
$title = "Hello Elastic AWS";
include "includes/header.php";
?>

<main class="container">
    <h1 class="title">Hello Elastic AWS 🚀</h1>
    <p class="subtitle">Ваш PHP додаток працює в AWS Elastic Beanstalk</p>

    <div class="card">
        <h2>Інформація про сервер</h2>
        <ul>
            <li><strong>PHP Version:</strong> <?= phpversion() ?></li>
            <li><strong>Server Time:</strong> <?= date("Y-m-d H:i:s") ?></li>
            <li><strong>Client IP:</strong> <?= $_SERVER['REMOTE_ADDR'] ?></li>
        </ul>
    </div>

    <button onclick="showMessage()">Натисни мене</button>
</main>

<?php include "includes/footer.php"; ?>
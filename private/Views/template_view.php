<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>
        <? echo $title; ?>
    </title>
    <link rel="stylesheet" type="text/css" href="/static/css/style.css">
    <script src="/static/js/jquery-3.2.1.js"></script>

</head>

<body>
    <div class="wraper">
        <div class="content">
            <!-- Шапка -->
            <div class="bar">
                <p>Once surf always a Surfer</p>
            </div>
            <div class="logo">
                <img src="/static/pictures/logo.png" alt="logo">
            </div>
            <!-- Меню -->
            <div class="menu">
                <ul>
                    <li><a href="/">MAIN</a></li>
                    <li><a href="/news">NEWS</a></li>
                    <li><a href="/photos">PHOTOS</a></li>
                    <li><a href="/contacts">CONTACTS</a></li>
<!--
                    <li><a href="/registr">REGISTRATION</a></li>
                    <li><a href="/autorith">AUTHORIZATION</a></li>
-->
                </ul>
            </div>

            <? require_once $view; ?>
                <div class="footer">
                    <p>Don't waste your time!</p>
                </div>
        </div>
        <script src="/static/js/index.js"></script>
        <script src="/static/js/auth.js"></script>
        <script src="/static/js/slider.js"></script>
</body>

</html>

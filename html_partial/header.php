<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrien Quimbre</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    </style>
    <link rel="stylesheet" type="text/css" href="style.css?<?php echo time();?>">
</head>
<body>
    <header>
        <div class="box">
            <a href="#popup" id=burger class="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
        </div>
        <div id="popup" class="overlay">
            <div class="popup">
                <li id="menu_liste">
                    <a href="#" class="cross">&times;</a>
                    <ul> <a class="nav" href="index.php" id="home_ul">Home</a></ul>
                    <ul> <a class="nav" href="contact.php" id="contact_ul">Contact</a></ul>
                    <ul> <a class="nav" href="https://www.linkedin.com/in/adrien-quimbre-03311b224/" id="linkedin_ul" target="_blank">Linkedin</a></ul>
                    <ul> <a class="nav" href="https://github.com/Doud75?tab=repositories" id="github_ul" target="_blank">Github</a></ul>
                </li>
            </div>
        </div>
        <h1 id=title><?=$title?></h1>
        <span id=light>Light</span>
        <label class="switch" id="switch">
            <input type="checkbox" name="switch-toggle" class="toggle" onclick="mymode()">
        </label>
        <span id=dark>Dark</span>
    </header>
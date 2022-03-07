<?php
    include "php_partial/liste_h1.php";
    $title = $h1[3];
    include 'html_partial/header.php';
?>

<form action="contact.php" method="post" id="contact">
    <div class = div_form>
        <label id="label_name" for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div class = div_form>
        <label for="mail">e-mail:</label>
        <input type="email" id="email" name="mail" required>
    </div>
    <div class = div_form>
        <label for="msg">Message :</label>
        <textarea id="msg" name="message" required></textarea>
    </div>
    <div id="div_button" class = div_form>
        <button type="submit" id="button">Envoyer le message</button>
    </div>
</form>
<?php include 'php_partial/mail.php'; ?>

<?php
    include 'html_partial/footer.php';
?>
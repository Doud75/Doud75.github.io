<?php
    if (isset($_POST['message'])) {
        $retour = mail('adrienquimbre@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], $_POST['mail']);
        
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
?>
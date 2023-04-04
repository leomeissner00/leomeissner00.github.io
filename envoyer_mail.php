<?php
if(isset($_POST['submit'])) {
    $to = "test@gmail.com"; // Adresse email de destination
    $from = $_POST['email']; // Adresse email de l'expéditeur
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Formulaire de contact"; // Sujet du message
    $message = "Nom : ".$first_name." ".$last_name."\n\n"."Email : ".$from."\n\n"."Message : "."\n".$_POST['message']; // Corps du message
    
    // En-têtes de l'email
    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
    
    // Envoi de l'email
    mail($to, $subject, $message, $headers);
    
    // Redirection vers une page de confirmation
    header('Location: confirmation.html');
}
?>
 	   
 02 	   
 03 	   
 04 	   
 05 	   
 06 	   
 07 	   
 08 	   
 09 	   
 10 	   
 11 	   
 12 	   
 13 	   
 14 	   
 15 	   
 16 	   
 17 	   
 18 	   
 19 	   
 20 	   
 21 	   
 22 	   
 23 	   
 24 	   
 25 	   
 26 	   
 27 	   
 28 	   
 29 	   
 30 	   
 31 	   
 32 	   
 33 	   
 34 	   
 35 	   
 36 	   
 37 	   
 38 	   
 39 	   
 40 	   
 41 	   
 42 	   
 43 	   
 44 	   
 45 	   
 46 	   
 47 	   
 48 	   
 49 	   
 50 	   
 51 	   
 52 	   
 53 	   
 54 	   
 55 	   
 56 	   
 57 	   
 58 	   
 59 	   
 60 	   
 61 	   
 62 	   
 63 	   
 64 	   
 65 	   
 66 	   
 67 	   
 68 	   
 69 	   
 70 	   
 71 	   
 72 	   
 73 	   
 74 	   
 75 	   
 76 	   
 77 	   
 78 	   
 79 	   
 80 	   
 81 	   
 82 	   
 83 	   
 84 	   
 85 	   
 86 	   
 87 	   
 88 	   
 89 	   
 90 	   
 91 	   
 92 	   
 93 	   
 94 	   
 95 	   
 96 	   
 97 	   
 98 	   
 99 	   
 100 	   
 101 	   
 102 	   
 103 	   
 104 	   
 105 	   
 106 	   
 107 	   
 108 	   
 109 	   
 110 	   
 111 	   
 112 	   
 113 	   
 114 	   
 115 	   
 116 	   
 117 	   
 118 	   
 119 	   
 120 	   
 121 	   
 122 	   
 123 	   
 124 	   
 125 	   
 126 	   
 127 	   
 128 	   
 129 	   
 130 	   
 131 	   
 132 	   
 133 	   
 134 	   
 135 	   
 136 	   
 137 	   
 138 	   
 139 	   
 140 	   
 141 	   
 142 	   
 143 	   
 144 	   
 145 	   
 146 	   
 147 	   
 148 	   
 149 	   
 150 	   
 151 	   
 152 	   
 153 	   
 154 	   
 155 	   
 156 	   
 157 	   
 158 	   
 159 	   
 160 	   
 161 	   
 162 	   
 163 	   
 164 	   
                               
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Formulaire complet d'envoi de mail                                                                            
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=57
    Auteur           : Mathieu                                                                                            
    Date édition     : 01 Sept 2004                                                                                       
    Date mise à jour : 13 Sept 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - refactoring du code en PHP 7                                                                                        
    - fonctionnement du code vérifié                                                                                    
    - correction du code                                                                                                  
    - amélioration du code                                                                                               
    - modification de la description                                                                                      
*/
/*---------------------------------------------------------------*/?>
     <form name="contact_form" method="post" action="">
    <table width="500">
    <tr>
     <td valign="top">
      <label for="nom">Nom *</label>
     </td>
     <td valign="top">
      <input  type="text" name="nom" maxlength="50" size="30" value="<?php if (
isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>">
     </td>
    </tr>
    <tr>
     <td valign="top"">
      <label for="prenom">Prénom *</label>
     </td>
     <td valign="top">
      <input  type="text" name="prenom" maxlength="50" size="30" value="<?php if
 (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="email">Email Addresse *</label>
     </td>
     <td valign="top">
      <input  type="text" name="email" maxlength="80" size="30" value="<?php if 
(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="telephone">Téléphone</label>
     </td>
     <td valign="top">
      <input  type="text" name="telephone" maxlength="30" size="30" value="
<?php if (isset($_POST['telephone'])) echo htmlspecialchars($_POST['telephone'])
;?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="commentaire">Commentaire *</label>
     </td>
     <td valign="top">
      <textarea  name="commentaire" cols="28" rows="10"><?php if (isset($_POST[
'commentaire'])) echo htmlspecialchars($_POST['commentaire']);?></textarea>
     </td>
    </tr>
    <tr>
     <td colspan="2" style="text-align:center">
      <input type="submit" value=" Envoyer ">
     </td>
    </tr>
    </table>
    </form>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "votre@email";
    $email_subject = "Le sujet de votre email";
 
    function died($error) {
        // your error code can go here
        echo 
"Nous sommes désolés, mais des erreurs ont été détectées dans le" .
" formulaire que vous avez envoyé. ";
        echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
        echo $error."<br /><br />";
        echo "Merci de corriger ces erreurs.<br /><br />";
        die();
    }
 
 
    // si la validation des données attendues existe
     if(!isset($_POST['nom']) ||
        !isset($_POST['prenom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['commentaire'])) {
        died(
'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
' problème.');
    }
 
     
 
    $nom = $_POST['nom']; // required
    $prenom = $_POST['prenom']; // required
    $email = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $commentaire = $_POST['commentaire']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$email)) {
      $error_message .= 
'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
    }
   
      // Prend les caractères alphanumériques + le point et le tiret 6
      $string_exp = "/^[A-Za-z0-9 .'-]+$/";
   
    if(!preg_match($string_exp,$nom)) {
      $error_message .= 
'Le nom que vous avez entré ne semble pas être valide.<br />';
    }
   
    if(!preg_match($string_exp,$prenom)) {
      $error_message .= 
'Le prénom que vous avez entré ne semble pas être valide.<br />';
    }
   
    if(strlen($commentaire) < 2) {
      $error_message .= 
'Le commentaire que vous avez entré ne semble pas être valide.<br />';
    }
   
    if(strlen($error_message) > 0) {
      died($error_message);
    }
 
    $email_message = "Détail.\n\n";
    $email_message .= "Nom: ".$nom."\n";
    $email_message .= "Prenom: ".$prenom."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Commentaire: ".$commentaire."\n";
 
    // create email headers
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    ?>
     
    <!-- mettez ici votre propre message de succès en html -->
     
    Merci de nous avoir contacter. Nous vous contacterons très bientôt.
     
    <?php

    }

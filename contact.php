<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="sreen.js"></script>
    <title>Tapinfort.com, Contact</title>
</head>

<body></body>
<nav class="nav">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">
        <a class="lien-logo">tapin<span class="logo-fort">fort</span></a></label>
    <ul>
        <li><a href="/index.html">Home</a></li>
        <li><a href="/experience.html">experiences</a></li>
        <li><a href="/skills.html">skills</a></li>
        <li><a href="/hobbies.html">hobbies</a></li>
        <li><a href="/contact.php">contact</a></li>
    </ul>
</nav>
<p>coucou les amis</p>

<div class="image-contactPage">
    <div class="contact">
        <span class="contact-message">Contact</span>
        <strong class="contact-name">ulrich nelson</strong>
        <span class="contact-like">N'hésitez pas à me laisser un message.....</span>
    </div>
</div>

<!--Traitement du formulaire-->
<?php

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['message'])) {

        $errors = null;
        $succes = null;

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors = "Adresse email invalide";
        }

        $to = "tapinfoulrichnelson@yahoo.com";
        $subject = "CONTACT - Tapinfort.com";
        $message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description de ma page web." />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
</head>

<body>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td style="text-align: center; padding-top: 40px; padding-bottom: 20px; color: #C89446;
                 font-family: \'Pinyon Script\', serif; font-weight: 200; font-size:60px ;">
                <div>Tapinfort.com</div>
            </td>


        </tr>

        <tr>
            <td
                style="text-align: center; padding-top: 40px; padding-bottom: 20px; text-transform: uppercase; font-weight: 200; font-size:60px ; color: blue;">
                détails du message
            </td>
        </tr>


        <tr>
            <td style="padding-left: 20%; padding-top: 40px; padding-bottom: 20px; ">
                <strong style " margin-right:25px">☺ Nom:</strong> ' . $_POST['nom'] . '
            </td>
        </tr>
        <tr>
            <td style="padding-left: 20%; padding-top: 40px; padding-bottom: 20px; ">
               <strong style " margin-right:25px"> ☺ Prenom:</strong> ' . $_POST['prenom'] . '
            </td>
        </tr>

        <tr>
            <td style="padding-left: 20%; padding-top: 40px; padding-bottom: 20px; ">
               <strong style " margin-right:25px"> ✉ Email :</strong> ' . $_POST['email'] . '
            </td>
        </tr>
        <tr>
            <td style="padding-left: 20%; padding-top: 40px; padding-bottom: 20px; ">
                <strong style " margin-right:25px">✍ Message :</strong> ' . $_POST['message'] . '
            </td>
        </tr>

        <tr>
            <td style="text-align: center; padding-top: 80px; font-size: 80px; ">
                Merci...✌
            </td>
        </tr>


    </table>

</body>

</html>';

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = 'From: Tapinfo.com <tapinfoulrichnelson@yahoo.com>';

        mail($to, $subject, $message, implode("\r\n", $headers));

        $succes = $_POST['nom'] . ", " . "votre message a bien été envoyé !";
    } else {
        $errors = "tous les champs doivent être complétés";
    }
}

?>

<session class="contact-session">
    <div class="container-form">
        <div class="boostrap">
            <?php if (isset($errors)) : ?>
                <p class="boostrap1"><?= $errors ?></p>
            <?php endif; ?>
            <?php if (isset($succes)) : ?>
                <p class="boostrap2"><?= $succes ?></p>
            <?php endif; ?>

            <div class="contact-form">
                <div>
                    <i class="fa fa-map-marker"></i><span class="form-info"> Paris, France</span><br>
                    <i class="fa fa-phone"> </i><span class="form-info"> 0694333351</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info"> Laissez un message via le formulaire</span>
                </div>
                <div>
                    <form method="POST" action="">
                        <input type="text" name="nom" placeholder="Nom" value="<?php if (isset($_POST['nom'])) : ?> <?= $_POST['nom']; ?> <?php endif ?>"><br>
                        <input type="text" name="prenom" placeholder="Prenom" value="<?php if (isset($_POST['prenom'])) : ?> <?= $_POST['prenom']; ?> <?php endif ?>"><br>
                        <input type="email" name="email" placeholder="Votre email" value="<?php if (isset($_POST['email'])) : ?> <?= $_POST['email']; ?> <?php endif ?>"><br>
                        <textarea name="message" rows="10" placeholder="Entrez votre message" value="<?php if (isset($_POST['nom'])) : ?> <?= $_POST['nom']; ?> <?php endif ?>"></textarea><br>
                        <button class="submit" name="envoyer">send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</session>


<div class="reseau-social">
    <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
        <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
    </ul>
</div>



    <footer class="footer" id="footer">
        <div class="container-footer">
            <div class="footer-columns">
                <div class="footer-column">
                    <div class="footer-title" class="my-name">urlich nelson ☺</div>
                    <p class="footer-text">
                        ❝Comme tout développeur, j'ai une passion pour internet et les nouvelles technologies.
                        Quelques fois, profite de mon temps libre pour mettre en pratique mes connaissances à travers des projets✌❞
                    </p>
                </div>
                <div class="footer-column">
                    <div class="footer-title">Contact info✍</div>
                    <p>
                        <p class="footer-text">Paris, France</p>
                        <br>
                        <a class="footer-text">✉ulrichnelsontapinfo@yahoo.fr</a>
                    </p>
                </div>
                <div class="footer-column">
                    <div class="footer-title">Proverbe français ☟ </div>
                    <ul>
                        <li class="footer-text">"Tout doucement vient la richesse, qu'accroissent travail et sagesse."</li>
                        </ul>
                        <li id="MyClok" class=" MYtime"></li>
                        
                </div>
            </div>
        </div>
        <div class="footer-credits">
            <p><span>Copyrigt <span id="annee"></span> ⌚ Ulrich Nelson</span><br>
                Toute reproduction interdite</p>

        </div>
    </footer>
</body>

</html>
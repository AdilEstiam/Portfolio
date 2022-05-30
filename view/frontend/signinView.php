<?php

$title = 'DÉJÀ UN COMPTE ? IDENTIFIEZ-VOUS';
$description = 'Page de connexion';

ob_start();

?>

<div class="formstyle">
    <div class="row">
        
        <div class="col-md-6 center">
     
            <h1 class="my-3"> <?= nl2br(htmlspecialchars($title)) ?> </h1>
            <!-- Formulaire de connexion -->
            <form id = 'form_ins' method = "post" action = "connecter">
                <div class="form-group">
                    <label>Adresse email</label>
                     <input type="email" class="form-control" name="email"
                           placeholder="Entrez votre adresse email" required />
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="password"
                           placeholder="Entrez votre mot de passe" required /></br>
                           <p> <a href='mot-de-passe-oublie'>Mot de passe oublié</a> </p>
                    <!--
                    <label for="remeber_me">Connexion automatique</label>
                    <input type="checkbox" id="remember_me" name="connexion_auto" value="souvenir">
                    -->

                    <div class="g-recaptcha"
                         data-sitekey="6LeF904UAAAAABO6m7Sl-pxLDJMS-2E6v1qzSdUP"></div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
            
                Pas encore inscrit ?
            <p> <a class="btn btn-primary" href='inscription'>S'inscrire</a> </p>
        </div>
        
    </div>
</div>

<?php
 $content = ob_get_clean();

include __DIR__ . "/../template.php";
?>

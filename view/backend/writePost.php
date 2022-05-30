<?php

$title = 'Publier votre projet';
$description = 'Presenter son projet';

ob_start();

?>
<div class="formstyle">
    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8 center">
            <h1 class="my-3"> <?= nl2br(htmlspecialchars($title)) ?> </h1>
            <form action="ecrire-article" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" class="form-control" name="title" maxlength="100" placeholder="Entrez le titre" required/>
                    <label>Description</label>
                    <input type="text" class="form-control" name="chapo" maxlength="100" placeholder="Entrez la description" required/>
                    <label>Contenu</label>
                    <textarea name="content" class="form-control" placeholder="Entrez le contenu" rows="5" cols="30" required>  </textarea>
                    
                    <label for="categorie">Catégorie</label><br />
                    <select name="categorie" id="categ">
                    <option value="1">Catégorie 1</option>
                    <option value="2">Catégorie 2</option>
                    <option value="3">Catégorie 3</option>
                    <option value="4">Catégorie 4</option>
                    <option value="5">Catégorie 5</option>
                    <option value="6">Catégorie 6</option>
                    <option value="7">Catégorie 7</option>
                     <option value="8">Catégorie 8</option>
       </select>
   </p>


                    
                    <labelfor="my_file">Image : Fichier (format jpeg | max. 1 Mo)</labelfor>
                    <input type="file" name="my_file" id="my_file"/><br />
                    <button type="submit" class="btn btn-primary" name="addPost" id="i_submit">Valider</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"> </div>
    </div>
</div>


<script type="text/javascript" script src="public/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">

$('#my_file').change( function() {


    //check whether browser fully supports all File API
    if (window.File && window.FileReader && window.FileList && window.Blob) {

        var fileExtension = ['jpeg', 'jpg'];

        //get the file size and file type from file input field
        var fsize = $('#my_file')[0].files[0].size;


        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

            alert("Mauvais format ! Seul le JPEG est accepté !");
            $("#i_submit").attr('disabled','disabled');
        }


        if(fsize>1048576) {

            alert(fsize +" octets\nFichier trop volumineux !");
            $("#i_submit").attr('disabled','disabled');
        }

        if($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) > -1  && fsize<1048576 ) {

            $("#i_submit").removeAttr('disabled');
        }
    }
});

</script>

<?php $content = ob_get_clean();

include __DIR__ . "/../template.php";
?>

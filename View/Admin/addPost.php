<div class="col-lg-6 col-md-12">
    <div class="card mt-4 mb-4">

        <div class="card-header">

            <h6>Ajouter un article</h6>
        </div>
        <form method="post" action="<?= $config->basepath; ?>/Admin/Add/Post">
            <div class="card-content">

                <div class="col-12">


                    <fieldset>
                        <legend></legend>


                        <label for="nom">Titre</label>
                        <input class="form-control" type="text" name="title" id="titre" />




                        <label for="nom">Detail</label>
                        <textarea rows="5" class="form-control" name="content" id="détail"></textarea>
                    </fieldset>
                </div>





            </div>






            <div class="card-footer col-12">
                <input type="submit" class="btn btn-primary col-12" value="Valider">
            </div>
        </form>
    </div>
</div>
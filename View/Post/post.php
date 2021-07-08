<div class="row">



    <div class="col-lg-10 col-12">

        <div class="card offset-lg-2 mt-4 mb-4">


            <div class="card-header">

                <div class="title">
                    <h3><?= $post->title; ?></h3>
                </div>
                <div class="date"><?= $post->date; ?> </div>
            </div>
            <div class="card-content">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 "><img class="affiche" src="<?= $config->basepath; ?>/Image/article.png" class="img-fluid" alt=""></div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="content"><?= $post->content;; ?> </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">




            </div>
        </div>
    </div>
</div>

<div class="col-lg-6 offset-lg-3 col-md-12">
    <div class="card-header">

        <div class="title">
            <h3> Commentaire </h3>
        </div>
    </div>
    <div class="card-content">

        <?php foreach ($post->listComment as $comment) { ?>

            <div class="comment mb-4">
                <div class="col-lg-12 col-12">




                    <div class="auteur">
                        <?= $comment->author;; ?>
                    </div>
                    <div class="date"><?= $comment->date_comment->format("d/m/Y"); ?></div>




                    <div class="content col-12 mt-4"><?= $comment->comment; ?> </div>
                    <div class="button col-2 offset-lg-10">
                        <a href="<?= $config->basepath; ?>/Post/<?= $post->id; ?>/Signal/<?= $comment->id; ?>" class="btn btn-warning">
                            Signaler
                        </a>
                    </div>



                </div>

            </div>






        <?php } ?>
    </div>


</div>





</div>
<div class="col-lg-6 offset-lg-3 col-md-12">
    <div class="card mt-4 mb-4">

        <div class="card-header">

            <h2> Ajouter un commentaire</h2>
        </div>
        <form method="post" action="<?= $config->basepath; ?>/Post/Commentaire">
            <div class="card-content">

                <div class="col-12">


                    <fieldset>
                        <legend></legend>
                        <input type="hidden" name="id" value="<?= $post->id ?>">

                        <label for="nom">Pseudo</label>
                        <input class="form-control" type="text" name="pseudo" id="nom" />


                        <label for="nom">Commentaire</label>
                        <textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
                    </fieldset>
                </div>





            </div>






            <div class="card-footer col-12">
                <input type="submit" class="btn btn-primary col-12" value="Envoyer">
            </div>
        </form>
    </div>
</div>
<div class="row mt-4 mb-4">
    <?php foreach ($listPost as $post) { ?>

        <a class="col-lg-6 col-12" href="Post/<?= $post->id; ?>" target="_blank">



            <div class="card mb-4">


                <div class="card-header">


                    <div class="title"><?= $post->title; ?> </div>
                    <div class="date"><?= $post->date->format("d/m/Y"); ?> </div>

                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 "><img class="affiche" src="Image/article.png"></div>
                        <div class="col-12 col-md-6 col-lg-8">
                            <div class="résumé mt-4"><?= $post->content; ?> </div>
                        </div>
                    </div>

                    <div class="card-footer">



                    </div>
                </div>
            </div>

        </a>

    <?php } ?>
</div>
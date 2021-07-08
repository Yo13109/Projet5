<div class="card mt-4 mb-4">

                    <div class="card-header">

                        <h6> Modifier un article</h6>
                    </div>
                    <form method="post" action="<?= $config->basepath ;?>/Admin/Post/<?= $post->id;?>">
                        <div class="card-content">

                            <div class="col-12">
                            <fieldset>
                                    <legend></legend>
                                    

                                    
                               


                                    <label for="nom">Nouveau Titre</label>
                                    <input class="form-control" type="text" name="title" id="nom" value="<?= $post->title;?>" />




                                    <label for="nom">Nouveau Detail</label>
                                    <textarea rows="5" class="form-control" name="content" id="comment"><?= $post->content;?></textarea>
                                </fieldset>
                            </div>





                        </div>






                        <div class="card-footer col-12">
                            <input type="submit" class="btn btn-primary col-12" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
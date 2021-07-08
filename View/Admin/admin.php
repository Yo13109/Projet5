<p>Bonjour </p>


<div class="card">
    <div class="card-header">
        <h3>Gestion des Articles</h3>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">titre</th>
                        <th scope="col">Modifier </th>
                        <th scope="col">Supprimer</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post) { ?>




                        <tr>

                            <td><?= $post->title; ?></td>
                            <td><a href="Admin/Post/<?= $post->id; ?>"><i class="far fa-edit"></i></a></td>
                            <td><a href="Admin/Post/Delete/<?= $post->id; ?>"><i class="far fa-trash-alt"></i></a></td>

                        </tr>



                    <?php } ?>
                </tbody>
            </table>


        </div>
        <div class="col-lg-6 col-md-12">
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Ajouter un article</th>

                    </tr>
                </thead>
                <tbody>




                    <tr>


                        <td><a href="Admin/Add/"><i class="fas fa-plus"></i></a></td>
                    </tr>




                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h3>Gestion des Commentaires</h3>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">

            <table class="table">

                <h3>Nouveaux Commentaires</h3>
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Détail</th>

                        <th scope="col">Supprimer</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comment as $comment) { ?>




                        <tr>

                            <td><?= $comment->author; ?></td>
                            <td><?= $comment->comment; ?></td>

                            <td><a href="Admin/Comment/Delete/<?= $comment->id; ?>"><i class="far fa-trash-alt"></i></a></td>

                            <td>

                            </td>



                        </tr>




                    <?php } ?>
                </tbody>
            </table>


        </div>
        <div class="col-lg-6 col-md-12">

            <table class="table">
                <h3>Commentaire signalé</h3>
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Détail</th>

                        <th scope="col">Supprimer</th>
                        <th scope="col">Valider</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($signal as $signalComment) { ?>




                        <tr>

                            <td><?= $signalComment->author; ?></td>
                            <td><?= $signalComment->comment; ?></td>

                            <td><a href="<?= $config->basepath; ?>/Admin/Comment/Signal/Delete/<?= $comment->id; ?>"><i class="far fa-trash-alt"></i></a></td>
                            <td><a href="<?= $config->basepath; ?>/Admin/Comment/Add/<?= $comment->id; ?>"><i class="fas fa-check"></i></a></td>
                            <td>
                                <div class="alert alert-primary d-flex align-items-center" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    <div>
                                        ce commentaire est signalé
                                    </div>
                                </div>
                            </td>



                        </tr>




                    <?php } ?>
                </tbody>
            </table>


        </div>


    </div>

</div>
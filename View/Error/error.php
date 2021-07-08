<div class="errorBlock">
    <span class="errorTitle mt-4 offset-lg-2">
        <div class="alert alert-warning" role="alert"><u>Erreur:</u> Une erreur s'est produite durant l'execution</div>
    </span>
    <span class="errorMessage "><label>
            <div class="alert alert-danger col-12 offset-lg-2" role="alert">Attention :
        </label><?php echo $error->getMessage(); ?>
</div></span>
<?php if ($config->debug) { ?>
    <div class="errorStack">
        <label>StackTrace: </label>
        <pre><?php echo $error->getTraceAsString(); ?></pre>
    </div>
    <?php if (method_exists($error, "getMoreDetail")) { ?>
        <div class="moreDetail">
            <label>Details supplémentaires: </label>
            <pre><?php echo $error->getMoreDetail(); ?></pre>
        </div>
    <?php } ?>
<?php } ?>
</div>
<div class="container">
    <div class="row">
       
        <div class="col-8">
            <form action="<?= base_url('ejemplo/insert'); ?>" method="POST">
            <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="ingles" class="form-label">Ejemplo en Inglés</label>
                    <input type="text" class="form-control" name="ingles" id="ingles">
                </div>

                <div class="mb-3">
                    <label for="español" class="form-label">Traducción</label>
                    <input type="text" class="form-control" name="español" id="español">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>


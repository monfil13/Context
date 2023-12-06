<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Ejemplo</h2>
            <form action="<?= base_url('ejemplo/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name ="idEjemplo" value="<?= $ejemplo->idEjemplo ?>" />

            <div class="mb-3">
                    <label for="ingles" class="form-label">Ejemplo en Inglés</label>
                    <input type="text" 
                    class="form-control" 
                    name="ingles" id="ingles" value="<?= $ejemplo->ingles ?>">
                </div>

                <div class="mb-3">
                    <label for="español" class="form-label">Traducción</label>
                    <input type="text" 
                    class="form-control" 
                    name="español" id="español" value="<?= $ejemplo->español ?>">
                </div>
                

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>   
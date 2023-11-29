<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Mascota</h2>
            <form action="<?= base_url('mascota/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name ="idMascota" value="<?= $mascota->idMascota ?>" />
                <div class="mb-3">
                    <label for="apodo" class="form-label">Apodo</label>
                    <input type="text" 
                    class="form-control" 
                    name="apodo" id="apodo" value="<?= $mascota->apodo ?>">
                </div>
                <div class="mb-3">
                    <label for="animal" class="form-label">Animal</label>
                    <input type="text" 
                    class="form-control" 
                    name="animal" id="animal" value="<?= $mascota->animal ?>">
                </div>
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo de animal</label>
                    <input type="text" 
                    class="form-control" 
                    name="tipo" id="tipo" value="<?= $mascota->tipo ?>">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <?php if($mascota->sexo == "Macho"): ?>
                        <option value="Macho" selected>Macho</option>
                        <option value="Hembra">Hembra</option>
                        <?php else: ?>
                        <option value="Macho">Macho</option>
                        <option value="Hembra" selected>Hembra</option>
                        <?php endif ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" 
                    class="form-control" 
                    name="edad" id="edad" value="<?= $mascota->edad ?>">
                </div>

                <div class="mb-3">
                    <label for="alergias" class="form-label">Alergias</label>
                    <input type="text" 
                    class="form-control" 
                    name="alergias" id="alergias" value="<?= $mascota->alergias ?>">
                </div>

                <div class="mb-3">
                    <label for="idRaza" class="form-label">Raza</label>
                    <input type="number" 
                    class="form-control" 
                    name="idRaza" id="idRaza" value="<?= $mascota->idRaza ?>">
                </div>

                <div class="mb-3">
                    <label for="idDieta" class="form-label">Dieta</label>
                    <input type="number" 
                    class="form-control" 
                    name="idDieta" id="idDieta" value="<?= $mascota->idDieta ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>   
<div class="container">
    <div class="row">

        <div class="col-8">
            <form action="<?= base_url('palabra/insert'); ?>" method="POST">
            <?= csrf_field() ?>
                         <div class="mb-3">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="palabra" class="form-label">Palabra</label>
                    <input type="text" class="form-control" name="palabra" id="palabra">
                </div>

                <div class="mb-3">
                    <label for="definicion" class="form-label">Definición</label>
                    <input type="text" class="form-control" name="definicion" id="definicion">
                </div>

                <div class="mb-3">
                    <label for="sinonimo" class="form-label">Sinónimo</label>
                    <input type="text" class="form-control" name="sinonimo" id="sinonimo">
                </div>

                <div class="mb-3">
                    <label for="ejemplo" class="form-label">Ejemplo</label>
                    <input type="text" class="form-control" name="ejemplo" id="ejemplo">
                </div>                

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>
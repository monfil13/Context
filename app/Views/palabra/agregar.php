<div class="container">
    <div class="row">
       
        <div class="col-8">
            <form action="<?= base_url('palabra/insert'); ?>" method="POST">
            <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="nombrePalabra" class="form-label">Nombre de Palabra</label>
                    <input type="text" class="form-control" name="nombrePalabra" id="nombrePalabra">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>

            <div class="mb-3">
                    <label for="tipo">Tipo de Palabra</label>
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
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Palabra</h2>
            <form action="<?= base_url('palabra/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name ="idPalabra" value="<?= $palabra->idPalabra ?>" />

            <div class="mb-3">
                    <label for="nombrePalabra" class="form-label">Nombre de Palabra</label>
                    <input type="text" 
                    class="form-control" 
                    name="nombrePalabra" id="nombrePalabra" value="<?= $palabra->nombrePalabra ?>">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" 
                    class="form-control" 
                    name="descripcion" id="descripcion" value="<?= $palabra->descripcion ?>">
                </div>

            
            <div class="mb-3">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <?php if($palabra->tipo == "sustantivo"): ?>
                        <option value="sustantivo" selected>Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                        <?php endif ?>

                        <?php if($palabra->tipo == "adjetivo"): ?>
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo" selected>Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                        <?php endif ?>

                        <?php if($palabra->tipo == "verbo"): ?>
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo" selected>Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                        <?php endif ?>

                        <?php if($palabra->tipo == "pronombre"): ?>
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre" selected>Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                        <?php endif ?>

                        <?php if($palabra->tipo == "adverbio"): ?>
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio" selected>Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                        <?php endif ?>

                        <?php if($palabra->tipo == "preposicion"): ?>
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion" selected>Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                        <?php endif ?>

                        <?php if($palabra->tipo == "conjuncion"): ?>
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion" selected>Conjunción</option>
                        <?php endif ?>
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
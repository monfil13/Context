<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/palabra/buscar/'); ?>" method="GET">

                <label for="nombrePalabra">Nombre de Palabra</label>
                <input type="text" class="form-control" name="nombrePalabra">
               
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" name="descripcion">
            
                <label for="tipo">Tipo de Palabra</label>
            <select name="tipo" class="form-control">
                    <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                </select>
              
                <div class="mb-3">
                      
                    </select>
                </div>
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
                </form>
        </div>
    </div>
    <?php
    if(isset($palabras)){
        
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre de Palabra</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                </thead>
                <tbody>
                <?php foreach($palabras as $nombrePalabra) : ?>
                    <tr>
                        <td><?=$nombrePalabra->nombrePalabra ?></td>
                        <td><?=$nombrePalabra->descripcion ?></td>
                        <td><?=$nombrePalabra->tipo ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
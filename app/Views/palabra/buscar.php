<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/palabra/buscar/'); ?>" method="GET">
                <label for="tipo">tipo</label>
                <select name="tipo" class="form-control">
                        <option value="sustantivo">Sustantivo</option>
                        <option value="adjetivo">Adjetivo</option>
                        <option value="verbo">Verbo</option>
                        <option value="pronombre">Pronombre</option>
                        <option value="adverbio">Adverbio</option>
                        <option value="preposicion">Preposición</option>
                        <option value="conjuncion">Conjunción</option>
                </select>
                
                <label for="palabra">Palabra</label>
                <input type="text" class="form-control" name="palabra">

                <label for="definicion">Definición</label>
                <input type="text" class="form-control" name="definicion">

                <label for="sinonimo">Sinónimo</label>
                <input type="text" class="form-control" name="sinonimo">

                <label for="ejemplo">Ejemplo</label>
                <input type="text" class="form-control" name="ejemplo">
                

                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($palabras)){
        //print_r($palabras);
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>                    
                    <th>Tipo de Palabra</th>
                    <th>Palabra</th>
                    <th>Definición</th>
                    <th>Sinónimo</th>
                    <th>Ejemplo</th>
                </thead>
                <tbody>
                <?php foreach($palabras as $palabra) : ?>
                    <tr>
                        <td><?=$palabra->tipo ?></td>
                        <td><?=$palabra->palabra ?></td>
                        <td><?=$palabra->definicion ?></td>
                        <td><?=$palabra->sinonimo ?></td>
                        <td><?=$palabra->ejemplo ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
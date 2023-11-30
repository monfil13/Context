<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/ejemplo/buscar/'); ?>" method="GET">

                <label for="ingles">Ejemplo en Inglés</label>
                <input type="text" class="form-control" name="ingles">
               
                <label for="español">Traducción</label>
                <input type="text" class="form-control" name="español">
                          
                <div class="mb-3">
                      
                    </select>
                </div>
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
                </form>
        </div>
    </div>
    <?php
    if(isset($ejemplos)){
        
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Ejemplo en Inglés</th>
                    <th>Traducción</th>
                </thead>
                <tbody>
                <?php foreach($ejemplos as $ejemplo) : ?>
                    <tr>
                        <td><?=$ejemplo->ingles ?></td>
                        <td><?=$ejemplo->español ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Palabras</h2>
            <table class="table">
                <thead>
                    
                    <th>Tipo de Palabra</th>
                    <th>Palabra</th>
                    <th>Definición</th>
                    <th>Sinónimo</th>
                    <th>Ejemplo</th>
                    <th>Accciones</th>
                </thead>
                <tbody>
                <?php foreach($palabras as $palabra): ?>
                    <tr>
                        <td><?=$palabra->tipo ?></td>
                        <td><?=$palabra->palabra ?></td>
                        <td><?=$palabra->definicion ?></td>
                        <td><?=$palabra->sinonimo ?></td>
                        <td><?=$palabra->ejemplo ?></td>
                        <td> 
                            <a href="<?=base_url('index.php/palabra/editar/'.$palabra->idpalabra);?>">Editar</a>   
                            <a href="<?=base_url('index.php/palabra/delete/'.$palabra->idpalabra);?>">Eliminar</a>
                            
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
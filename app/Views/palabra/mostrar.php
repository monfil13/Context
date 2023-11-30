<section id="palabras" class="mt-5">
    <div class="container fluid">
        <div class="row">
        <div class="col-12">
            <h2>Palabras</h2>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table  table-bordered table-striped table-sm" style="font-size:10pt">
                    <thead>
                        
                        <th>Nombre de Palabra</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th colspan="2">Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($palabras as $key ) : ?>
                        <tr>
                            <td><?php echo $key->nombrePalabra?></td>
                            <td><?php echo $key->descripcion?></td>
                            <td><?php echo $key->tipo?></td>
                            <td>
                                <a href="<?= base_url('palabra/editar/'.$key->idPalabra);  ?>" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $key->idPalabra; ?> ">
                                Borrar
                                </button>
                            </td>

                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>

        <?php 
            print 'El total de palabras son: ' . $totalPalabras;
            $porPagina=5;
            $pagina= $totalPalabras/$porPagina;

        ?>

        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                <td>
                            <a class="btn btn-success btn-sm" href="<?= base_url('palabra/agregar'); ?>">Agregar</a>    
                            </td>
             
                </ul>
                </nav>
            </div>
        </div>

<?php foreach($palabras as $key):?>
<div class="modal fade" id="exampleModal<?php echo $key->idPalabra; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Advertencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <p>¿Está seguro de que desea eliminar la palabra?</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" href="<?= base_url('palabra/delete/'.$key->idPalabra);  ?>" >Eliminar</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
    </div>
</section>

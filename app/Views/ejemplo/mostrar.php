<section id="ejemplos" class="mt-5">
    <div class="container fluid">
        <div class="row">
        <div class="col-12">
            <h2>Ejemplos</h2>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table  table-bordered table-striped table-sm" style="font-size:10pt">
                    <thead>
                        
                        <th>Ejemplo en Inglés</th>
                        <th>Traducción</th>
                        <th colspan="2">Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($ejemplos as $key ) : ?>
                        <tr>
                            <td><?php echo $key->ingles?></td>
                            <td><?php echo $key->español?></td>
                            <td>
                                <a href="<?= base_url('ejemplo/editar/'.$key->idEjemplo);  ?>" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $key->idEjemplo; ?> ">
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
            print 'El total de ejemplos son: ' . $totalEjemplos;
            $porPagina=5;
            $pagina= $totalEjemplos/$porPagina;

        ?>

        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                <td>
                            <a class="btn btn-success btn-sm" href="<?= base_url('ejemplo/agregar'); ?>">Agregar</a>    
                            </td>
             
                </ul>
                </nav>
            </div>
        </div>

<?php foreach($ejemplos as $key):?>
<div class="modal fade" id="exampleModal<?php echo $key->idEjemplo; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Advertencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <p>¿Está seguro de que desea eliminar la ejemplo?</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" href="<?= base_url('ejemplo/delete/'.$key->idEjemplo);  ?>" >Eliminar</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
    </div>
</section>

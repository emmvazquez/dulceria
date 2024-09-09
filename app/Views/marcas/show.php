<div class="container">

<div class="row">
    <div class="col">
        <h1>Marcas</h1>
        <a href="<?=base_url('marcas/add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>IdMarca</th>
                    <th>Marca</th>
                </thead>
                <tbody>
                    <?php foreach($marcas as $key) : ?>
                        <tr>
                        <td><?=$key->idmarca ?></td>
                        <td><?=$key->marca ?></td>
                        <td>
                            <a href="<?=base_url('marcas/delete/'.$key->idmarca);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('marcas/edit/'.$key->idmarca);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
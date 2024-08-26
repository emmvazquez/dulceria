<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Marca</h2>
    <form action="<?=base_url('marcas/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input name="marca" type="text" class="form-control" id="marca" placeholder="Marca">
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    
    </div>
    </div>
</div>
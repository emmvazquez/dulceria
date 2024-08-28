<div class="container">
    <div class="row">
        <div class="col">
            <select name="idEstado">
                <?php foreach ($estados as $key ) :?>
                   <option value="<?=$key->idEstado?>"><?=$key->estado?></option>
                <?php endforeach ?>

            </select>
        </div>
    </div>
</div>
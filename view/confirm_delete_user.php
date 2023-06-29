<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <form class="form" action="index.php?controller=user&action=delete" method="POST">
            <input type="hidden" name="id" value="<?php echo $dataToView["data"]["id"]; ?>" />
            <div class="alert alert-warning">
                <b>¿Confirma que desea eliminar esta usuario?:</b>
                <i><?php echo $dataToView["data"]["name"]; ?></i>
            </div>
            <input type="submit" value="Eliminar" class="btn btn-danger" />
            <a class="btn btn-outline-success" href="index.php?controller=user&action=list">Cancelar</a>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>
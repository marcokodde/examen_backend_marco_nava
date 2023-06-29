<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <form class="form" action="index.php?controller=task&action=delete" method="POST">
            <input type="hidden" name="id" value="<?php echo $dataToView["data"]["id"]; ?>" />
            <div class="alert alert-warning">
                <b>¿Confirma que desea eliminar esta tarea?:</b>
                <i><?php echo $dataToView["data"]["title"]; ?></i>
            </div>
            <input type="submit" value="Eliminar" class="btn btn-danger" />
            <a class="btn btn-outline-success" href="index.php?controller=task&action=list">Cancelar</a>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>

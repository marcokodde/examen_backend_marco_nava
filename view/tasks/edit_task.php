<?php
$id = $title = $content = "";

if (isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if (isset($dataToView["data"]["title"])) $title = $dataToView["data"]["title"];
if (isset($dataToView["data"]["description"])) $content = $dataToView["data"]["description"];

?>
<div class="row">
    <?php
    if (isset($_GET["response"]) and $_GET["response"] === true) {
    ?>
        <div class="alert alert-success">
            Operación realizada correctamente. <a href="index.php?controller=task&action=list">Volver al listado</a>
        </div>
    <?php
    }
    ?>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form class="form" action="index.php?controller=task&action=save" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <div class="form-group">
                    <label>Título</label>
                    <input class="form-control" type="text" name="title" value="<?php echo $title; ?>" />
                </div>
                <div class="form-group mb-2">
                    <label>Contenido</label>
                    <textarea class="form-control" style="white-space: pre-wrap;" name="content"><?php echo $content; ?></textarea>
                </div>
                <input type="submit" value="Guardar" class="btn btn-outline-primary" />
                <a class="btn btn-outline-danger" href="index.php?controller=task&action=list">Cancelar</a>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
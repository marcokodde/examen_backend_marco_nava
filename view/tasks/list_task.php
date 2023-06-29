<div class="row">
    <div class="offset-lg-1 ">
        <ul class="list-unstyled">
            <li class="mb-1">
                <a href="index.php?controller=task&action=edit" class="btn btn-outline-primary">Crear Tarea</a>
            </li>
            <li class="mb-1">
                <button onclick="toogle()" class="btn btn-outline-success">Vista de Tabla</a>
            </li>
        </ul>
    </div>
</div>
<p></p>
<hr>
<div class="row">
    <div class="lista">
        <div class="row">
            <div class="card-title">
                <h3>Listado de Tareas</h3>
            </div>
            <div class="col-md-4"></div>
            <?php
            if (count($dataToView["data"]) > 0) {

                foreach ($dataToView["data"] as $task) {
            ?>
                    <div class="col-md-4">
                        <div class="card-body border border-secondary rounded">
                            <h5 class="card-title"><?php echo $task['title']; ?></h5>
                            <div class="card-text"><?php echo nl2br($task['description']); ?></div>
                            <hr class="mt-1" />
                            <a href="index.php?controller=task&action=edit&id=<?php echo $task['id']; ?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?controller=task&action=confirmDelete&id=<?php echo $task['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="col-md-4"></div>
        </div>
    </div>

    <div class="tabla" display="none" style="display: none;">
        <div class="card-title">
            <h3>Tabla de Tareas</h3>
        </div>
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-20">Id.</th>
                    <th class="px-4 py-2">Titulo</th>
                    <th class="px-4 py-2">Contenido</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($dataToView["data"] as $task) {
                ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo $task['title']; ?></td>
                        <td class="border px-4 py-2"><?php echo $task['title']; ?></td>
                        <td class="border px-4 py-2"><?php echo $task['description']; ?></td>
                        <td class="border px-4 py-2">
                            <a href="index.php?controller=task&action=edit&id=<?php echo $task['id']; ?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?controller=task&action=confirmDelete&id=<?php echo $task['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
            } else {
?>
    <div class="alert alert-info">
        Actualmente No Existen Tareas.
    </div>
<?php
            }
?>
</div>
<script>
    function toogle() {

        var x = document.querySelector('.lista');
        var y = document.querySelector('.tabla');

        if (x.style.display === "none") {
            console.log(x);
            console.log(y);
            x.style.display = "block";
            y.style.display = "none";
        } else {
            console.log(y);
            console.log(x);

            y.style.display = "block";
            x.style.display = "none";
        }
    }
</script>
<div class="row">
    <div class="offset-lg-1 ">
        <ul class="list-unstyled">
            <li class="mb-1">
                <a href="index.php?controller=user&action=edit" class="btn btn-outline-primary">Crear Usuario</a>
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
                <h3>Listado de Usuarios</h3>
            </div>
            <div class="col-md-4"></div>
            <?php
            if (count($dataToView["data"]) > 0) {

                foreach ($dataToView["data"] as $user) {
            ?>
                    <div class="col-md-4">
                        <div class="card-body border border-secondary rounded">
                            <h5 class="card-title"><?php echo $user['name']; ?></h5>
                            <div class="card-text"><?php echo nl2br($user['email']); ?></div>
                            <p class="card-title"><?php echo $user['phone']; ?></p>
                            <?php
                            $date = date_create($user['birthday']);
                            $nacimiento = new DateTime($user['birthday']);
                            $ahora = new DateTime(date("Y-m-d"));
                            $diferencia = $ahora->diff($nacimiento);
                            $edad = $diferencia->format("%y");
                            ?>
                            <p class="card-title"><?php echo date_format($date, "D, j, F, Y"); ?></p>
                            <p class="card-title"><?php echo $edad; ?> años</p>

                            <hr class="mt-1" />
                            <a href="index.php?controller=user&action=edit&id=<?php echo $user['id']; ?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?controller=user&action=confirmDelete&id=<?php echo $user['id']; ?>" class="btn btn-danger">Eliminar</a>
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
            <h3>Tabla de Usuarios</h3>
        </div>
        <table id="myTable" class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-20">Id.</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Correo electronico</th>
                    <th class="px-4 py-2">Contraseña</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($dataToView["data"] as $user) {
                ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo $user['id']; ?></td>
                        <td class="border px-4 py-2"><?php echo $user['name']; ?></td>
                        <td class="border px-4 py-2"><?php echo $user['email']; ?></td>
                        <td class="border px-4 py-2"><?php echo $user['password']; ?></td>

                        <td class="border px-4 py-2">
                            <a href="index.php?controller=user&action=view&id=<?php echo $user['id']; ?>" class="btn btn-success">Ver</a>
                            <a href="index.php?controller=user&action=edit&id=<?php echo $user['id']; ?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?controller=user&action=confirmDelete&id=<?php echo $user['id']; ?>" class="btn btn-danger">Eliminar</a>
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
        Actualmente No Existen Usuarios.
    </div>
<?php
            }
?>
</div>
<script>
    var dataTable = new DataTable("#myTable");

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

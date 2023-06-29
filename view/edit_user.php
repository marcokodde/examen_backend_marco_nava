<?php
$id = $name = $email = $password = $address = $phone = $birthday = "";

if (isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if (isset($dataToView["data"]["name"])) $name = $dataToView["data"]["name"];
if (isset($dataToView["data"]["email"])) $email = $dataToView["data"]["email"];
if (isset($dataToView["data"]["password"])) $password = $dataToView["data"]["password"];
if (isset($dataToView["data"]["address"])) $address = $dataToView["data"]["address"];
if (isset($dataToView["data"]["phone"])) $phone = $dataToView["data"]["phone"];
if (isset($dataToView["data"]["birthday"])) $birthday = $dataToView["data"]["birthday"];

?>
<div class="row">
    <?php
    if (isset($_GET["response"]) and $_GET["response"] === true) {
    ?>
        <div class="alert alert-success">
            Operación realizada correctamente. <a href="index.php?controller=user&action=list">Volver al listado</a>
        </div>
    <?php
    }
    ?>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form class="form" action="index.php?controller=user&action=save" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required />
                </div>
                <div class="form-group">
                    <label>Correo electronico</label>
                    <input class="form-control" type="email" name="email" value="<?php echo $email; ?>" required />
                </div>
                <div class="form-group mb-2">
                    <label>Contraseña</label>
                    <input class="form-control" type="password" name="password" value="<?php echo $password; ?>" />
                </div>
                <div class="form-group mb-2">
                    <label>Direccion</label>
                    <input class="form-control" type="text" name="address" value="<?php echo $address; ?>" />
                </div>
                <div class="form-group mb-2">
                    <label>Telefono</label>
                    <input class="form-control" type="text" name="phone" maxlength="10" value="<?php echo $phone; ?>" />
                </div>
                <div class="form-group mb-2">
                    <?php
                    if (isset($dataToView["data"]["birthday"])) {
                        $date = date_create($birthday);
                        $nacimiento = new DateTime($birthday);
                        $ahora = new DateTime(date("Y-m-d"));
                        $diferencia = $ahora->diff($nacimiento);
                        $edad = $diferencia->format("%y");
                    ?>
                        <div class="row">
                            <div class="form col-lg-6">
                                <label>Fecha de Nacimiento</label>
                                <input class="form-control" type="text" id="datepicker" name="birthday" value="<?php echo date_format($date, "Y-m-d"); ?>" />
                            </div>
                            <div class="form col-lg-6">
                                <label>Edad</label>
                                <input class="form-control" type="text" value="<?php echo $edad; ?> años" />
                                <h5 id="edad"></h5>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="row">
                            <div class="form col-lg-4">
                                <label>Fecha de Nacimiento</label>
                                <input type="text" id="datepicker" name="birthday" />
                            </div>
                            <div class="form col-lg-6">
                                <h5 id="edad"></h5>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <input type="submit" value="Guardar" class="btn btn-outline-primary" />
                <a class="btn btn-outline-danger" href="index.php?controller=user&action=list">Cancelar</a>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

<script>
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: "1923-12-12",
            maxDate: "+0M +0D"
        });
    });

    const fechaNacimiento = document.getElementById("datepicker");
    const edad = document.getElementById("edad");

    const calcularEdad = (fechaNacimiento) => {
        const fechaActual = new Date();
        const anoActual = parseInt(fechaActual.getFullYear());
        const mesActual = parseInt(fechaActual.getMonth()) + 1;
        const diaActual = parseInt(fechaActual.getDate());

        // 2016-07-11
        const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
        const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
        const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

        let edad = anoActual - anoNacimiento;
        if (mesActual < mesNacimiento) {
            edad--;
        } else if (mesActual === mesNacimiento) {
            if (diaActual < diaNacimiento) {
                edad--;
            }
        }
        return edad;
    };

    window.addEventListener('load', function() {

        fechaNacimiento.addEventListener('change', function() {
            if (this.value) {
                edad.innerText = `Modificaste tu edad, ahora tienes: ${calcularEdad(this.value)} años`;
            }
        });

    });
</script>

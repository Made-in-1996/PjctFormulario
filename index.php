<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="css/estilo.css">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/validacion.js"
</head>
<body>

<div class="container">
    <div class="row">
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Registro Empleado</div>
            <div class="panel-body">
                <form action="datos.php" method="post" id="needs-validation" novalidate>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="" required>
                            <div class="invalid-feedback">
                                Ingresa datos
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control" placeholder="Direccion" name="direccion" value="" required>
                            <div class="invalid-feedback">
                                Ingresa datos
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="tel" class="form-control" placeholder="Telefono" name="telefono" value="" required>
                            <div class="invalid-feedback">
                                Ingresa datos
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Correo electronico</label>
                            <input type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email" value="" required>
                            <div class="invalid-feedback">
                                Ingresa datos
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Sexo</label>
                            <input type="radio" name="sexo" value="Masculino" required> Masculino
                            <input type="radio" name="sexo" value="Femenino" required> Femenino
                        </div>
                        <div class="form-group row">
                            <label>Opciones de Empleo</label><br>
                            <div class="col-md-6">
                                <input type="checkbox" value="Electricista" name="opcion"/>Electricista<br>
                                <input type="checkbox" value="Arquitecto" name="opcion" />Arquitecto<br>
                                <input type="checkbox" value="Ingeniero" name="opcion" />Ingeniero<br>
                                <input type="checkbox" value="Diseñador" name="opcion" />Diseñador<br>
                                <input type="checkbox" value="Seguridad" name="opcion" />Seguridad<br>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" value="Medico" name="opcion" />Medico<br>
                                <input type="checkbox" value="Abogado" name="opcion" />Abogado<br>
                                <input type="checkbox" value="Investigador" name="opcion" />Investigador<br>
                                <input type="checkbox" value="Cirujano" name="opcion" />Cirujano<br>
                                <input type="checkbox" value="Conserje" name="opcion" />Conserje<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="fecha">Anterior Trabajo</label>
                            <textarea name="anteriortrabajo" class="form-control" id="trabajo" placeholder="Anterior Trabajo"></textarea>
                            <div class="invalid-feedback">
                                Opcional
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Referencias</label>
                            <textarea name="referencias" class="form-control" id="referencias" placeholder="Referencias"></textarea>
                            <div class="invalid-feedback">
                                Opcional
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Comentario</label>
                            <textarea name="comentario" class="form-control" id="comentario" placeholder="Comentario"></textarea>
                            <div class="invalid-feedback">
                                Opcional
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date"  class="form-control" id="fecha" name="fecha">
                            <div class="invalid-feedback">
                                Ingresa datos
                            </div>
                        </div>
                        <div class="col-md-3">
                        <input class="btn btn-primary btn-block" type="submit" value="enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            var form = document.getElementById('needs-validation');
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    })();
</script>
<script src="js/jquery-3.2.1.min.js"></script>
<script type="js/bootstrap.min.js"></script>
<script src="js/validacion.js"></script>
</body>
</html>

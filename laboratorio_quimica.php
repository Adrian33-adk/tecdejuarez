<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratorio Química</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/material.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <style>
        /* Estilos personalizados para alinear el contenido a la derecha */
        .content-container {
            margin-left: 250px; /* Espacio para el menú lateral */
            padding: 20px; /* Espaciado alrededor del contenido */
        }

        .header-well {
            margin-bottom: 20px; /* Espacio entre el encabezado y la tabla */
        }

        /* Estilo para el enlace de descarga */
        .download-link {
            position: absolute; /* Posicionamiento absoluto */
            top: 20px; /* Ajusta el espacio desde la parte superior */
            right: 20px; /* Ajusta el espacio desde la derecha */
            background-color: #fffffe; /* Color de fondo */
            color: white; /* Color del texto */
            padding: 10px 15px; /* Espaciado interno */
            text-decoration: none; /* Sin subrayado */
            border-radius: 5px; /* Bordes redondeados */
        }
        .download-link {
    color: rgb(0, 0, 0); /* Cambia 'red' por el color que desees */
}

        
    </style>
</head>
<body>
    <!-- Notifications area -->
    <section class="full-width container-notifications">
        <div class="full-width container-notifications-bg btn-Notification"></div>
        <section class="NotificationArea">
            <div class="full-width text-center NotificationArea-title tittles">Notificaciones <i class="zmdi zmdi-close btn-Notification"></i></div>
            <!-- Aquí van las notificaciones -->
        </section>
    </section>
    
    <!-- navBar -->
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>    
            <div class="mdl-tooltip" for="btn-menu">Menu</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-Notification" id="notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="mdl-tooltip" for="notifications">Notificacion</div>
                    </li>
                    <li class="btn-exit" id="btn-exit" onclick="logout()">
                        <i class="zmdi zmdi-power"></i>
                        <div class="mdl-tooltip" for="btn-exit">LogOut</div>
                    </li>
                    
                    <script>
                        function logout() {
                            window.location.href = 'index.php';
 }
                    </script>
                    <li class="text-condensedLight noLink"><small>Nombre de Usuario</small></li>
                    <li class="noLink">
                        <figure>
                            <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                        </figure>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Enlace de descarga del manual -->
    <a href="docs/manual_quimica.pdf" class="download-link" download>Descargar manual de química</a>

    <!-- navLateral -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i> Inventario
            </div>
            <figure class="full-width" style="height: 77px;">
                <div class="navLateral-body-cl">
                    <img src="images/tec.jpg" alt="Avatar" class="img-responsive">
                </div>
            </figure>
            <div class="full-width tittles navLateral-body-tittle-menu">
                <i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; DASHBOARD</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="home.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-view-dashboard"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                HOME
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-case"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                ADMINISTRACION
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="company.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-balance"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        COMPAÑIA
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="providers.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-truck"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PROVEEDORES
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="payments.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-card"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PAGOS
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="categories.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-label"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CATEGORIAS
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-face"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                USUARIOS
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href=" admin.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        ADMINISTRADORES
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="client.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CLIENTE
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="products.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-washing-machine"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                PRODUCTOS
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="sales.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                VENTAS
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="inventory.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-store"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                INVENTARIO
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-wrench"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                AJUSTES
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="#!" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-widgets"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        OPCIONES
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="#!" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-widgets"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        OPCION
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- pageContent -->
    <section class="full-width pageContent">
        <div class="content-container">
            <section class="full-width header-well">
                <div class="full-width header-well-icon">
                    <i class="zmdi zmdi-store"></i>
                </div>
                <div class="full-width header-well-text">
                    <h3></h3>
                    <p class="text-condensedLight">LABORATORIO QUIMICA</p>
                    <a href="pdf/manual_quimica.pdf" class="download-link" download>Descargar manual de química</a>
                </div>
            </section>
            <div class="full-width divider-menu-h"></div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">ID</th>
                                <th>Material</th>
                                <th>Cantidad</th>
                                <th>Capacidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conexion.php'; // In cluir el archivo de configuración

                            // Consulta para obtener los datos de la tabla
                            $sql = "SELECT * FROM laboratorio_quimica";
                            $result = $conn->query($sql);

                            // Verificar si hay resultados
                            if ($result->num_rows > 0) {
                                // Salida de datos de cada fila
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["material"] . "</td>";
                                    echo "<td>" . $row["cantidad"] . "</td>";
                                    echo "<td>" . ($row["capacidad"] ? $row["capacidad"] : 'N/A') . "</td>"; // Muestra 'N/A' si capacidad es NULL
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No se encontraron registros</td></tr>";
                            }

                            // Cerrar conexión
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
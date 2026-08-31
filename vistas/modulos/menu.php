<aside class="main-sidebar">

```
<section class="sidebar">

    <ul class="sidebar-menu" data-widget="tree">

        <!-- INICIO -->
        <li class="<?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == "inicio") ? "active" : ""; ?>">

            <a href="inicio">

                <i class="fa fa-home"></i>

                <span>Inicio</span>

            </a>

        </li>


        <!-- USUARIOS -->
        <li class="<?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == "usuarios") ? "active" : ""; ?>">

            <a href="usuarios">

                <i class="fa fa-user"></i>

                <span>Usuarios</span>

            </a>

        </li>


        <!-- CATEGORÍAS -->
        <li class="<?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == "categorias") ? "active" : ""; ?>">

            <a href="categorias">

                <i class="fa fa-th"></i>

                <span>Categorías</span>

            </a>

        </li>


        <!-- PRODUCTOS -->
        <li class="<?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == "productos") ? "active" : ""; ?>">

            <a href="productos">

                <i class="fa fa-product-hunt"></i>

                <span>Productos</span>

            </a>

        </li>


        <!-- CLIENTES -->
        <li class="<?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == "clientes") ? "active" : ""; ?>">

            <a href="clientes">

                <i class="fa fa-users"></i>

                <span>Clientes</span>

            </a>

        </li>


        <!-- ==========================================
             VENTAS
             ========================================== -->

        <?php

        $rutaActual = isset($_GET["ruta"]) ? $_GET["ruta"] : "inicio";

        $rutasVentas = array(
            "ventas",
            "crear-venta",
            "reportes"
        );

        ?>

        <li class="treeview <?php echo in_array($rutaActual, $rutasVentas) ? "active" : ""; ?>">

            <a href="#">

                <i class="fa fa-list-ul"></i>

                <span>Ventas</span>

                <span class="pull-right-container">

                    <i class="fa fa-angle-left pull-right"></i>

                </span>

            </a>


            <!-- SUBMENÚ DE VENTAS -->

            <ul class="treeview-menu">


                <!-- ADMINISTRAR VENTAS -->

                <li class="<?php echo ($rutaActual == "ventas") ? "active" : ""; ?>">

                    <a href="ventas">

                        <i class="fa fa-circle-o"></i>

                        <span>Administrar ventas</span>

                    </a>

                </li>


                <!-- CREAR VENTA -->

                <li class="<?php echo ($rutaActual == "crear-venta") ? "active" : ""; ?>">

                    <a href="crear-venta">

                        <i class="fa fa-circle-o"></i>

                        <span>Crear venta</span>

                    </a>

                </li>


                <!-- REPORTE DE VENTAS -->

                <li class="<?php echo ($rutaActual == "reportes") ? "active" : ""; ?>">

                    <a href="reportes">

                        <i class="fa fa-circle-o"></i>

                        <span>Reporte de ventas</span>

                    </a>

                </li>


            </ul>

        </li>

    </ul>

</section>
```

</aside>

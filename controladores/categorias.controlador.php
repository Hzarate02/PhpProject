<?php
    class ControladorCategorias{
        /*==========================
        CREAR CATEGORIAS
        ===========================*/

        public static function ctrCrearCategoria(){
            if(isset($_POST["nuevaCategoria"])){
                if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){

                $tabla = "categorias";

                $datos = $_POST["nuevaCategoria"];

                $respuesta = ModeloCategorias::mdlIngresarCategoria($tabla, $datos);

                if($respuesta == "ok"){
                    echo '<script>

                    Swal.fire({
                        icon: "success",
                        title: "La Categoría ha sido guardada correctmente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        }).then((result) =>{

                            if(result.value){

                            window.location = "categorias";

                            }
                    })
                    </script>';
                }

            }else{
                
                echo'<script>

                    Swal.fire({
                        icon: "error",
                        title: "¡La categoria no puede ir vacía o llevar caracteres espciales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        )}.then((result) => {
                            if (result.value) {

                            windows.location = "categorias";
                        }
                    })
                </script>';
            }
        }
    }

    /*=============================
        MOSTRAR CATEGORIAS
    ==============================*/

    public static function ctrMostrarCategorias($item, $valor){

        $tabla = "categorias";

        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

        return $respuesta;
    }

    /*=============================
        EDITAR CATEGORIAS
    ==============================*/

    public static function ctrEditarCategoria(){
            if(isset($_POST["editarCategoria"])){
                if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])){

                $tabla = "categorias";

                $datos = array("categoria" => $_POST["editarCategoria"],
                                "id" => $_POST["idCategoria"]);

                $respuesta = ModeloCategorias::mdlEditarCategoria($tabla, $datos);

                if($respuesta == "ok"){
                    echo '<script>

                    Swal.fire({
                        icon: "success",
                        title: "La Categoría ha sido actualizada correctmente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        }).then((result) =>{

                            if(result.value){

                            window.location = "categorias";

                            }
                    })
                    </script>';
                }

            }else{
                
                echo'<script>

                    Swal.fire({
                        icon: "error",
                        title: "¡La categoria no puede ir vacía o llevar caracteres espciales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        )}.then((result) => {
                            if (result.value) {

                            windows.location = "categorias";
                        }
                    })
                </script>';
            }
        }
    }
    /*=============================
        ELIMINAR CATEGORIAS
    ==============================*/

    public static function ctrBorrarCategorias(){
        if(isset($_GET['idCategoria'])){

            $tabla = "categorias";
            $datos = $_GET["idCategoria"];

            $respuesta = ModeloCategorias::mdlBorrarCategorias($tabla, $datos);

            if($respuesta == "ok"){

                echo '<script>

                    Swal.fire({
                        icon: "success",
                        title: "La categoria ha sido borrada correctamente",
                        confirmButtonText: "Cerrar"
                    }).then((result) => {

                        if(result.value){

                            window.location = "categorias";

                        }

                    });

                </script>';

            }
        }
    }
}
?>
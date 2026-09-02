<?php

class ControladorVentas{

    /*=============================================
    MOSTRAR VENTAS
    =============================================*/

public static function ctrMostrarVentas($item, $valor){
    
    $tabla = "ventas";

    $respuesta = ModeloVentas::mdlMostrarVentas($tabla, $item, $valor);

    return $respuesta;
}

    /*=============================================
    CREAR VENTA
    =============================================*/

    public static function ctrCrearVenta(){

        if(isset($_POST["nuevaVenta"])){

            if(preg_match('/^[0-9]+$/', $_POST["nuevaVenta"])){

                $tabla = "ventas";

                $datos = array("id_vendedor" => $_POST["idVendedor"],
                               "id_cliente" => $_POST["seleccionarCliente"],
                               "codigo" => $_POST["nuevaVenta"],
                               "productos" => $_POST["listaProductos"],
                               "impuesto" => $_POST["nuevoPrecioImpuesto"],
                               "neto" => $_POST["nuevoPrecioNeto"],
                               "total" => $_POST["totalVenta"]);

                $respuesta = ModeloVentas::mdlIngresarVenta($tabla, $datos);

                if($respuesta == "ok"){

                    echo'<script>

                    swal({
                          type: "success",
                          title: "La venta ha sido guardada correctamente",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
                          }).then(function(result){
                                    if (result.value) {

                                    window.location = "ventas";

                                    }
                                })

                    </script>';

                }	

            }else{

                echo'<script>

                    swal({
                          type: "error",
                          title: "¡La venta no puede ir vacía o llevar caracteres especiales!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
                          }).then(function(result){
                            if (result.value) {

                            window.location = "crear-venta";

                            }
                        })

              	</script>';

            }

        }

    }
}
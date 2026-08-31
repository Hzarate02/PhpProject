<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>
      Administración de Clientes
    </h1>

    <ol class="breadcrumb">

      <li>
        <a href="inicio">
          <i class="fa fa-dashboard"></i> Inicio
        </a>
      </li>

      <li>
        <a href="#">
          Administrar clientes
        </a>
      </li>

    </ol>

  </section>

  <!-- Main content -->

  <section class="content">

    <!-- Default box -->
    <div class="box">

      <!--=========================================
  CABEZA DE LA TABLA
  ==========================================-->

      <div class="box-header with-border">

        <button
          class="btn btn-primary"
          data-toggle="modal"
          data-target="#modalAgregarCliente">

          Agregar cliente

        </button>

      </div>


      <!--=========================================
  CUERPO DE LA TABLA
  ==========================================-->

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>

            <tr>

              <th style="width: 10px">#</th>

              <th>Nombre</th>

              <th>Documento ID</th>

              <th>Email</th>

              <th>Teléfono</th>

              <th>Dirección</th>

              <th>Fecha nacimiento</th>

              <th>Total compras</th>

              <th>Última compra</th>

              <th>Ingreso al sistema</th>

              <th>Acciones</th>

            </tr>

          </thead>


          <tbody>

            <tr>

              <td>1</td>

              <td>
                Juan Villegas
              </td>

              <td>
                8161123
              </td>

              <td>
                juan@hotmail.com
              </td>

              <td>
                555 57 67
              </td>

              <td>
                calle 27 # 40 - 36
              </td>

              <td>
                1982-15-11
              </td>

              <td>
                35
              </td>

              <td>
                2026-12-11 12:05:32
              </td>

              <td>
                2026-12-11 12:05:32
              </td>

              <td>

                <div class="btn-group">

                  <button
                    class="btn btn-warning">

                    <i class="fa fa-pencil"></i>

                  </button>

                  <button
                    class="btn btn-danger">

                    <i class="fa fa-times"></i>

                  </button>

                </div>

              </td>

            </tr>

          </tbody>

        </table>

      </div>

    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<!--=========================================
MODAL AGREGAR CLIENTE
==========================================-->

<div
  id="modalAgregarCliente"
  class="modal fade"
  role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">


  <!--=========================================
  FORMULARIO
  ==========================================-->

      <form
        role="form"
        method="post"
        enctype="multipart/form-data">


    <!--=========================================
    CABEZA DEL MODAL
    ==========================================-->

        <div
          class="modal-header"
          style="background:#3c8dbc; color:white">

          <button
            type="button"
            class="close"
            data-dismiss="modal">

            &times;

          </button>

          <h4 class="modal-title">
            Agregar cliente
          </h4>

        </div>


    <!--=========================================
    CUERPO DEL MODAL
    ==========================================-->

        <div class="modal-body">

          <div class="box-body">


        <!--=========================================
        ENTRADA PARA EL NOMBRE
        ==========================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">

                  <i class="fa fa-user"></i>

                </span>

                <input
                  type="text"
                  class="form-control input-lg"
                  name="nuevoCliente"
                  placeholder="Ingresar nombre"
                  required>

              </div>

            </div>


        <!--=========================================
        ENTRADA PARA EL DOCUMENTO ID
        ==========================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">

                  <i class="fa fa-id-card"></i>

                </span>

                <input
                  type="number"
                  min="0"
                  class="form-control input-lg"
                  name="nuevoDocumentoId"
                  placeholder="Ingresar documento"
                  required>

              </div>

            </div>


        <!--=========================================
        ENTRADA PARA EMAIL
        ==========================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">

                  <i class="fa fa-envelope"></i>

                </span>

                <input
                  type="email"
                  class="form-control input-lg"
                  name="nuevoEmail"
                  placeholder="Ingresar email"
                  required>

              </div>

            </div>


        <!--=========================================
        ENTRADA PARA TELÉFONO
        ==========================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">

                  <i class="fa fa-phone"></i>

                </span>

                <input
                  type="text"
                  class="form-control input-lg"
                  name="nuevoTelefono"
                  placeholder="Ingresar teléfono"
                  data-inputmask="'mask':'(999) 999-99999'"
                  data-mask
                  required>

              </div>

            </div>


        <!--=========================================
        ENTRADA PARA LA DIRECCIÓN
        ==========================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">

                  <i class="fa fa-map-marker"></i>

                </span>

                <input
                  type="text"
                  class="form-control input-lg"
                  name="nuevaDireccion"
                  placeholder="Ingresar dirección"
                  required>

              </div>

            </div>


        <!--=========================================
        ENTRADA PARA LA FECHA DE NACIMIENTO
        ==========================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">

                  <i class="fa fa-calendar"></i>

                </span>

                <input
                  type="text"
                  class="form-control input-lg"
                  name="nuevaFechaNacimiento"
                  placeholder="Ingresar fecha de nacimiento"
                  data-inputmask="'alias':'yyyy/mm/dd'"
                  data-mask
                  required>

              </div>

            </div>


          </div>
          <!-- /.box-body -->

        </div>
        <!-- /.modal-body -->

    <!--=========================================
    PIE DEL MODAL
    ==========================================-->

        <div class="modal-footer">

          <button
            type="button"
            class="btn btn-default pull-left"
            data-dismiss="modal">

            Salir

          </button>

          <button
            type="submit"
            class="btn btn-primary">

            Guardar Cliente

          </button>

        </div>

      </form>

    </div>

  </div>

</div>
<?php include_once 'sections/t_inicio.php';?>    
    <body>
        <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
               
                <!-- Main Sidebar MENU-->
                <?php include_once 'sections/menu.php';?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <?php include_once 'sections/header.php';?>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                        <div class="content-header">
                            <div class="header-section">
                                <div class="row">
                                    <!-- Main Title (hidden on small devices for the statistics to fit) -->
                                    <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                        <h1>Menu de <strong>Usuario</strong></h1>
                                    </div>
                                    <!-- END Main Title -->

                                    <!-- Top Stats -->
                                    <div class="col-md-8 col-lg-6">
                                        <div class="row text-center">
                                            <div class="col-xs-4 col-sm-3">
                                                <h2 class="animation-hatch">
                                                    <?php
                                                        $sql = "SELECT * FROM usuario WHERE priUsu =1";
                                                        $consulta = $conector->query($sql);
                                                        $total_user = $consulta->num_rows;
                                                    ?>
                                                    <strong><?php echo $total_user;?></strong><br>
                                                    <small><i class="fa fa-user-circle-o"></i> 
                                                    Usuarios</small>
                                                </h2>
                                            </div>
                                            
                                            <div class="col-xs-2 col-sm-8">
                                                <h2 class="animation-hatch">
                                                    <strong><?php echo date('d/m/Y'); ?></strong><br>
                                                    <small><i class="fa fa-calendar-o"></i> Fecha Actual</small>
                                                </h2>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- END Top Stats -->
                                </div>
                            </div>
                            <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                            
                        </div>
                        <!-- END Dashboard Header -->
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="block">
                                        <div class="block-title">
                                            <div class="block-options pull-right">
                                            <a href="#" class="btn btn-alt btn-sm btn-primary" 
                                                data-toggle="modal" data-target="#modal-InsertUsuario" 
                                                title="Nuevo Registro Usuario">
                                             <i  class="fa fa-plus"></i> Nuevo
                                             </a>
                                            </div>
                                            <h2><strong>Usuarios</strong> Registrados</h2>
                                        </div>
                                         <div class="">
                                            <div class="outer_div_usuarios"></div><!-- Datos ajax Final -->
                                        </div>
                                    </div>
                                </div> 
                        </div>
                        <div id="modal-InsertUsuario" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title text-center text-danger">Inserta Nuevo Usuario<h2>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form_Inser_user" class="form-horizontal form-bordered">
                                            <div class="form-group">                                                                                         
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="nom" class="form-control" placeholder="Nombre del Usuario">
                                                    <small class="control-label label-sm">Nombres</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="app" class="form-control" placeholder="Apellido Paterno">
                                                    <small class="control-label label-sm">Apellido Parterno</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="apm" class="form-control" placeholder="Apellido Materno">
                                                    <small class="control-label label-sm">Apellido Marterno</small>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <label class="radio-inline">
                                                        <input class="form-check-input" type="radio" name="sexo"  value="M">
                                                        Masculino
                                                    </label>   
                                                    <label class="radio-inline">
                                                        <input class="form-check-input" type="radio" name="sexo"  value="F">
                                                        Femenino
                                                    </label> 
                                                    <br><small class="control-label label-sm">Genero</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="doc" class="form-control" placeholder="46565745">
                                                    <small class="control-label label-sm">Nro. de Documento</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="cel" class="form-control" placeholder="9189057410">
                                                    <small class="control-label label-sm">Nro. de Celular</small>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <input type="email" name="ema" class="form-control" placeholder="usuario@gmail.com">
                                                    <small class="control-label label-sm">Correo</small>
                                                </div>
                                            </div>
                                            <div class="col-md-12" id="div_insert_user"></div>
                                            <div class="form-group form-actions">
                                                <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div id="modal-UpdateUsuario" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title text-center text-danger"><h2>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form_Upd_user" class="form-horizontal form-bordered">
                                            <div class="form-group">                                                                                         
                                                <div class="col-md-4 text-center">
                                                    <input type="hidden" name="id" id="id">
                                                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nombre del Usuario">
                                                    <small class="control-label label-sm">Nombres</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="app" class="form-control" id="app" placeholder="Apellido Paterno">
                                                    <small class="control-label label-sm">Apellido Parterno</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="apm" class="form-control" id="apm" placeholder="Apellido Materno">
                                                    <small class="control-label label-sm">Apellido Marterno</small>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <label class="radio-inline">
                                                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="M">
                                                        Masculino
                                                    </label>   
                                                    <label class="radio-inline">
                                                        <input class="form-check-input" type="radio" name="sexo" id="femenino" value="F">
                                                        Femenino
                                                    </label> 
                                                    <br><small class="control-label label-sm">Genero</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="doc" class="form-control" id="doc" placeholder="46565745">
                                                    <small class="control-label label-sm">Nro. de Documento</small>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <input type="text" name="cel" id="cel" class="form-control" placeholder="9189057410">
                                                    <small class="control-label label-sm">Nro. de Celular</small>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <input type="email" name="mail" id="mail" class="form-control" placeholder="miguel17@gmail.com">
                                                    <small class="control-label label-sm">Correo</small>
                                                </div>                                   
                                            </div>
                                            <div class="col-md-12" id="div_upd_user"></div>
                                            <div class="form-group form-actions">
                                                <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div id="modal-EstadoUsuario" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title text-center text-danger"><h2>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form_est_user" class="form-horizontal form-bordered">
                                            <div class="form-group"> 
                                                <input type="hidden" name="id" id="id" >
                                                <div class="col-md-12 text-center">
                                                    <label class="radio-inline">
                                                        <input class="form-check-input" type="radio" name="est" id="bloqueado" value="0">
                                                        Bloqueado
                                                    </label>   
                                                    <label class="radio-inline">
                                                        <input class="form-check-input" type="radio" name="est" id="activo" value="1">
                                                        Activo
                                                    </label> 
                                                    <br><small class="control-label label-sm">Estado de la Cuenta</small>
                                                </div>
                                            </div>
                                            <div class="col-md-12" id="div_est_user"></div>
                                            <div class="form-group form-actions">
                                                <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div id="modal-DeleteUsuario" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title text-center text-danger"><h2>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form_del_user" class="form-horizontal form-bordered">
                                            <div class="form-group">                                                                                         
                                                <div class="col-md-12 text-center">
                                                    <input type="hidden" name="id" id="id" >
                                                    <div class="alert alert-warning alert-dismissible text-center">
                                                         <h5><i class="fa fa-exclamation"></i> Comunicado!</h5>
                                                         Esta Acción borrara de manera permanente el registro. Si desea continuar
                                                         hacer CLICK en el boton de eliminar.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" id="div_del_user"></div>
                                            <div class="form-group form-actions">
                                                <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <?php include_once 'sections/footer.php';?>                           
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
        <?php include_once 'sections/script.php';?> 
        <script src="js/script.js?v=070823"></script> 
        <script>
        $(document).ready(function(){
            usuarios(1);
        });
        </script>      
<?php include_once 'sections/t_fin.php';?>
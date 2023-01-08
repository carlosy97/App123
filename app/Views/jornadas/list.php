
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Jornadas
        <small>Listado</small>
        </h1>
        
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>/Jornadas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Jornadas</a>                    
                        
                        
                
                    </div>
                   
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                              
                            </thead>
                            <tbody>
                            <tr>
                                    <th>Fecha</th>
                                    <th>Descripcion</th>
                                    <th>Categoria</th>
                                    
                                  
                                </tr>
                                
                                    
                                
                                        
                                        <?php
									$count = 0;
									foreach ($jornadas as $jornada) {
										echo '
											<tr>
											<th>'.++$count.'</th>
											<th>'.$jornada->Fecha.' </th>
											<th>'.$persona->Descripcion.'</th>
											<th>'.$persona->Categoria.'</th>
												
										</tr>
									';
									}
								?>
                                        
                                        <
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Citas
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
                        <a href="<?php echo base_url();?>/Citas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Citas</a>                    
                        
                        
                
                    </div>
                   
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    
                                    <th>Apellidos</th>
                                    <th> Sexo </th>
                                    <th> Fecha para la cita </th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($Citas)):?>
                                    <?php foreach($Citas as $Cita):?>
                                        <tr>
                                            <td><?php echo $Cita->Nombre;?></td>
                                            <td><?php echo $Cita->Apellidos;?></td>
                                            <td><?php echo $Cita->Sexo;?></td>
                                            <td><?php echo $Cita->FechaDeCita;?></td>
                                            <?php $dataCita = $Cita->Nombre."*".$Cita->Apellidos."*".$Cita->Sexo."*".$Cita->FechaDeCita."*";?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-Cita" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataCita;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url()?>/Citas/edit/<?php echo $Cita->idCitas ;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
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

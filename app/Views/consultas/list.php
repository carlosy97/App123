
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Consultas
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
                        <a href="<?php echo base_url();?>/consultas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar consultas</a>                    
                        
                        
                
                    </div>
                   
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de Consutla</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Pueblo</th>
                                    <th>Comunidad Linguisica</th>
                                    <th>Escolaridad</th>
                                    <th>Religion</th>
                                    <th>Profesion</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($consultas)):?>
                                    <?php foreach($consultas as $consulta):?>
                                        <tr>
                                            <td><?php echo $consulta->Nombre;?></td>
                                            <td><?php echo $consulta->Apellidos;?></td>
                                            <td><?php echo $consulta->FechaDeConsulta;?></td>
                                            <td><?php echo $consulta->Edad;?></td>
                                            <td><?php echo $consulta->Sexo;?></td>
                                            <td><?php echo $consulta->Pueblo;?></td>
                                            <td><?php echo $consulta->ComunidadLinguistica;?></td>
                                            <td><?php echo $consulta->Escolaridad;?></td>
                                            <td><?php echo $consulta->Religion;?></td>
                                            <td><?php echo $consulta->profesion;?></td>
                                            
                                            <?php $dataconsulta = $consulta->Nombre."*".$consulta->Apellidos."*".$consulta->FechaDeConsulta."*".$consulta->Edad."*".$consulta->Sexo."*".$consulta->Pueblo."*".$consulta->ComunidadLinguistica."*".$consulta->Escolaridad."*".$consulta->Religion."*".$consulta->profesion."*";?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-consulta" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataconsulta;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url()?>/consultas/edit/<?php echo $consulta->idConsultas ;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    
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


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
                
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Descripcion</th>
                                    <th>Categoria</th>
                                    
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($jornadas)):?>
                                    <?php foreach($jornadas as $jornada):?>
                                        <tr>
                                            <td><?php echo  $jornada->fecha;?></td>
                                            
                                            <td><?php echo $jornada->descripcion;?></td>
                                            
                                            <?php $datajornada = $jornada->fecha."*".$jornada->descripcion."*";?>
                                            
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

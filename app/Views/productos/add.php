

<div class="content-wrapper">
    
    <section class="content-header">
        <h1>
        Productos
        <small>Nuevo</small>
        </h1>
    </section>
    
    <section class="content">
       
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/productos/store" method="POST">
                            <div class="form-group <?php echo !empty(form_error('cantidad')) ? 'has-error':'';?>">
                                <label for="cantidad">Codigo:</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo set_value('cantidad');?>">
                                <?php echo form_error("cantidad","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error('cantidad')) ? 'has-error':'';?>">
                                <label for="cantidad">Nombre:</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo set_value('cantidad');?>">
                                <?php echo form_error("cantidad","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
       
    </section>
    
</div>

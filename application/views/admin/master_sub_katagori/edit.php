<div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Master Katagori</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url('admin/edit_sub_katagori')?>" method="post" role="form">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                           
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Katagori</label>
                        <div class="col-lg-10">
                            <select class="form-control select2" name="id_katagori" id="id_katagori">
                                <option value="<?php echo $id_katagori;?>"><?php echo $katagori;?></option>
                                <?php foreach ($katagori2 as $k) {?>
                                <option value="<?php echo $k->id;?>"><?php echo $k->nama_katagori;?></option>
                                <?php }?>
                            </select>                            
                        </div>
                    </div>

                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Sub Katagori</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="sub_katagori" value="<?php echo $sub_katagori;?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="submit">
                    <a href="#master_sub_katagori" class="btn btn-warning">Kembali</a>
                </div>
            </form>
    </div>
</div>

<script type="text/javascript">
    $(".select2").select2();
</script>
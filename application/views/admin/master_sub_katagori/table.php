<!-- add -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Tambah Sub Katagori</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/add_sub_katagori')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Katagori</label>
                        <div class="col-lg-10">
                            <select class="form-control select2" name="id_katagori">
                                <?php foreach ($katagori as $k) {?>
                                <option value="<?php echo $k->id;?>"><?php echo $k->nama_katagori;?></option>
                                <?php }?>
                            </select>                            
                        </div>
                    </div>

                   
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Sub Katagori</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="nama_sub" name="nama_sub">
                        </div>
                    </div>
                   
                       

                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="Tambah">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Hapus -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Anda Yakin Hapus Sub Katagori Ini?</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/delete_sub_katagori')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Sub Katagori</label>
                            <div class="col-lg-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" name="nama_sub" id="nama_sub" class="form-control" readonly>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                       
                        <input type="submit" name="submit" class="btn btn-danger" value="Hapus">
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal hapus -->
 <a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb">
     <i class="fa fa-plus"></i>
 </a>
 <br>

<br>

<br>
<!--Column rendering-->
    <div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Master Katagori</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
            <table id="data-table-example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Katagori</th>
                        <th>Nama Sub Katagori</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
               <tbody>
                    <?php $no = 1; foreach ($table as $row) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->katagori ?></td>
                            <td><?php echo $row->nama ?></td>
                           
                            <td>
                                <a href ="#v_edit_sub/<?php echo $row->id;?>" class="show-modal btn btn-info btn-sm">
                                  <i class="glyphicon glyphicon-pencil"></i> 
                                </a>

                                 <a href                 ="javascript:;"
                                   data-id              ="<?php echo $row->id ?>"
                                   data-nama_sub        = "<?php echo $row->nama ?>"
                                   data-toggle          ="modal"
                                   data-target          ="#delete-data"
                                   class="show-modal btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i> 
                                </a>

                            </td>
                        </tr>
                    <?php }?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    <?php $this->load->view($script_table);?>
<script>
    $(document).ready(function() {
    // modal delete data
          $('#delete-data').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget); // Tombol dimana modal di tampilkan
            var modal   = $(this);
            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_sub').attr("value",div.data('nama_sub'));          
           
        });
    });
     $(".select2").select2();
</script>



  
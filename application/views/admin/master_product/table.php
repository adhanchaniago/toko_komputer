<!-- Import -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Import Product</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/preview_import')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        
                   <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Katagori</label>
                        <div class="col-lg-10">
                            <select class="form-control select2" name="id_katagori" id="id_katagori" onchange="ajaxkota(this.value)">
                                <option value="">-Pilih Katagori-</option>
                                <?php foreach ($katagori as $k) {?>
                                <option value="<?php echo $k->id;?>"><?php echo $k->nama_katagori;?></option>
                                <?php }?>
                            </select>                            
                        </div>
                    </div>

                    <div class="form-group" id="sub" style="display: none">
                        <label class="col-lg-2 col-sm-2 control-label">Sub Katagori</label>
                        <div class="col-lg-10">
                            <select class="sub_katagori form-control" style="width: 100%;" name="sub_katagori" id="sub_katagori" onchange="open_file()">
                                <option value="">-Pilih Sub Katagori-</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="file_import" style="display: none;">
                        <label class="col-lg-2 col-sm-2 control-label">Upload File</label>
                            <div class="col-lg-10">
                                <input type="file" name="file">
                            </div>
                        
                    </div>
                       

                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="preview" class="btn btn-info" value="preview">
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
                <h4 class="modal-title">Anda Yakin Hapus Product Ini?</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/delete_product')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Product</label>
                            <div class="col-lg-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" name="nama_product" id="nama_product" class="form-control" readonly>
                                
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

<a href="#v_add_product" class="btn btn-info">
   <i class="fa fa-plus"></i> Tambah Product
</a>
<a href="javascript:;" class="add-modal btn btn-warning" data-toggle ="modal" data-target="#add-tb">
   <i class="glyphicon glyphicon-upload"></i> Import Product
</a>
<a href="<?php echo base_url('assets/axcel/import_product.xlsx');?>" class="add-modal btn btn-danger">
   <i class="fa fa-download"></i> Download Format Excel
</a>


<!--Column rendering-->
    <div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Master Product</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
            
            <!-- live preview -->
            
           
            <table id="data-table-example2" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Katagori</th>
                        <th>Nama Sub Katagori</th>
                        <th>Grouping</th>
                        <th>Nama Product</th>
                        <th>Spesifikasi</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Notes</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>

               <tbody>
                    <?php $no = 1; foreach ($table as $row) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->katagori ?></td>
                            <td><?php echo $row->sub_katagori ?></td>
                            <td><?php echo $row->grouping ?></td>
                            <td><?php echo $row->nama_product ?></td>
                            <td><?php echo $row->spesifikasi ?></td>
                            <td><?php echo 'Rp. '. number_format($row->harga,2);?></td>
                            <td><?php echo $row->deskripsi ?></td>
                            <td><?php echo $row->notes ?></td>

                           
                            <td>
                                <a href ="#v_edit_product/<?php echo $row->id;?>" class="show-modal btn btn-info btn-sm">
                                  <i class="glyphicon glyphicon-pencil"></i> 
                                </a>

                                <a href                ="javascript:;"
                                   data-id              ="<?php echo $row->id ?>"
                                   data-nama_product    ="<?php echo $row->nama_product ?>"
                                   data-toggle          ="modal"
                                   data-target          ="#delete-data"
                                   class="show-modal btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i> 
                                </a>
                              <?php if($row->deskripsi==''){?>
                               <a href ="#add_desc/<?php echo $row->id;?>" class="show-modal btn btn-info btn-sm">
                                  <i class="fa fa-plus"></i> 
                                </a>
                              <?php };?>

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
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_product').attr("value",div.data('nama_product'));
           
           
        });
    });

    $(".select2").select2();
     
</script>
<script type="text/javascript">
          var ajaxku=buatajax();
        function ajaxkota(id){
          var url="<?php echo base_url();?>admin/getsub/"+id+"/"+Math.random();
          ajaxku.onreadystatechange=stateChanged;
          ajaxku.open("GET",url,true);
          ajaxku.send(null);
        }


        function buatajax(){
          if (window.XMLHttpRequest){
            return new XMLHttpRequest();
          }
          if (window.ActiveXObject){
            return new ActiveXObject("Microsoft.XMLHTTP");
          }
          return null;
        }
        function stateChanged(){
          var data;
          if (ajaxku.readyState==4){
            data=ajaxku.responseText;
            if(data.length>=0){
              document.getElementById("sub_katagori").innerHTML = data
            }else{
              document.getElementById("sub_katagori").value = "<option selected>Pilih Sub Katagori</option>";
            }
            document.getElementById("sub").style.display='';
            
          }
        }

        function open_file(){
             document.getElementById("file_import").style.display='';
        }
</script>




  
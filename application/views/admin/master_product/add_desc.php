<div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Tambah Deskripsi Product</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url('admin/add_des_product')?>" method="post" enctype="multipart/form-data" role="form">
                <input type="hidden" name="id_product" value="<?php echo $id_product;?>">
                <div class="modal-body">
                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea name="desc" id="summernote" class="form-control"></textarea>
                        </div>                        
                    </div>
                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                            <div class="col-lg-10">
                               <img class="img-thumbnail" width="200" height="200" id="profile-pre" src="<?php echo base_url('/assets/img/df.jpg');?>" alt="your image" />
                               <input type="file" name="gambar" id="profile-id">
                        </div>                        
                    </div>
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="submit">
                    <a href="#master_product" class="btn btn-warning">Kembali</a>
                </div>
            </form>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function() 
          {
            $('#summernote').summernote({
               height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
            });
          });
</script>

<script>
    function readURL(input) { // live preview IMG
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-pre').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-id").change(function(){
        readURL(this);
    });
    
</script>
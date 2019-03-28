 <div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Master Katagori</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url('admin/edit_product')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="id_dsc" value="<?php echo $id_dsc;?>">
                        
                   <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Katagori</label>
                        <div class="col-lg-10">
                            <select class="form-control select2" name="id_katagori" id="id_katagori" onchange="ajaxkota(this.value)">
                                <option value="<?php echo $id_katagori;?>"><?php echo $id_sub_katagori;?></option>
                                <?php foreach ($katagori2 as $k) {?>
                                <option value="<?php echo $k->id;?>"><?php echo $k->nama_katagori;?></option>
                                <?php }?>
                            </select>                            
                        </div>
                    </div>

                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Sub Katagori</label>
                        <div class="col-lg-10">
                            <select class="sub_katagori form-control select2" style="width: 100%;" name="sub_katagori" id="sub_katagori">
                                <option value="<?php echo $katagori;?>"><?php echo $sub_katagori;?></option>
                            </select>
                        </div>
                    </div>

                   

                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Grouping</label>
                            <div class="col-lg-10">
                                <input type="text" name="grouping" value="<?php echo $grouping;?>" class="form-control">
                        </div>                        
                    </div>

                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Nama Product</label>
                            <div class="col-lg-10">
                                <input type="text" name="nama_product" value="<?php echo $nama_product;?>" class="form-control">
                        </div>                        
                    </div>

                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                            <div class="col-lg-10">
                                <input type="text" name="harga" class="form-control" value="<?php echo $harga;?>">
                        </div>                        
                    </div>

                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Spesifikasi</label>
                            <div class="col-lg-10">
                                <textarea name="spesifikasi" class="form-control"><?php echo $spesifikasi;?></textarea>
                        </div>                        
                    </div>

                    <div class="form-group" >
                        <label class="col-lg-2 col-sm-2 control-label">Notes</label>
                            <div class="col-lg-10">
                                <textarea name="notes" class="form-control"><?php echo $notes;?></textarea>
                        </div>                        
                    </div>

                    <?php if(!$desc=='') {?>
                        <div class="form-group" >
                            <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                                <div class="col-lg-10">
                                    <textarea name="desc" id="summernote" class="form-control"><?php echo $desc;?></textarea>
                            </div>                        
                        </div>

                    <?php };?>

                    <?php if(!$foto=='') {?>
                        <div class="form-group" >
                            <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                                <div class="col-lg-10">
                                   <img class="img-thumbnail" width="200" height="200" id="profile-pre" src="<?php echo base_url('/assets/img/'.$foto);?>" alt="your image" />
                                   <input type="file" name="gambar" id="profile-id">
                            </div>                        
                        </div>
                    <?php };?>
                    
                       

                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="submit">
                    <a href="#master_product" class="btn btn-warning">Kembali</a>
                </div>
            </form>
    </div>
</div>


<script type="text/javascript">
    $(".select2").select2();
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
            
            
          }
        }

</script>
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

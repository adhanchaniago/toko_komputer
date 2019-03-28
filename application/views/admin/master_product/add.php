 <div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Tambah Product</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url('admin/add_product')?>" method="post" enctype="multipart/form-data" role="form">
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
                            <select class="sub_katagori form-control select2" style="width: 100%;" name="sub_katagori" id="sub_katagori" onchange="open_text()">
                                <option value="">-Pilih Sub Katagori-</option>
                            </select>
                        </div>
                    </div>

                    <div id="open_text" style="display: none;">

                        <div class="form-group" >
                            <label class="col-lg-2 col-sm-2 control-label">Grouping</label>
                                <div class="col-lg-10">
                                    <input type="text" name="grouping" class="form-control">
                            </div>                        
                        </div>

                        <div class="form-group" >
                            <label class="col-lg-2 col-sm-2 control-label">Nama Product</label>
                                <div class="col-lg-10">
                                    <input type="text" name="nama_product" class="form-control">
                            </div>                        
                        </div>

                        <div class="form-group" >
                            <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                                <div class="col-lg-10">
                                    <input type="number" name="harga" class="form-control">
                            </div>                        
                        </div>

                        <div class="form-group" >
                            <label class="col-lg-2 col-sm-2 control-label">Spesifikasi</label>
                                <div class="col-lg-10">
                                    <textarea name="spesifikasi" class="form-control"></textarea>
                            </div>                        
                        </div>

                        <div class="form-group" >
                            <label class="col-lg-2 col-sm-2 control-label">Notes</label>
                                <div class="col-lg-10">
                                    <textarea name="notes" class="form-control"></textarea>
                            </div>                        
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
            document.getElementById("sub").style.display='';
            
          }
        }

        function open_text(){
             document.getElementById("open_text").style.display='';
        }
</script>


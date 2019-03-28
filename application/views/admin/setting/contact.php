<!-- ganti logo -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ganti Logo</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/ganti_logo')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Gambar</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                    </div>

                       

                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="ganti">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-bg" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ganti Bacground</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/ganti_bg')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Gambar</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                    </div>

                       

                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="ganti">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="form-custom-elements">
    <div class="row">
        <div class="col-lg-6">
            <!--Inputs-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Setting</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <form action="<?php echo base_url('admin/edit_contact');?>" method="post" class="lobi-form">
                        <fieldset>
                            
                            <div class="row">
                               
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-envelope"></span>
                                            <input type="email" placeholder="email" name="email" value="<?php echo $edit->email?>" />
                                        </label>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="control-label">No HP</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-phone"></span>
                                            <input type="text" placeholder="No telephone" name="phone" value="<?php echo $edit->phone?>"/>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Alamat</label>
                                        <label class="input">
                                           <span class="input-icon input-icon-prepend fa fa-map-marker"></span>
                                            <textarea rows="3" name="alamat"><?php echo $edit->alamat?></textarea>
                                        </label>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="submit" class="btn btn-info" value="Simpan Perubahan">
                                    </div>

                                   

                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- form 2 -->
        <div class="col-lg-6">
            <!--Inputs-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Sosial Media</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <form action="<?php echo base_url('admin/edit_sosmed');?>" method="post" class="lobi-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">

                                     <div class="form-group">
                                        <label class="control-label">Facebook</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-facebook"></span>
                                            <input type="text" placeholder="Facebook" name="facebook" value="<?php echo $edit->facebook?>"/>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">twitter</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-twitter"></span>
                                            <input type="text" placeholder="Twitter" name="twitter" value="<?php echo $edit->twitter?>"/>
                                        </label>
                                    </div>

                                   

                                  

                                    <div class="modal-footer">
                                        <input type="submit" name="submit" class="btn btn-info" value="Simpan Perubahan">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <!-- form seo -->
        <div class="col-lg-6">
            <!--Inputs-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>SEO</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <form action="<?php echo base_url('admin/edit_seo');?>" method="post" class="lobi-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">

                                     <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-search"></span>
                                            <input type="text" placeholder="Title Page" name="title" value="<?php echo $edit->title?>" />
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Deskripsi</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-search"></span>
                                            <input type="text" placeholder="Deskripsi" name="description" value="<?php echo $edit->deskripsi?>"/>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Keywords</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-search"></span>
                                            <input type="text" placeholder="Keywords" name="keywords" value="<?php echo $edit->keywords?>"/>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Tag</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-search"></span>
                                            <input type="text" placeholder="Tag" name="tag" value="<?php echo $edit->tag?>"/>
                                        </label>
                                    </div>

                                    <div class="modal-footer">
                                        <input type="submit" name="submit" class="btn btn-info" value="Simpan Perubahan">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!--Inputs-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Ganti Logo</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <form action="<?php echo base_url('admin/ganti_logo');?>" method="post" class="lobi-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label class="control-label">logo</label>
                                        <label class="input">
                                           <img src="<?php echo base_url('assets/img/'.$edit->logo);?>" style="width: 300px;" >
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        
                                        <label class="input">
                                            <a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb">Ganti Logo</a>
                                        </label>
                                    </div>


                                    <div class="modal-footer">
                                        <input type="submit" name="submit" class="btn btn-info" value="Simpan Perubahan">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

         <div class="col-lg-6">
            <!--Inputs-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Ganti Bacground</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <form action="<?php echo base_url('admin/ganti_logo');?>" method="post" class="lobi-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label class="control-label">logo</label>
                                        <label class="input">
                                           <img src="<?php echo base_url('assets/img/'.$edit->img_bg);?>" style="width: 300px;" >
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        
                                        <label class="input">
                                            <a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-bg">Ganti Bacground</a>
                                        </label>
                                    </div>


                                    <div class="modal-footer">
                                        <input type="submit" name="submit" class="btn btn-info" value="Simpan Perubahan">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

     
    </div>
</div>

<script>
    $(document).ready(function() {
        // Untuk sunting
       

        $('#edit-tb').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#img').attr("value",div.data('img'));
           
           
        });

          $('#add-tb').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal          = $(this)
           
        });
       

        
    });
</script>
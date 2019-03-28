           <!-- form logo -->
        <div class="col-lg-6">
            <!--Inputs-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Admin</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <form action="<?php echo base_url('admin/ganti_password');?>" method="post" class="lobi-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">

                                   

                                    <div class="form-group">
                                        <label class="control-label">username</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-user"></span>
                                            <input type="text" placeholder="username" name="username" value="<?php echo $edit->username?>"/>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">password</label>
                                        <label class="input">
                                            <span class="input-icon input-icon-prepend fa fa-lock"></span>
                                            <input type="text" placeholder="password" name="password" required />
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
<div class="panel panel-light" id="cara_order">
	<div class="panel-heading">
		<div class="panel-title">
			<h4>Cara Order</h4>
		</div>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="<?php echo base_url('admin/edit_cara_order')?>" method="post" role="form">
			<div class="modal-body">
				<div class="form-group" >
                    <label class="col-lg-2 col-sm-2 control-label">Deskripsi Cara order</label>
                        <div class="col-lg-10">
                            <textarea name="desc" id="summernote" class="form-control" rows="100"><?php echo $edit->cara_order;?></textarea>
                    </div>                        
                </div>
			</div>
			<div class="modal-footer">                   
                <input type="submit" name="submit" class="btn btn-info" value="Perbaharui">
            </div>
		</form>
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function() 
          {
            $('#summernote').summernote({
               height: 350,                 
                    minHeight: null,            
                    maxHeight: null,             
                    focus: false                 
            });
          });
</script>
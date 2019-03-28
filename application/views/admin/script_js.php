 <!-- script ajax add -->
        <script type="text/javascript">
        LobiAdmin.loadScript([
            '<?php echo base_url();?>assets/admin/js/plugin/datatables/jquery.dataTables.min.js'
        ], function(){
            LobiAdmin.loadScript([
                '<?php echo base_url();?>assets/admin/js/plugin/datatables/dataTables.bootstrap.min.js',
                '<?php echo base_url();?>assets/admin/js/plugin/datatables/dataTables.responsive.min.js',
                '<?php echo base_url();?>assets/admin/js/plugin/bootstrap-datepicker/bootstrap-datepicker.js'
            ], initPage);
        });
        
        function initPage(){
            $('#data-table-example1').DataTable();
            $('#data-table-example2').DataTable({
                "scrollY": 300,
                "scrollX": true,
              responsive: true
            });
            $('#data-table-example3').DataTable({
                "columnDefs": [
                    {
                     
                        "render": function ( data, type, row ) {
                            var val = data.replace(/[\$,]/g, '');
                            if (val > 100000){
                                return '<span class="text-success">'+data+'</span>';
                            }else{
                                return '<span class="text-danger">'+data+'</span>';
                            }
                        },
                        "targets": 5
                    },
                    { "visible": false,  "targets": [ 3 ] }
                ],
                responsive: true
            });
            var table = $('#data-table-example4').DataTable({
                responsive: true
            });
            // Apply the search
            $("#data-table-example4 thead th input[type=text]").on( 'keyup change', function () {
            
            table
                .column( $(this).closest('th').index()+':visible' )
                .search( this.value )
                .draw();
                
        });
            // Apply the search
            $("#data-table-example4 thead th select").on('change', function () {
            
                var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                );

            table
                .column( $(this).closest('th').index()+':visible' )
                .search( val ? '^'+val+'$' : '', true, false )
                .draw();
                
        } );
            $('.datepicker-demo').datepicker({
                format: 'yyyy/mm/dd'
            });
            
            $('.panel').lobiPanel({
                reload: false,
                editTitle: false
            });
        }
    </script>
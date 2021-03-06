<?php usort($tableGrid, "SiteHelpers::_sort"); ?>
    <div class="col-xs-6">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $pageTitle ;?></h3>
          
        </div>
        <div class="box-body">
          <div class="page-content-wrapper m-t">
            
            <div class="sbox animated fadeIn">
              <div class="sbox-content">
                <?php echo $this->session->flashdata('message');?>
                <div class="table-responsive">
                  <table class="table table-bordered display" id="gridv">
                    <thead>
                      <tr>
                        <?php foreach ($tableGrid as $k => $t) : ?>
                        <?php if($t['view'] =='1'): ?>
                        <th><?php echo $t['label'] ?></th>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <th><?php echo $this->lang->line('core.btn_action'); ?></th>
                      </tr>
                    </thead>
                    
                  </table>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
var table;
$(function () {
// $("#gridv").DataTable();
table = $('#gridv').DataTable({
"paging": true,
"lengthChange": true,
"searching": true,
"ordering": true,
"info": true,
"autoWidth": false,
"processing": true, //Feature control the processing indicator.
"serverSide": true, //Feature control DataTables' server-side processing mode.

// Load data for the table's content from an Ajax source
"ajax": {
"url": "<?php echo site_url('tselektor/grids')?>",
"type": "POST"
},

//Set column definition initialisation properties.
"columnDefs": [
{
"targets": [ -1 ], //last column
"orderable": false, //set not orderable
},
],
"order": [[ 1, "desc" ]]
});
});
</script>
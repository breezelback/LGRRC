<div class="table-responsive" style="font-family: ui monospace;">
  <table class="table table-bordered" id="table_news" width="100%" cellspacing="0" style="font-size: 15px;">
    <thead>
      <tr>
        <th>Filename</th>
        <th>Title</th>
        <th>Status</th> 
        <th>Date Uploaded</th>
        <th width="7%"><center>Action</center></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $key => $product): ?> 
       <tr>
        <td>
            <div id="td_filename<?php echo $product['id'];?>" data-data1="<?php echo $product['filename']; ?>">
            <?php echo $product['filename']; ?>
          </div> 
        </td>
        <td>
          <div id="td_title<?php echo $product['id'];?>" data-data2="<?php echo $product['title']; ?>">
            <?php echo $product['title']; ?>
          </div>
        </td>
        <td>
          <div id="td_status<?php echo $product['id'];?>" data-data3="<?php echo $product['status']; ?>">
            <?php echo $product['status']; ?>
          </div>
        </td>
        <td>
          <div id="td_dateuploaded<?php echo $product['id'];?>" data-data1="<?php echo $product['dateuploaded']; ?>">
            <?php echo $product['dateuploaded']; ?>
          </div>
        </td>
        <td>
          <center>
            <div class="cell-button-alignment">
              <div class="cell-button btn-group">
                <button type="button" id="td_btn_edit" data-id_edit="<?php echo $product['id'];?>" data-toggle= "modal" data-target="#modalUpdateProduct" class="btn btn-md btn-primary">
                  <span class="fas fa-edit"></span>
                </button>
                
                <button type="button" id="td_btn_delete" data-id_delete="<?php echo $product['id'];?>" class="btn btn-md btn-danger">
                  <span class="fa fa-trash"></span>
                </button>
              </div>
            </div>
          </center>
        </td>

      </tr>
    <?php endforeach ?>    
  </tbody>
</table>
</div>
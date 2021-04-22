<div class="table-responsive" style="font-family: ui monospace;">
  <table class="table table-bordered mt-3" id="table_members" width="100%" cellspacing="0" style="font-size: 15px;">
    <thead>
      <tr>
        <th>LOGO</th>
        <th>AGENCY NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT NUMBER</th>
        <th>WEBSITE</th> 
        <th width="7%"><center>Action</center></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $key => $user): ?> 
        <tr>
          <td>
            <center>
              <img id="td_image<?php echo $user['id'];?>" data-data0="<?php echo $user["image"];?>" src="<?php echo $user["image"];?>" style="height:50px;width:50px;" class="img-rounded"> 
            </center>
          </td>
          <td>
            <div id="td_msacName<?php echo $user['id'];?>" data-data1="<?php echo $user['agency_name']; ?>"><?php echo $user['agency_name']; ?></div>
          </td>
          <td>
            <div id="td_msacAddress<?php echo $user['id'];?>" data-data2="<?php echo $user['address']; ?>"><?php echo $user['address']; ?></div>    
          </td>
          <td>
            <div id="td_msacContactNumber<?php echo $user['id'];?>" data-data3="<?php echo $user['contact_number']; ?>"><?php echo $user['contact_number']; ?></div>  
          </td>
          <td>
            <div id="td_msacEmail<?php echo $user['id'];?>" data-data4="<?php echo $user['email']; ?>"><?php echo $user['email']; ?></div>    
          </td>
          <td>
            <center>
              <div class="cell-button-alignment">
                <div class="cell-button btn-group">
                  <button type="button" id="td_btn_edit" data-id_edit="<?php echo $user['id'];?>" data-toggle= "modal" data-target="#modalUpdateProduct" class="btn btn-md btn-primary" data-toggle="tooltip" title="Edit">
                    <span class="fas fa-edit"></span>
                  </button>
                  
                  <button type="button" id="td_btn_delete" data-id_delete="<?php echo $user['id'];?>" class="btn btn-md btn-danger" data-toggle="tooltip" title="Delete">
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
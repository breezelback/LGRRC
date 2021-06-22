<table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
  <thead>
    <tr>
      <th>PICTURE</th>
      <th>NAME</th>
      <th>POSITION</th> 
      <th>EMAIL</th> 
      <th>AREA OF EXPERTISE</th>
      <th>LICENSES/ACCREDITATION:</th>
      <th width="7%"><center>Action</center></th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($experts as $key => $expert): ?> 
    <tr>
      <td><?php echo '<center><img id="td_image'.$expert["id"].'" data-data0="../images/expert/'.$expert["imageName"].'" src="../images/expert/'.$expert["imageName"].'" style="height:50px;width:50px;" class="img-rounded"></center>' ?></td>
      <td><?php echo '<div id="td_name'.$expert["id"].'" data-data1="'.$expert["name"].'">'.$expert["name"].'</div>'; ?></td>
      <td><?php echo '<div id="td_address'.$expert["id"].'" data-data3="'.$expert["address"].'">'.$expert["address"].'</div>';?></td>
      <td><?php echo '<div id="td_email'.$expert["id"].'" data-data5="'.$expert["email"].'">'.$expert["email"].'</div>';?></td>
      <td><?php echo '<div id="td_expertise'.$expert["id"].'" data-data2="'.$expert["expertise"].'">'.$expert["expertise"].'</div>';?></td>
      <td><?php echo '<div id="td_contact'.$expert["id"].'" data-data4="'.$expert["contactNumber"].'">'.$expert["contactNumber"].'</div>';?></td>
      <td><?php echo '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button type="button" id="td_btn_edit" data-id_edit="'.$expert["id"].'" data-toggle= "modal" data-target="#modalUpdateExpert" class="btn btn-md btn-primary">
         <span class="fas fa-edit"></span></button>
         <button type="button" id="td_btn_delete" data-id_delete="'.$expert["id"].'" class="btn btn-md btn-danger">
         <span class="fa fa-trash"></span></button>
         </div>
        
        </div>
        </center>';?></td>
      </tr>
     <?php endforeach ?>
  </tbody>
</table>
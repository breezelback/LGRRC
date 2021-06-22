<?php foreach ($data as $key => $item): ?> 
	<tr>
		<td><?php echo '<center><img id="td_image'.$item["id"].'" data-data0="../images/main/'.$item["imageName"].'" src="../images/main/'.$item["imageName"].'" style="height:100px;width:100px;" class="img-rounded"></center>'; ?></td>

		<td><?php echo '<div id="td_name'.$item["id"].'" data-data1="'.$item["name"].'">'.$item["name"].'</div>'; ?></td>
		<td><?php echo '<div id="td_quotation'.$item["id"].'" data-data2="'.$item["quotation"].'">'.$item["quotation"].'</div>'; ?></td>
		<td><?php echo '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button type="button" id="td_btn_edit" data-id_edit="'.$item["id"].'" data-toggle= "modal" data-target="#modalUpdateProduct" class="btn btn-md btn-primary">
         <span class="fas fa-edit"></span></button>
         </div>
        
        </div>
        </center>'; ?></td>

	</tr>
<?php endforeach ?>
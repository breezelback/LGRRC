<?php foreach ($videos as $key => $video): 
	$phpdate = strtotime( $video['dateUploaded'] );
	$mysqldate = date( 'M d, Y', $phpdate );
	$updateVideo = date( 'Y-m-d', $phpdate );


	$updateTitle= str_replace("(hashtag)","#",$video["videoTitle"]);



	?> 
	<tr>
		<td><?php echo '<div id="td_video'.$video["id"].'" data-data0="'.$video["videoLink"].'"><div class="fb-video card-img-top" data-href="'.$video["videoLink"].'" data-width="220" data-show-text="false"><blockquote cite="'.$video["videoLink"].'" class="fb-xfbml-parse-ignore"><a href="'.$video["videoLink"].'">'.$video["videoTitle"].'</a><p></blockquote></div></div>'; ?></td>
		<td><?php echo '<div id="td_link'.$video["id"].'" data-data1="'.$video["videoLink"].'"><i><a href="'.$video["videoLink"].'" target="_blank">'.$video["videoLink"].'</a></i></div>'; ?></td>
		<td><?php echo '<div id="td_title'.$video["id"].'" data-data2="'.$updateTitle.'"><b>'.$updateTitle.'<b></div>'; ?></td>
		<td><?php echo '<div id="td_season'.$video["id"].'" data-data3="'.$video["videoSeason"].'"><b>'.$video["videoSeason"].'<b></div>'; ?></td>
		<td><?php echo '<div id="td_date'.$video["id"].'" data-data4="'.$updateVideo.'">'.$mysqldate.'</div>'; ?></td>
		<td><?php echo '<center>
		    <div class="cell-button-alignment">
		    <div class="cell-button btn-group">
		     <button style="width:60px;" type="button" id="td_btn_edit" data-id_edit="'.$video["id"].'" data-toggle= "modal" data-target="#modalUpdate" class="btn btn-sm btn-primary">
		     <span class="fa fa-edit"></span></button>
		     <button style="width:60px;" type="button" id="td_btn_delete" data-id_delete="'.$video["id"].'" class="btn btn-sm btn-danger">
		     <span class="fa fa-trash"></span></button>
		     </div>
		    
		    </div>
	    </center>';  ?>
	    </td>
	</tr>
<?php endforeach ?>
<?php 
	$sql = ' SELECT `expertise` FROM `tbl_expert` ';
	$exec = $conn->query($sql);
	$expertise1 = '';
	$x = 0;
	while ( $result = $exec->fetch_assoc() ) 
	{
		$expertise = $result['expertise'];

		$expertise = str_replace(', ', ',', $expertise);
		$expertise = str_replace(' ,', ',', $expertise);


		$expertise = rtrim($expertise, ' ');

		$expertise1 .= $expertise.',';

		$expertise = explode(',', $expertise1);
		$expertise = array_unique($expertise);
		asort($expertise);
	}
?>
<!-- <div style="border: 1px solid gray; height:100px; overflow-y: scroll;"> -->
	<div class="form-group">
		<select name="states" id="expertise_opt" class="form-control"  multiple="multiple" style="display: none;">
		<?php foreach ($expertise as $key => $category): ?>
			<?php if (!empty($category) AND $category != ''): ?>
				<option value="<?php echo $category; ?>"><?php echo $category; ?></option>
			<?php endif ?>
		<?php endforeach ?>
		</select>
	</div>
<!-- </div> -->
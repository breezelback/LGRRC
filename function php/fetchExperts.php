<?php
	include 'conn.php';
	$queryCondition = '';

	// if (isset($_GET['id'])) 
	if (isset($_GET['id']) || isset($_GET['nameHolder']) || isset($_GET['addressHolder'])) 
	{
		$id = $_GET['id'];
		$nameHolder = $_GET['nameHolder'];
		$addressHolder = $_GET['addressHolder'];


		if (($id != '') OR ($id == 'test') )
		{
			$queryCondition = ' WHERE (`expertise` LIKE "'.$id.'%" OR `expertise` LIKE "%'.$id.'%" OR `expertise` LIKE "'.$id.'")    ';
			if ($nameHolder != '') 
			{
				$queryCondition .= ' AND (`name` LIKE "'.$nameHolder.'%" OR `name` LIKE "%'.$nameHolder.'%" OR `name` LIKE "'.$nameHolder.'")    ';
			}
			if ($addressHolder != '') 
			{
				$queryCondition .= ' AND (`address` LIKE "'.$addressHolder.'%" OR `address` LIKE "%'.$addressHolder.'%" OR `address` LIKE "'.$addressHolder.'")    ';
			}
		}

		if ($nameHolder != '') 
		{
			$queryCondition = ' WHERE (`name` LIKE "'.$nameHolder.'%" OR `name` LIKE "%'.$nameHolder.'%" OR `name` LIKE "'.$nameHolder.'")    ';
			if ($id != '') 
			{
				$queryCondition .= ' AND (`expertise` LIKE "'.$id.'%" OR `expertise` LIKE "%'.$id.'%" OR `expertise` LIKE "'.$id.'")    ';
			}
			if ($addressHolder != '') 
			{
				$queryCondition .= ' AND (`address` LIKE "'.$addressHolder.'%" OR `address` LIKE "%'.$addressHolder.'%" OR `address` LIKE "'.$addressHolder.'")    ';
			}
		}

		if ($addressHolder != '') 
		{
			$queryCondition = ' WHERE (`address` LIKE "'.$addressHolder.'%" OR `address` LIKE "%'.$addressHolder.'%" OR `address` LIKE "'.$addressHolder.'")    ';
			if ($id != '') 
			{
				$queryCondition .= ' AND (`expertise` LIKE "'.$id.'%" OR `expertise` LIKE "%'.$id.'%" OR `expertise` LIKE "'.$id.'")    ';
			}
			if ($nameHolder != '') 
			{
				$queryCondition .= ' AND (`name` LIKE "'.$nameHolder.'%" OR `name` LIKE "%'.$nameHolder.'%" OR `name` LIKE "'.$nameHolder.'")    ';
			}
		}
			
	}




	$sqlMain = ' SELECT `id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded` FROM `tbl_expert` '.$queryCondition.' GROUP BY `name` ORDER BY `name` ASC ';
	$exec = $conn->query($sqlMain);

	if ($exec->num_rows > 0) 
	{
		while ( $result = $exec->fetch_assoc() ) 
		{
	
			 ?>

			<div class="col-md-4 asda" align="center">


				<div class="row tab-pane fade show" id="<?php echo $result['expertise']; ?>" role="tabpanel" aria-labelledby="<?php echo $result['expertise']; ?>-tab" style="border: 1px solid grey; border-radius: 5px; margin-right: 1px; height: 320px;">

					<div class="col-md-5" style="border-right: 2px solid grey; background-color: lightgray">
						<center><img class="m-2 expertImage" src="images/expert/<?php echo $result['imageName']; ?>" width="70"></center>
					</div>
					<div class="col-md-7" style="word-wrap: break-word;">
						<a href="directory-profile.php?id=<?php echo $result['id']; ?>" style="margin:1px; color: black;"><h4 style="border-bottom: 1px solid grey;"><?php echo $result['name']; ?></h4></a>
						<p style="font-size: 13px;"><b>Expertise</b>: <b style="color: black;"><?php echo $result['expertise']; ?></b></p>
						<p style="font-size: 13px;"><b>Position</b>: <b style="color: black;"><?php echo $result['address']; ?></b></p>
					</div>

				</div>
				<hr>

			</div>



	<?php } }




	 ?>
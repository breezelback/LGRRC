<?php
include 'conn.php';
$queryCondition = '';

$id = '';
$nameHolder = '';
$addressHolder = '';
$newExpertiseQry = '';


// if (isset($_GET['id'])) 
if (isset($_GET['id']) || isset($_GET['nameHolder']) || isset($_GET['addressHolder']) || isset($_GET['identifier'])) {
	$id = $_GET['id'];
	$nameHolder = $_GET['nameHolder'];
	$addressHolder = $_GET['addressHolder'];
	$identifier = $_GET['identifier'];
	$expertiseQry = '(';

	if ($identifier != 'undefined') {
		$identifier = explode(',', $identifier);

		for ($i = 0; $i < count($identifier); $i++) {
			$expertiseQry .= '`expertise` LIKE "%' . $identifier[$i] . '%" AND ';
		}
		$newExpertiseQry = rtrim($expertiseQry, " AND ");
		$newExpertiseQry = $newExpertiseQry . ')';

		if (($id != '') or ($id == 'test')) {
			$queryCondition = ' WHERE ' . $newExpertiseQry . ' ';
			if ($nameHolder != '') {
				$queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
			}
			if ($addressHolder != '') {
				$queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
			}
		}

		if ($nameHolder != '') {
			$queryCondition = ' WHERE (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
			if ($id != '') {
				$queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
			}
			if ($addressHolder != '') {
				$queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
			}
		}

		if ($addressHolder != '') {
			$queryCondition = ' WHERE (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
			if ($id != '') {
				$queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
			}
			if ($nameHolder != '') {
				$queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
			}
		}
	} //second if
	else {
		if (($id != '') or ($id == 'test')) {
			$queryCondition = ' WHERE (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
			if ($nameHolder != '') {
				$queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
			}
			if ($addressHolder != '') {
				$queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
			}
		}

		if ($nameHolder != '') {
			$queryCondition = ' WHERE (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
			if ($id != '') {
				$queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
			}
			if ($addressHolder != '') {
				$queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
			}
		}

		if ($addressHolder != '') {
			$queryCondition = ' WHERE (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
			if ($id != '') {
				$queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
			}
			if ($nameHolder != '') {
				$queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
			}
		}
	}
} //main if



$sqlMain = ' SELECT `id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded` FROM `tbl_expert` ' . $queryCondition . ' GROUP BY `name` ORDER BY `name` ASC ';

$exec = $conn->query($sqlMain);

if ($exec->num_rows > 0) {
	while ($result = $exec->fetch_assoc()) {
		$img = 'images/expert/'.$result['imageName'];
		$data[] = array(
			'imageName' => $result['imageName'],
		);

?>

		<div class="col-md-4 asda" align="center">
			<a href="directory-profile.php?id=<?php echo $result['id']; ?>" style="text-decoration: none; color:black;">
				<!-- <div class="card" style="width: 18rem; border: 1px solid gray;">
					  <img class="card-img-top"  alt="Card image cap" height="265">
					  <div class="card-body" style="background-color: #e8e6e6;">
					    <h5 class="card-title"></h5>
					    <p style="font-size: 12px;"></p><hr>
					    <div class="expertisePanel" style="height: 75px; overflow-y: scroll;">
					    	<p class="card-text"></p>
					    </div>
					  </div>
					</div> -->
				<div class="card">
					<div class="card-border-top">
					</div>
					<div class="img">
					<img src="<?= $img;?>" alt="Original Image" class="img-card">';
						
					</div>
					<span> <?php echo resultHighlight($nameHolder, $result['name']); ?></span>
					<p class="job"><?php echo resultHighlight($newExpertiseQry, $result['expertise']); ?></p>
					<p class="job"><?php echo resultHighlight($addressHolder, $result['address']); ?></p>

				</div>
			</a>

			<hr>

		</div>

<?php

}
echo json_encode($data);
}


function resultHighlight($keyword, $yourString)
{
	echo str_replace($keyword, '<span style="background-color:yellow; padding:3px; border-radius:3px;">' . $keyword . '</span>', $yourString);
}


function imageExists($image,$dir) {

    $i=1; $probeer=$image;

    while(file_exists($dir.$probeer)) {
        $punt=strrpos($image,".");
        if(substr($image,($punt-3),1)!==("[") && substr($image,($punt-1),1)!==("]")) {
            $probeer=substr($image,0,$punt)."[".$i."]".
            substr($image,($punt),strlen($image)-$punt);
        } else {
            $probeer=substr($image,0,($punt-3))."[".$i."]".
            substr($image,($punt),strlen($image)-$punt);
        }
        $i++;
    }
	echo $probeer;
    return $probeer;
}

?>
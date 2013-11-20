<?php
// NB: Data would usually be provided by a database, this array is for example only
$db_data = array(
	1 => array(
		'uid' => 1,
		'name' => 'Ahmet',
		'desc' => 'Is excellent',
		'interests' => array('H-Street','French Toast','Girls')
	),
	2 => array(
		'uid' => 2,
		'name' => 'Rick',
		'desc' => 'Never gonna give you up...',
		'interests' => array('Category 3','Category 5')
	)
);
?>

<?php if ($_POST['user'])	: ?>
<?php
	// Take variable passed to this script from the AJAX call,
	// and collect the relevant info from the $db_data array
	$user_id = $_POST['user'];

	// Always good to try and catch errors
	if (isset($db_data[$user_id]))	{
		$data = $db_data[$user_id];
	} else {
		echo 'Sorry, no user data matched your request - please try again';
		die;	
	}
?>
<!-- HTML block that will be returned to our AJAX function call -->
<div class="person_info" id="person_<?=$data['uid']?>">
	<p><strong><?=$data['name']?></strong></p>
	<p><?=$data['desc']?></p>
	<ul>
	<?php foreach ($data['interests'] as $category) : ?>
		<li><a href="#"><?=$category?></a></li>
	<?php endforeach; ?>
	</ul>
</div>
<?php else : ?>
<p>You are not accessing this script directly, are you?</p>
<?php endif; ?>
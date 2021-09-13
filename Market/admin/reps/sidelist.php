

  

  <?php include('../../db.php') ?>
  

	
	<?php


	$records = mysqli_query($db, "SELECT *
FROM reports");


while ($data = mysqli_fetch_array($records))
{
?>

<form id="eachrecord" name="records" class="pure-form pure-form-aligned" method="post" action="deleterecords.php" >



<div>
<label  class="lb1" > එළවළු නම :</label>
<?php echo $data['name']; ?>
</div>

<div>
<label  class="lb1" > බර :</label>
<?php echo $data['weight']; ?>
</div>

<div>
<label  class="lb1" > මිල :</label>
<?php echo $data['ppk']; ?>
</div>

<div class="sideimg">
<?php echo '
					
						<img src="data:image/png;base64,' . base64_encode($data['images']) . '"/>'; ?>
</div>





<button id="btns" name="chat" value="<?php echo $data['id']; ?>" class="pure-button">Chat</button>

<a id="btns2" class="pure-button" href="edit.php?id=<?php echo $data['id']; ?>">Flag</a>



</form>



<?php
}
?>
	






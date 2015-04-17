<?php 
include ('functions.php');
$conn = new DB_con();
$table = "message";
		if(isset($_GET['delete_id']))
		{
			$id=$_GET['delete_id'];
			$res=$conn->delete($table,$id);
			if($res)
			{
				?>
				<script>
				alert('Record Deleted ...')
						window.location='view.php'
						</script>
				<?php
			}
			else
			{
				?>
				<script>
				alert('Record cannot be Deleted !!!')
						window.location='view.php'
						</script>
				<?php
			}
		}
	
	?>

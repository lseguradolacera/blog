<?php 
include ('DAL.php');
$connection = new DAL();
$table = "message";
		if(isset($_GET['delete_id']))
		{
			$id=$_GET['delete_id'];
			$res=$connection->DeleteMessage($table,$id);
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

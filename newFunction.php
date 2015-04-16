	
		<?php
			
			class Connect_DB {
				
				private $conn;
				
				public function connect_db(){
						$conn = mysql_connect("localhost","root","") or die(mysql_error());
						mysql_select_db("blog", $conn) or die(mysql_error());

				}
				
			}
			
			class View extends Connect_DB {
				
				public function view_data(){
					
						$result = mysqli_query($conn, "SELECT * FROM message order by number");

				}
				
			}
			
			class Add extends Connect_DB {
				
				public function add_data(){
						mysql_query("ALTER TABLE message AUTO_INCREMENT = 0");
						$name = $_POST['name'];
						$msg = $_POST['msg'];
					
						$rec = "INSERT INTO message VALUES('','$name','$msg')";
						
						if(mysql_query($rec)){
						header('Refresh: 0; url=index.php');
						}
						else{
						die("Data failed to insert in the database");
						}
				}
				
			}
			
			
		?>

document.getElementById('createButton').addEventListener('click',here);
	 	function here(){
	 		<?php 
	 		$_SESSION['CartCounter']=0;
	 		$User=$_SESSION['DefaultUserId'];
	        if (isset($_SESSION['UserId'])==true) {
	            $User=$_SESSION['UserId'];
	    	}
	    	$sql_query="DELETE FROM Cart WHERE UserId='$User'";
            
		    if (!mysqli_query($DBconnection, $sql_query)) {
		            echo "<div>SQL Error<br>".mysqli_error($DBconnection)."</div><br>";
		    }
	 		?>
	 	}
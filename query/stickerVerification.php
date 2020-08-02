<?php 

if(isset($_POST['verify'])){

	$stickerID = addslashes($_POST["verify"]);

			$verified = "UPDATE sticker SET status='VERIFIED' WHERE stickerID=".$stickerID;
			mysqli_query($conn,$verified);
			if (mysqli_query($conn, $verified)) {
				echo '<script language="javascript">';
				echo 'alert("Verified"); location.href="viewStickerApplication.php"';
				echo '</script>';
			} else {
				echo "Error: " . $verified . "
				" . mysqli_error($conn);
			}
			mysqli_close($conn);
			
		
	}

?>
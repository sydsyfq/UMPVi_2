<?php

if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $vehicleBrandModel = $_POST['vehicleBrandModel'];
        $vehicleRegNum = $_POST['vehicleRegNum'];
        $vehicleColor = $_POST['vehicleColor'];
        $vehicleType = $_POST['vehicleType'];

        $query = "UPDATE sticker SET vehicleBrandModel='$vehicleBrandModel', vehicleRegNum='$vehicleRegNum', vehicleColor='$vehicleColor', vehicleType='$vehicleType' WHERE stickerID='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }

?>
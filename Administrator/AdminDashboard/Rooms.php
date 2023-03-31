<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");
?>



<div class="container">

<div class="row">
    <div class="col-4">
        <h3>Add Rooms</h3>
        <form  method="POST" action="">
            <div class="form-group">
                
                <input type="text" name="room" placeholder="Room" class="form-control" required/>
                
            </div>
            <div>
            <input type="text" name="category" placeholder="Category" class="form-control" required/>
                
            </div>
            <div>
            <input type="text" name="availability" placeholder="Availability" class="form-control" required/>
                
            </div>

            <div>
                <button type="submit" name="save_btn">Save</button>
            </div>
            <div>
                <button type="submit" name="cancel_btn">Cancel</button>
            </div>
        </form>
    </div>
    <div class="col-8">
        <h3>Rooms Details</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Room</th>
      <th scope="col">Catagory</th>
      <th scope="col">Availability</th>
    </tr>
    
  </thead>
  <tbody>
    <?php
    require_once("../../connect.php");
    $FetchData=mysqli_Query($connection, "SELECT *FROM rooms") or die(mysqli_error($connection));
    $IsAnyRoomAdded = mysqli_num_rows($FetchData);
    if($IsAnyRoomAdded>0)
    {
        // $sno = 1;
        while($row = mysqli_fetch_assoc($FetchData))
        {
        ?>
        <tr>
       
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['Room']; ?></td>
        <td><?php echo $row['Category']; ?></td>
        <td><?php echo $row['Availability']; ?></td>
        
        <!-- <td>
       <a href="#" class="btn btn-sm btn-warning"> Edit </a>
        <a href="#" class="btn btn-sm btn-danger"> Delete </a> 
       </td> -->
       </tr>
        <?php
         }
    }
        else{
        ?>
        <tr>
        <td colspan="7"> No any election is added yet. </td>
        </tr>
        <?php
        }
         ?>
           
  </tbody>
</table>
</div>
</div>
</div>


<?php
 require_once("../../connect.php");

if(isset($_POST['save_btn']))
{

$Room=$_POST['room'];
$Category=$_POST['category'];
$Availability=$_POST['availability'];


mysqli_query($connection, "INSERT INTO `rooms`(Room,Category,Availability) VALUES ('".$Room."','".$Category."','".$Availability."')" ) 
or die(mysqli_error($connection));


?>
<div class="container">
    <p><?echo "Successfully added"?></p>

</div>
 <?php   
}
?>


<?php
require_once("../include/Footer.php");
?>
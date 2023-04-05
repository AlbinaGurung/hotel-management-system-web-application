<?php
require_once("include/Header.php");
require_once("include/Navigation.php");
?>
<form action="" method="post">
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
          <div class="card">
               <div class="card-header">
                  <h1>Check in</h1>
               </div>
                 <div class="card-body">
                   <div class="row">
                      <div class="col-md-6">
                        <label for="id">ID</label>
                        <input type="number" placeholder="ID" name="id">
                      </div>
                      <div class="col-md-6">
                        <label for="fullname">Full Name</label>
                        <input type="text" placeholder="Full Name" name="fullname">
                      </div>
                   
                      <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email" name="email">
                       </div>
                  
                      <div class="col-md-6">
                        <label for="phone">Phone no</label>
                        <input type="number" placeholder="Phone no" name="phone">
                      </div>
                
                       <div class="col-md-6">
                        <label for="noofindividuals">No of Individuals</label>
                        <input type="nuumber" placeholder="No of Individuals" name="noofindividuals">
                       </div>
                
                       <div class="col-md-6">
                        <label for="roomno">Room No</label>
                        <input type="text" placeholder="Room no" name="roomno">
                        </div>
                   </div>
                </div>
            
            <div class="card-footer">
             <button type="submit" >Check in</button>
            </div>
          </div>
        </div>
        <div class="col-8">
         <h1>Checked in</h1>
        </div>
    </div>
</div>
</form>


<?php
if()
?>


<?php
require_once("include/Footer.php");
?>
<?php
require_once("include/header.php");
require_once("include/sideSection.php");
?>

<div class="card">
    <div class="card-body">
    <form action="" method="POST" >
       <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"></span>
        </div>
        <input type="text" name="name" placeholder="Your Name" required/>
       </div> 

       <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"></span>
        </div>
        <input type="text" name="name" placeholder="Email" required/>
       </div>

       <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"></span>
        </div>
        <input type="text" name="name" placeholder="Phone No" required/>
       </div>

       <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"></span>
        </div>
        <input type="text" name="name" placeholder="No of individuals" required/>
       </div>
    </form>
    </div>
</div>
<?php
require_once("include/footer.php");
?>
    <?php


include('login_u.php'); 

if(isset($_SESSION['login_user2'])){

header("location: foodlist.php"); 
}

include('includes/header.php'); 
?>
<script>
  document.getElementById('email').value = "";
  document.getElementById('password').value = "";
</script>
    <!-- <div class="jumbotron">
     <h1>Hi Guest,<br> Welcome to <span class="edit"> Le Cafe' </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div> -->
    <style>
    .login-heading{
        background-color: #dc042a;
    }
    .panel-body{
      border:1px solid #dc042a;
    }
</style>
    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-outer-body">
        <div class="panel-heading login-heading"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <div class="input-group">
              <input class="form-control w-100" id="email" type="text" name="email" placeholder="Username" required="" autofocus="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span> -->
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value="Login">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label><br>
       <label style="margin-left: 5px;"><a href="customersignup.php">Create a new account.</a></label>

        </form>
        </div>     
      </div>      
    </div>
    </div>


    </body>
</html>
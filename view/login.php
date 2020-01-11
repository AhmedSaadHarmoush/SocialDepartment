<?php if(!empty($error)){
        echo' <div class="alert alert-warning">'.$error.' </div> ';
        }
        if(!empty($success)){
            echo '<div class="alert alert-success">'.$success.'</div>';
        }
        
?>
<div class="all-posts">
    <div class="post-container floatLeft">
<form class="form login " method="POST" action="?page=login ">
    <h3>Login</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">User name</label>
    <input type="text" name="login_user" class="form-control input block" id="login_user-login" placeholder="Enter username">
  </div>
  <div class="form-group"> 
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="login_pass"class="form-control input block" id="login_pass" placeholder="Password">
  </div>
 
  <div class="checkbox">
      <label for="remember">
      <input type="checkbox" class="checkbox" id="remember" name="remember" value="re"> Remember Me!
    </label>
  </div>
    
  <button type="submit" name="login" class="btn btn-default">Sign In</button>
</form>
        </div>
                
                <div style="clear:both"></div>
    </div>
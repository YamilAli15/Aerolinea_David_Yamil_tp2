<?php 
function LoginMenu(){
?>
<div id="planes">
<legend class="text-center">Iniciar sesión</legend>
  <div class="form-floating mb-3" action="Addflight" method="POST">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
  <button type="submit" class="btn btn-primary col-12">Submit</button>
</div>
<?php
}
?>
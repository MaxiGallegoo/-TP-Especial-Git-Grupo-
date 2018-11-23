{include file="header.tpl"}
{include file="NavBarLogin.tpl"}
    <h3>{$Titulo}</h3>
    <form method="post" action="verificarLogin">
      <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="input" class="form-control" name="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="passwordId" placeholder="Contraseña">
            </div>
      <div class="">
        {$Message}
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>


{include file="footer.tpl"}

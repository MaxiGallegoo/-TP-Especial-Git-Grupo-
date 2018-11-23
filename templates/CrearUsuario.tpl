{include file="header.tpl"}
{include file="NavBar.tpl"}
<div class="container">
  <form method="post" action="guardarUsuario">
    <h2>Crear Cuenta</h2>
        <div class="">
          {$Message}
        </div>
      <div class="form-group row">
        <label for="inputUsuario" class="col-sm-2 col-form-label">Ingresar Usuario</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="usuarioId" placeholder="Usuario">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputContraseña" class="col-sm-2 col-form-label">Ingresar Contraseña</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="passwordId" placeholder="Password">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Tipo de Cliente</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                 Cliente Frecuente
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                 Nuevo Cliente
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <div class="col-sm-2">Terminos y condiciones</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Acepta los terminos y condiciones de la pagina
            </label>
          </div>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">Crear Cuenta</button>
    </form>
</div>
{include file="footer.tpl"}

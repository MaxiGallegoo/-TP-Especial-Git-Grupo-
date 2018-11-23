{include file="header.tpl"}
{include file="NavBarLogeadoAdmin.tpl"}

<div class="contenedor Cosas" value="{$producto["id_producto"]}">

  <h4>Imagenes</h4>
  <ul class="list-group">
    {foreach from=$Imagenes item=imagen}
    <li class="list-group-item">{$imagen['contenido']}<a href="borrarImagen/{$imagen['id_imagen']}"><button  type="button"  class="btn btn-warning">Borrar</button></a></li>
    {/foreach}
  </ul>
</div>

<div class="contenedor ingresar">
  <form>
    <h3>Ingresar Comentario</h3>
    <div class="form-group">
      <label for="comentario">Ingresar Comentario</label>
      <textarea type="text" class="form-control" id="comentario" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="valoracion">Valoracion de Producto</label>
      <select class="form-control" id="valoracion">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <input type="submit" name="subirConmentario" value="Enviar Comentario"/>
    </div>
  </form>
  <h3>Ingresar Imagen</h3>
  <li class="list-group-item">
    <form>
      <div class="form-group">
        <form method="post" action="agregarImagen">
        <label for="idImagen">Seleccionar Imagen</label>
        <input type="file" class="form-control-file" name="idImagen"  multiple/>
          <input type="text" name="id_producto" value=id_producto/>
        <input type="submit" name="agregarImagen" value="Subir Imagen"/>
      </div>
    </form>
  </li>

  <div>
    <form method="post" action="agregarURL">
      <label for="basic-url">Ingresar URL de la Imagen</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
          </div>
          <input type="text" class="form-control" name="URL" aria-describedby="basic-addon3">
          <input type="text" name="id_producto" value=id_producto/>
        </div>
        <input type="submit" name="agregarURL" value="agregarURL"/>
    </form>
  </div>
</div>
{include file="footer.tpl"}

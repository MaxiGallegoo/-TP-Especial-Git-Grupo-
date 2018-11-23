{include file="header.tpl"}
{include file="NavBarLogeadoAdmin.tpl"}
    <h1>{$Titulo}</h1>
    <div class="container">
      <h2>Editar Producto</h2>
        <form method="post" action="{$home}/guardarEditarProducto">
          <input type="hidden" class="form-control" id="idEditado" name="idEditado" value="{$producto["id_producto"]}">
          <div class="form-group">
            <label for="NombreNuevo"></label>
            <input type="text" class="form-control" name="NombreNuevo" placeholder="Nombre" value="{$producto["Nombre"]}">
          </div>
          <div class="form-group">
            <label for="PrecioNuevo"></label>
            <input type="number" class="form-control"  name="PrecioNuevo" placeholder="Precio" value="{$producto["Precio"]}">
          </div>
          <div class="form-group">
            <label for="UnidadesNuevo"></label>
            <input type="number" class="form-control"  name="UnidadesNuevo" placeholder="Unidades" value="{$producto["Unidades"]}">
          </div>
          <div class="form-group">
            <select class="custom-select" name="nombreCategoriaNuevo">
              <option selected value="todos">Categorias</option>
                {foreach from=$Categorias item=categoria}
                  <option value="{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</option>
                {/foreach}
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Editar Producto</button>
        </form>

    </div>

{include file="footer.tpl"}

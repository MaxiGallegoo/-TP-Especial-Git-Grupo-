{include file="header.tpl"}
{include file="NavBarLogeadoAdmin.tpl"}
<div class="medio">
  <h1>{$Titulo}</h1>
  <div class="container">
    <h4>Categorias</h4>
    <ul class="list-group">
      {foreach from=$Categorias item=categoria}
      <li class="list-group-item">{$categoria['nombre_categoria']}<a href="editar/{$categoria['id_categoria']}"><button  type="button"  class="btn btn-warning">Editar</button></a><button type="button" data-toggle="modal" data-target="#exampleModal"  class="btn btn-danger">Borrar</button></li>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Seguro que desea eliminar la categoria</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Al eliminar esta categoria se borraran todos los productos relacionados con dicha categoria
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <a href="borrar/{$categoria['id_categoria']}"><button type="button" class="btn btn-danger">Eliminar</button></a>
            </div>
          </div>
        </div>
      </div>
      {/foreach}
    </ul>

    <h4>Productos Disponibles</h4>
    <ul class="list-group">
      {foreach from=$Productos item=producto}
      <li class="list-group-item"> Producto: {$producto['Nombre']} - Valor: $ {$producto['Precio']} - Cantidad: {$producto['Unidades']} - Tipo: {$producto['nombre_categoria']}<a href="editarProducto/{$producto['id_producto']}"> <button  type="button"  class="btn btn-warning">Editar</button></a> <a href="borrarProducto/{$producto['id_producto']}"><button type="button" class="btn btn-danger">Borrar</button></a></li>
      <a href="vermasAdmin/{$producto['id_producto']}"><button type="button" class="btn btn-light">Ver Mas</button></a>
      {/foreach}
    </ul>
  </div>
  <div class="container filtro">
    <form method="post" action="FiltrarProductos">
      <h5>Filtrar</h5>
      <div class="form-group">
        <select class="custom-select" name="nombreCategoria">
          <option selected value="todos">Categorias</option>
          {foreach from=$Categorias item=categoria}
          <option value="{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</option>
          {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Filtrar Productos</button>
    </form>
  </div>

  <div class="container">
    <h4>Nueva Categoria</h4>
    <form method="post" action="agregar">
      <div class="form-group">
        <label for="nombreCategoria">NombreCategoria</label>
        <input type="text" class="form-control" name="nombreCategoria">
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
  </div>
  <div class="container">
    <h4>Ingresar Producto</h4>
    <form method="post" action="agregarProducto">
      <div class="form-group">
        <label for="NombreProducto">NombreProducto</label>
        <input type="text" class="form-control" name="NombreProducto">
      </div>
      <div class="form-group">
        <label for="Precio">Precio</label>
        <input type="number" class="form-control" name="Precio">
      </div>
      <div class="form-group">
        <label for="Unidades">Unidades</label>
        <input type="number" class="form-control" name="Unidades">
      </div>
      <div class="form-group">
        <select class="custom-select" name="nombreCategoria">
          <option selected value="todas">Categorias</option>
          {foreach from=$Categorias item=categoria}
          <option value="{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</option>
          {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Crear producto</button>
    </form>
  </div>
</div>

<div class="container">
  <h4>Usuarios</h4>
  <ul class="list-group">
      {foreach from=$Usuarios item=usuario}
      <li class="list-group-item">Nombre Usuario: {$usuario['nombre_usuario']} TipoUsuario: {$usuario['tipo_usuario']}<a href="editarUsuario/{$usuario['id_usuario']}/{$usuario['tipo_usuario']}"><button  type="button" class="btn btn-warning">Editar</button></a><a href="borrarUsuario/{$usuario['id_usuario']}"><button type="button" class="btn btn-danger">Borrar</button></a> </li>
      {/foreach}
  </ul>
</div>

{include file="footer.tpl"}

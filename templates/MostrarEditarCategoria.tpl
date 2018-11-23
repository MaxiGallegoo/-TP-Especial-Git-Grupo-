{include file="header.tpl"}
{include file="NavBarLogeadoAdmin.tpl"}
    <h1>{$Titulo}</h1>
    <div class="container">
      <h2>Editar Categoria</h2>
        <form method="post" action="{$home}/guardarEditar">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Categorias["id_categoria"]}">
          <div class="form-group">
            <label for="NombreCategoria">Nombre</label>
            <input type="text" class="form-control" name="NombreCategoria" value="{$Categorias["nombre_categoria"]}">
          </div>
          <button type="submit" class="btn btn-primary">Editar Categoria</button>
        </form>
    </div>
{include file="footer.tpl"}

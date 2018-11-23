  {include file="header.tpl"}
  {include file="NavBar.tpl"}
  <div class="medio">
    <h1>{$Titulo}</h1>
      <div class="container">
        <h4>Categorias</h4>
        <ul class="list-group">
            {foreach from=$Categorias item=categoria}
              <li class="list-group-item">{$categoria['nombre_categoria']}</li>
            {/foreach}
        </ul>
        <h4>Productos Disponibles</h4>
        <ul class="list-group">
            {foreach from=$Productos item=producto}
              <li class="list-group-item">Producto: {$producto['Nombre']} - Valor: $ {$producto['Precio']} - Cantidad: {$producto['Unidades']} - Tipo: {$producto['nombre_categoria']}</li>
            {/foreach}
        </ul>
      </div>

  {include file="footer.tpl"}

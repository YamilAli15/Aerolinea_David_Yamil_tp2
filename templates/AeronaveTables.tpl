{include 'NavigationBar.tpl'}

<div class="container col-12">
    <table class="table table-success table-striped mt-2 text-center">
    <thead>
     <tr>
     <th scope="col">Aeronave🛬</th>
       <th scope="col">Precio</th>
       <th scope="col">Fecha🕓</th>
       <th scope="col">Destino🗺️</th>
       <th scope="col">más datos sobre el vuelo📖</th>
     </tr>
    </thead>
    <tbody>

    {if $cantidad == 0}
      <tr>
        <td colspan=5>No hay tareas para mostrar</td>
        <tr>
    
    {/if}

    {foreach $Aeronave as $a}
      <tr>
      <td>{$a->Aeronave}</td>
      <td>{$a->Precio}</td>
      <td>{$a->Fecha}</td>
      <td>{$a->Destino}</td>
      <td> <a href='Verdatos' class='btn btn-primary'>Ver📖</a></td>
      <tr>
    {/foreach}

    {include 'htmlEnd.tpl'}
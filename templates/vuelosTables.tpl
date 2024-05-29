{include 'NavigationBar.tpl'}



<div class="container col-12">
    <table class="table table-success table-striped mt-2 text-center">
    <thead>
     <tr>
     <th scope="col">Destino</th>
     <th scope="col">Pilotos</th>
   
     </tr>
    </thead>
    <tbody>

    {if $cantidad == 0}
      <tr>
        <td colspan=5>No hay tareas para mostrar</td>
        <tr>
    
    {/if}

    {foreach $vuelos as $v}
      <tr>
      <td>{$v->Destino}</td>
      <td>{$v->Pilotos}</td>
      <tr>
    {/foreach}


  
    

    {include 'htmlEnd.tpl'}

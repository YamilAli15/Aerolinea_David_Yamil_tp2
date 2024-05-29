

{include 'formAddTask.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
    <tr>
      <th scope="col">Destino</th>
       <th scope="col">Pilotos</th>
       <th scope="col">más datos sobre el vuelo</th>
    </tr>
</thead>

<tbody>

{if $cantidad == 0}
    <tr>
        <td colspan=5>No hay tareas para mostrar</td>
    </tr> 
{/if}

{foreach $vuelos as $a}
    <tr>
    <td>{$a->Destino}</td>
    <td>{$a->Pilotos}</td>
    <td>{$a->id_aerolinea}</td>
    <td>{$estado}</td>
        <td>
         <a href='Ver/{$tarea->id}' class='btn btn-primary'>Ver</a>              
        <a href='Eliminar/{$tarea->id}' class='btn btn-danger'>Eliminar</a>
        </td>

    </tr>
{/foreach}


{include 'htmlEnd.tpl'}
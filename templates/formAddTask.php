<?php
function showFormAddTask(){
    ?> 
    <form class="col-3 m-auto formAddTask" action="newflight" method="POST">
    
      <legend class="text-center">Tabla de vuelos</legend>
      <div class="mb-3">
        <label class="form-label">nombre de la Aeronave</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Destino</label>
        <input type="text" name="Destino" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <label class="form-label">Escala</label>
        <input type="text" name="Escala" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="text" name="Precio" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
       <label for="fecha">Fecha del vuelo:</label>
       <input type="datetime-local" name="fecha">
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
<?php  
}
?>
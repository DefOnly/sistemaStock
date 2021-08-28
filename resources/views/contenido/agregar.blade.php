@extends('principal')

@section('agregar')
<link href="assets/css/table.css" rel="stylesheet" type="text/css" />
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" >
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>

//importamos configuraciones de toastr
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>

<script type='text/javascript' src='assets/css/valida.js'></script>

<div class="form-style-5">
          <form onsubmit="return validaCampos()">
                  <fieldset>
                  <legend><span class="number">1</span>Detalles del Producto</legend>
                  <input type="text" name="code" placeholder="Código">

                  <input type="email" name="name" placeholder="Nombre">

                  <input type="number" name="quantity" placeholder="Cantidad">

                  <input type="number" name="price" placeholder="Precio ($)">

                  <label for="job">Categoría</label>
                  <select id="job" name="category">
                    <option selected>Seleccione Categoría</option>
                    <option value="reading">Reading</option>
                    <option value="boxing">Boxing</option>
                    <option value="debate">Debate</option>
                    <option value="gaming">Gaming</option>
                    <option value="snooker">Snooker</option>
                    <option value="other_indoor">Other</option>
                  </select>    

                  <label for="job1">Sucursal</label>
                  <select id="job1" name="select">
                    <option selected>Seleccione Sucursal</option>
                    <option value="reading">Reading</option>
                    <option value="boxing">Boxing</option>
                    <option value="debate">Debate</option>
                    <option value="gaming">Gaming</option>
                    <option value="snooker">Snooker</option>
                    <option value="other_indoor">Other</option>
                  </select>    
                  </fieldset>

                  <fieldset>
                  <legend><span class="number">2</span>Información Adicional</legend>
                  <textarea name="description" placeholder="Descripción"></textarea>
                  </fieldset>
                  <input type="submit" value="Registrar" />
          </form>
  </div>
@endsection

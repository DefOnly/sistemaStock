@extends('principal')
@section('contenido')
<link href="assets/css/table.css" rel="stylesheet" type="text/css" />
<!-- TABLA PRODUCTOS -->
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Código</th>
      <th>Producto</th>
      <th>Categoría</th>
      <th>Sucursal</th>
      <th>Descripción</th>
      <th>Stock</th>
      <th>Precio</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>1</strong></td>
      <td>1</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The spgdssdhshdshdshsdhds</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>
            <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>
    <tr>
      <td><strong>2</strong></td>
      <td>2</td>
      <td>The ea</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>
    <tr>
      <td><strong>3</strong></td>
      <td>50</td>
      <td>The spe</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>
    <tr>
      <td><strong>4</strong></td>
      <td>'linear'</td>
      <td>The easi</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>                   
    <tr>
      <td><strong>5</strong></td>
      <td>'auto'</td>
      <td>The wi</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>     
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>
    <tr>
      <td><strong>6</strong></td>
      <td>true</td>
      <td>Set to </td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>
    <tr>
      <td><strong>7</strong></td>
      <td>false</td>
      <td>Set to</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
  </td>
    </tr>
    <tr>
      <td><strong>8</strong></td>
      <td> $.noop</td>
      <td>The callback</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>     
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>
    <tr>
      <td><strong>9</strong></td>
      <td>$.noop</td>
      <td>The callback</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>The sp</td>
      <td>Stock</td>
      <td>Opciones</td>
      <td>  <a href="{{ route('editar') }}"><img src="assets/images/editar.png" alt="" height="20"></a>     
        <a href=""><img src="assets/images/boton-x.png" alt="" height="20"></a>
      </td>
    </tr>
  </tbody>
</table>


@endsection

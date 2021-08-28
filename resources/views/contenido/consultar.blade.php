@extends('principal')

@section('consultar')

    <div class="col-md-6 mb-3">
        <div class="input-field col s12">
          <label class="mr-sm-2" for="inlineFormCustomSelect">Consultar productos por:</label>
          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Código</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Nombre</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio3">Sucursal</label>
          </div>
      </div>
        <div class="invalid-feedback">
          Debe indicar alguna opción!
        </div>
      </div>

      <button class="btn btn-primary" type="submit">Consultar</button>

  @endsection
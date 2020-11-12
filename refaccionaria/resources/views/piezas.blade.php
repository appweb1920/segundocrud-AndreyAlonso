<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1dfd1c28fd.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>
<body class="bg-dark">
<h1 class="text-center text-white bg-info p-3 mb-5">Piezas</h1>

<div class="container">

    <div class="row">
        <!-- Formulario de captura Piezas -->
        <div class="col col-lg-5 col-md-12 col-sm-12">
            <div class="card" style="width: 25rem;">
                <div class="card-body card-style bg-dark text-white">
                    <h5 class="card-title text-white">Pieza</h5><hr>
                    <form action="/store" method="POST">
                        <div class="form-grop">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Nombre</label>
                                <div class="col-sm-6">
                                    @csrf
                                    <input type="text" class="form-control form-control-sm bg-dark text-white" name="nombre"  required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Descripción</label>
                                <div class="col-sm-6">
                                    @csrf
                                    <input type="area" class="form-control form-control-sm bg-dark text-white" name="descripcion"  required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Número de piezas</label>
                                <div class="col-sm-6">
                                    @csrf
                                    <input type="number" min="0" class="form-control form-control-sm bg-dark text-white" name="n_piezas"  required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Costo de pieza</label>
                                <div class="col-sm-6">
                                    @csrf
                                    <input type="number" min="0" class="form-control form-control-sm bg-dark text-white" name="c_pieza"  required/>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-outline-danger btn-sm" type="reset">Cancelar</button>
                                <input type="hidden" name="nombreBoton" />
                                <input type="hidden" name="id" class="id" value='2' />
                                <button
                                    class="btn btn-primary  btn-sm ml-2" type="submit" value="Agregar" id="aceptar">Agregar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="col col-lg-5 col-md-12 col-sm-12">


            <table class="table table-sm table-bordered table-dark text-center">
                <thead class="bg-danger">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">costo</th>
                    <th scope="col">_creación_</th>
                    <th scope="col">actualización</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @if(!is_null($piezas))
                    @foreach($piezas as $p)
                        <tr>
                            <td hidden>{{$p->id}}</td>
                            <td>{{$p->nombre}}</td>
                            <td>{{$p->descripcion}}</td>
                            <td>{{$p->numero_piezas}}</td>
                            <td>{{$p->costo_pieza}}</td>
                            <td>{{date('Y-m-d',strtotime($p->created_at))}}</td>
                            <td>{{date('Y-m-d',strtotime($p->updated_at))}}</td>
                            <td><a href="/edit/{{$p->id}}"><i class="fas fa-edit text-warning"></i></a></td>
                            <td><a href="/destroy/{{$p->id}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                        </tr>
                    @endforeach
                @endif
                <tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>

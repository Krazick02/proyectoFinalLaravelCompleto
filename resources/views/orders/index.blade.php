@extends('plantilla')


@section('title','Index Ordenes')

@section('content')

<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-body">

                    <h4 class="card-title">Ordenes</h4>
                    <a href="{{ route('orders.create') }}" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                            Añadir nueva orden</a>
                    <p class="card-title-desc"></p>

                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr>
                                    
                                    <th data-priority="1">Folio</th>
                                    <th data-priority="2">Total</th>
                                    <th data-priority="3">Estado de la Orden</th>
                                    <th data-priority="4">Pago</th>
                                    <th data-priority="5">Tipo de Pago</th>
                                    <th data-priority="5">Opciones</th>
                                    
                                </thead>
                                <tbody>
                                
                                <tr>
                                    
                                    <td>#123243</td>
                                    <td>$23434</td>
                                    <td>Pendiente de pago</td>
                                    <td>Sí</td>
                                    <td>Efectivo</td>
                                    <td>
                                        <button class="btn btn-info">Ver</button>                                        
                                        <button class="btn btn-warning">Editar</button>                                        
                                        <button class="btn btn-danger">Eliminar</button>                                        
                                    </td>
                                        
                                </tr>
                                <tr>
                                    
                                    <td>#123243</td>
                                    <td>$23434</td>
                                    <td>Pendiente de pago</td>
                                    <td>Sí</td>
                                    <td>Efectivo</td>
                                    <td>
                                        <button class="btn btn-info">Ver</button>                                        
                                        <button class="btn btn-warning">Editar</button>                                        
                                        <button class="btn btn-danger">Eliminar</button>                                        
                                    </td>
                                        
                                </tr>
                                <tr>
                                    
                                    <td>#123243</td>
                                    <td>$23434</td>
                                    <td>Pendiente de pago</td>
                                    <td>Sí</td>
                                    <td>Efectivo</td>
                                    <td>
                                        <button class="btn btn-info">Ver</button>                                        
                                        <button class="btn btn-warning">Editar</button>                                        
                                        <button class="btn btn-danger">Eliminar</button>                                        
                                    </td>
                                        
                                </tr>

                                
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- container-fluid -->

@endsection
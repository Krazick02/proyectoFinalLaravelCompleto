@extends('plantilla')

@section('title','Crear categorías')

@section('content')

    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Crear categorías</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div data-repeater-list="outer-group" class="outer">
                                <div data-repeater-item class="outer">
                                    <div class="form-group row mb-4">
                                        <label for="taskname" class="col-form-label col-lg-2">Nombre</label>
                                        <div class="col-lg-10">
                                            <input id="taskname" name="taskname" type="text" class=" inner form-control" placeholder="Ingresar nombre">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="taskname" class="col-form-label col-lg-2">Descripción</label>
                                        <div class="col-lg-10">
                                            <input id="taskdescripcion" name="taskdescripcion" type="text" class="inner form-control" placeholder="Ingresar descripción">
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </form>
                        <div class="row justify-content-end">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary">Crear Categoría</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>


@endsection

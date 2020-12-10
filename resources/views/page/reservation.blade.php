@extends('layouts.app')

@section('content')

    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Reservation</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section">
        <div class="gtco-container">
            <form method="post" action="reservationcont/valide" id="deal">
                <div class="form-group">

                    <input  type="text" class="form-control"  name="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label>Contact email</label>
                    <?php
//                    $carId =  Request::post('id');

                    ?>
                    <input  type= "email" class="form-control"  name="email" value={{ Auth::user()->email }}>
                </div>
                <div class="form-group">
                    <label>Number of your driving licence</label>
                    <input   type= "text" class="form-control"  name="licence" required>
                </div>
                <div class="form-group">
                    <label>Start day of renting</label>
                    <input   type= "date" class="form-control"  name="startTime" required>
                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <input   type= "number" class="form-control"  name="duration" required>
                </div>
                <div class="form-group">
                    <input  type="hidden" class="form-control"  name="userId" value="{{ Auth::user()->id }}">
                </div>

                <div class="form-group">
                    <label>Type of vehicule</label>
                    <input type="text" class="form-control"  name="type" value="{{$cars->model}}">
                </div>
                <div class="form-group">
                    <label>Capacidad</label>
                    <input type="text" class="form-control"  name="capacity" value="{{$cars->capacity}}">
                </div>

            </form>
        </div>
    </div>
@endsection

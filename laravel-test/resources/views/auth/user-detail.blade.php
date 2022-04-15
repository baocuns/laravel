@extends('dashboard')
@section('content')

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header text-center">Detail</h3>
                    <div class="card-body">
                        <div class="row detail">
                            <div class="col-md-4">
                                <img src="https://tophinhanh.com/wp-content/uploads/2022/01/anh-anime-nam-buon.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-light">Name: </li>

                                    <li class="list-group-item list-group-item-primary">E - mail: </li>
                                    <li class="list-group-item list-group-item-secondary">Password: </li>
                                    <li class="list-group-item list-group-item-success">Class: </li>
                                    <li class="list-group-item list-group-item-danger">Student ID: </li>
                                    <li class="list-group-item list-group-item-warning">Phone number: </li>
                                    <li class="list-group-item list-group-item-info">Address: </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
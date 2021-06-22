@extends('layouts.authadminlayout')
@section('content')

 <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Admin Login</h6>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    
                    <div class="form-group">
                       <div class="row">
                        <div class="col-lg-3">
                            <label for="select2Single">Email</label>

                        </div>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                       <div class="row">
                        <div class="col-lg-3">
                            <label for="select2Single">Password</label>

                        </div>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>


@endsection


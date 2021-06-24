@extends('layouts.adminlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Active Prdoucts</h6>

                    @if (session('message'))
                        {{ session('message') }}
                    @endif

                    {{-- <a class="btn btn-primary" href="{{ route('admin.addtutionsview') }}">Add Tutions</a> --}}



                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Title</th>
                                <th>size</th>
                                <th>Price</th>
                                <th>Display</th>
                                <th>GPS Cellelur Option</th>
                                <th>Blood Oxygen Measurer</th>
                                <th>Ecg Measurer</th>
                                <th>Heart Rate Measurer</th>
                                <th>Family Setup</th>
                                <th>Water Resistance</th>
                                <th>Image</th>
                                <th>Delete Products</th>

                            </tr>
                        </thead>
                        <tbody>



                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->dispay }}</td>
                                    <td>{{ $product->gps_cellular  }}</td>
                                    <td>{{ $product->blood_oxigen_measurer }}</td>
                                    <td>{{ $product->ecg_measurer }}</td>
                                    <td>{{ $product->heart_rate_measurer }}</td>
                                    <td>{{ $product->family_setup}}</td>
                                    <td>{{ $product->water_resistance  }}</td>
                                    <td><img style="width: 70px; height: 50px;" src="{{asset($product->image)}}"></td>
                                    
                                    <td>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            
                                            @method('delete')
                                            
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
@endsection
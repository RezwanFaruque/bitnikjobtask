@extends('layouts.adminlayout')
@section('content')
    
    <div class="col-lg-12">
    <!-- Select2 -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Create Products</h6>
        </div>
        <div class="card-body">

            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Title</label>

                        </div>
                        <div class="col-lg-9">
                            <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" type="text">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Price</label>

                        </div>
                        <div class="col-lg-9">
                            <input class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Price" type="text">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Size</label>

                        </div>
                        <div class="col-lg-9">
                            <input class="form-control @error('size') is-invalid @enderror" name="size" placeholder="Size" type="text">
                            @error('size')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                    <div class="form-group">
                        <div class="row">
                        <div class="col-lg-3">
                            <label>Images</label>

                        </div>
                        <div class="col-lg-9">
                            <input type="file" name="image" class="form-control">

                         </div>
                                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Display</label>

                            </div>
                        <div class="col-lg-9">
                            <input class="form-control @error('display') is-invalid @enderror" name="display" placeholder="Display" type="text">
                            @error('display')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>
                        
                     
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-3">
                            GPS Cellular
                        </div>
                        <div class="col-lg-9">
                            <select required class="form-control" name="gps_cellelur">
                                <option value="gps + cellular gps">GPS + Cellular GPS</option>
                                <option value="gps">GPS</option>

                            </select>
                        </div>
                        
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Ecg Measurer</legend>
                        <div class="col-lg-9">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="ecg_measurer" id="exampleRadios3" value="ECG app3" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="ecg_measurer" id="exampleRadios4" value="null">
                              <label class="form-check-label" for="exampleRadios2">
                                No
                              </label>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Heart Rate Measurer</legend>
                        <div class="col-lg-9">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="heart_rate_measurer" id="exampleRadios5" value="High and low heart rate notifications Irregular heart rhythm notification4" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="heart_rate_measurer" id="exampleRadios6" value="null">
                              <label class="form-check-label" for="exampleRadios2">
                                No
                              </label>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Blood Oxigen App2</legend>
                        <div class="col-lg-9">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="blood_oxigen_measurer" id="exampleRadios5" value="blood oxigen app2" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="blood_oxigen_measurer" id="exampleRadios6" value="null">
                              <label class="form-check-label" for="exampleRadios2">
                                No
                              </label>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Support Family Setup</legend>
                        <div class="col-lg-9">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="family_setup" id="exampleRadios7" value="Supports Family Setup5 (GPS + Cellular models)" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="family_setup" id="exampleRadios8" value="null">
                              <label class="form-check-label" for="exampleRadios2">
                                No
                              </label>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Water Resistance</legend>
                        <div class="col-lg-9">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="water_resistance" id="exampleRadios9" value="Water resistant 50 meters6" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="water_resistance" id="exampleRadios10" value="null">
                              <label class="form-check-label" for="exampleRadios2">
                                No
                              </label>
                            </div>
                        </div>
                      </div>
                    </div>
    
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9">
                    <button class="btn btn-primary" type="submit">Save Tution</button>
                </div>
            </div>

        </form>


    </div>
</div>
@endsection
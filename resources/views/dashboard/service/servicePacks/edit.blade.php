@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group dynamic-element" style="display:none; ">
                            <div class="row">
                                <div class="col-md-4">
                                    <select id="rol" name="service_id[]" class="form-control" style="color: black; font-size: 14px">
                                        <option value="">+ New Service</option>
                                        @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>    
                                        @endforeach
                                    </select>
                                </div>
                            <!-- End of fields-->
                                <div class="col-md-1">
                                    <button class="delete btn-sm btn-danger">x</button>
                                </div>
                            </div>
                        </div>
                        <!-- END OF HIDDEN ELEMENT -->
                      
                        <div class="form-container">
                            <form class="form-horizontal" action="/dashboard/servicePackages/{{ $pack_id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="pack_name">Package Name</label>
                                    <input type="text" class="form-control" id="pack_name" name="pack_name" value="{{ $packs[0]->pack_name }}" style="color: black; font-size: 14px">
                                </div>
                                <div class="form-group">
                                    <label>Car Category</label>
                                    <select class="js-example-basic-single p-2" style="width:100%" name="carCategory_id">
                                    @foreach ($carCategories as $c)
                                    @if (old('category_id', $packs[0]->carCategory_id) == $c->id)
                                    <option value="{{ $c->id }}" selected>{{ $c->category_name }}</option>
                                    @else
                                    <option value="{{ $c->id }}">{{ $c->category_name }}</option>    
                                    @endif
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{ $packs[0]->price }}" style="color: black; font-size: 14px">
                                </div>
                                <div class="form-group">
                                    <label for="time">Estimated Time</label>
                                    <input type="number" class="form-control" id="time" name="time" value="{{ $packs[0]->time }}" style="color: black; font-size: 14px">
                                </div>
                                <div class="form-group">
                                    <label for="pack_id">Pack id</label>
                                    <input type="text" class="form-control" id="pack_id" name="pack_id" value="{{ $pack_id }}" >
                                </div>
                                <div class="form-group">
                                    <label for="count_service">count_service</label>
                                    <input type="text" class="form-control" id="count_service" name="count_service" value="{{ count($serviceItems) }}" >
                                </div>
                                <fieldset>
                                <!-- Form Name -->
                                    <legend class="title">Add Service</legend>
                                    <div class="dynamic-stuff">
                                        <!-- Dynamic element will be cloned here -->
                                        <!-- You can call clone function once if you want it to show it a first element-->
                                        @if ($serviceItems)
                                        @foreach ($serviceItems as $si)                                               
                                        <div class="form-group">
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <select id="rol" name="service_id[]" class="form-control" style="color: black; font-size: 14px">
                                                        @foreach ($services as $service)
                                                        @if (old('service_id', $si->service->id) == $service->id)
                                                        <option value="{{ $service->id }}" selected>{{ $service->service_name }}</option>
                                                        @else
                                                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>    
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- End of fields-->
                                                <div class="col-md-1">
                                                    <button class="delete btn-sm btn-danger">x</button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="add-one btn-sm btn-success">+ Add Service</button>
                                            </div>
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                              <ul>
                                              @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                              @endforeach
                                              </ul>
                                            </div>
                                            @endif                          
                                            <div class="col-md-5"></div>
                                                <div class="col-md-6">
                                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Update!</button>
                                                </div>
                                            </div>
                                        </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>

    $('.add-one').load(function(){
        $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
        attach_delete();
        event.preventDefault();
    });

    $('.add-one').click(function(){
    $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
        attach_delete();
        event.preventDefault();
    });

    //Attach functionality to delete buttons
    function attach_delete(){
        $('.delete').off();
        $('.delete').click(function(){
            console.log("click");
        $(this).closest('.form-group').remove();
        });
    }
    event.preventDefault();
    </script>
@endsection
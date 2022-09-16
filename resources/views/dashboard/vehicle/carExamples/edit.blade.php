@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="/dashboard/carexamples/{{ $car[0]->id }}" method="post">
                    @method('put')
                    @csrf
                  <div class="form-group">
                    <label for="car_name">Car Example</label>
                    <input type="text" class="form-control" id="car_name" placeholder="Car Example" name="car_name" value="{{ $car[0]->car_name }}">
                  </div>
                  <div class="form-group">
                    <label>Car Category</label>
                    <select class="js-example-basic-single p-2" style="width:100%" name="carCategory_id">
                    @foreach ($carCategories as $c)
                    @if (old('category_id', $car[0]->carCategory_id) == $c->id)
                    <option value="{{ $c->id }}" selected>{{ $c->category_name }}</option>
                    @else
                    <option value="{{ $c->id }}">{{ $c->category_name }}</option>    
                    @endif
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="id">id</label>
                    <input type="text" class="form-control" id="id" placeholder="Car Example" name="id" value="{{ $car[0]->id }}">
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
                  <button type="submit" class="btn btn-primary mr-2">Update Example</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="/dashboard/carexamples" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="car_name">Car Example</label>
                    <input type="text" class="form-control" id="car_name" placeholder="Car Example" name="car_name">
                  </div>
                  <div class="form-group">
                    <label>Car Category</label>
                    <select class="js-example-basic-single p-2" style="width:100%" name="carCategory_id">
                    @foreach ($carCategories as $c)
                      <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                    @endforeach
                    </select>
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
                  <button type="submit" class="btn btn-primary mr-2">New Example</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
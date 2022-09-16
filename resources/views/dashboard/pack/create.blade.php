@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="/dashboard/packs" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="pack_name">Package Name</label>
                    <input type="text" class="form-control" id="pack_name" placeholder="package name" name="pack_name">
                  </div>
                  <div class="form-group">
                    <label for="carCategory_id">Car Category</label>
                    <input type="text" class="form-control" id="carCategory_id" value="{{ $carCategory[0]->category_name }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="int" class="form-control" id="price" placeholder="price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="time">Estimated Time</label>
                    <input type="text" class="form-control" id="time" placeholder="estimated time" name="time">
                  </div>
                  <div class="form-group">
                    <label for="carCategory_id">Car Category</label>
                    <input type="text" class="form-control" id="carCategory_id" value="{{ $carCategory[0]->id }}" name="carCategory_id" readonly>
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
                  <button type="submit" class="btn btn-primary mr-2">New Package</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
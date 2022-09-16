@extends('dashboard.layouts.main')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="/dashboard/services/{{ $service->id }}" method="post">
                    @method('put')
                    @csrf
                  <div class="form-group">
                    <label for="service_name">Service Name</label>
                    <input type="text" class="form-control" id="service_name" placeholder="service name" name="service_name" value="{{ $service->service_name }}">
                  </div>
                  <div class="form-group">
                    <label for="service_desc">Description</label>
                    <input type="text" class="form-control" id="service_desc" placeholder="description " name="service_desc" value="{{ $service->service_desc }}">
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
                  <button type="submit" class="btn btn-primary mr-2">Update service</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="/dashboard/carrequirements/{{ $carReqs[0]->id }}" method="post">
                    @method('put')
                    @csrf
                  <div class="form-group">
                    <label for="requirement">Requirement</label>
                    <input type="text" class="form-control" id="requirement" placeholder="Requirement" name="requirement" value="{{ $carReqs[0]->requirement }}">
                  </div>
                  <div class="form-group">
                    <label>Car Category</label>
                    <select class="js-example-basic-single p-2" style="width:100%" name="carCategory_id">
                    @foreach ($carCategories as $c)
                    @if (old('category_id', $carReqs[0]->carCategory_id) == $c->id)
                    <option value="{{ $c->id }}" selected>{{ $c->category_name }}</option>
                    @else
                    <option value="{{ $c->id }}">{{ $c->category_name }}</option>    
                    @endif
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="id">Requirement</label>
                    <input type="text" class="form-control" id="id" placeholder="id" name="id" value="{{ $carReqs[0]->id }}">
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
                  <button type="submit" class="btn btn-primary mr-2">Update Requirement</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
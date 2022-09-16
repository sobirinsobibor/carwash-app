@extends('dashboard.layouts.main')

@section('content') 

 <!-- Quick Action Toolbar Starts-->
 <div class="row quick-action-toolbar">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-header d-block d-md-flex">
        <h5 class="mb-0">Car Categories</h5>
        <p class="ml-auto mb-0">Select Your Car categories to View Service Packages <i class="icon-bulb"></i></p>
      </div>
      <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
        @foreach ($carCategories as $carCategory)    
        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
          <a href="/dashboard/servicePackages?carcategory={{ $carCategory->id }}" style="text-decoration: none">
            <button type="button" class="btn btn-warning p-3"> <i class="icon-user mr-2"></i> {{ $carCategory->category_name }}</button>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!-- Quick Action Toolbar Ends-->

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-sm-flex align-items-center mb-3">
        <h4 class="card-title mb-sm-0">
          Car Category :
          @if (request('carcategory'))
          {{ $carCategories1[0]->category_name }}</h3>
        </h4>
        <a href="/dashboard/packs/create?idCar={{ $carCatId }}" class="btn btn-primary ml-auto mb-3 mb-sm-0"> New Package</a>
      </div>
      @if(session()->has('success'))
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">    
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
      </svg>
    
      <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <div>
          {{ session('success') }}
        </div>
      </div>
      @endif
    </div>
  </div>
</div>

<div class="row p-0 m-0" style="width: 100%">
@foreach ($packs as $p)
<div class="col-lg-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-sm-flex align-items-center mb-4">
        <h4 class="card-title mb-sm-0">{{ $p->pack_name }} <br> Rp.{{ $p->price }} | {{ $p->time }} Min</h4>
        <a href="/dashboard/servicePackages/{{ $p->id }}/edit?pack_id={{ $p->id }}" class="btn-sm btn-warning ml-auto mb-3 mb-sm-0" style="text-decoration: none"> Edit</a>
        <form action="/dashboard/packs/{{ $p->id }}" method="post" style="display: inline">
          @method('delete')
          @csrf
          <input type="hidden" value="{{ request('carcategory') }}" name="carCatId">
          <button type="submit" class="btn-sm btn-danger ml-3 mb-3 mb-sm-0" onclick="return confirm('Are You Sure')" style="border: none">Delete</button>
          </form>
        {{-- <a href="#" class="btn-sm btn-danger ml-3 mb-3 mb-sm-0" style="text-decoration: none"> Delete</a> --}}
      </div>
      <div class="table-responsive border rounded p-1">
        <table class="table">
          <thead>
            <tr>
              <th class="font-weight-bold">Number</th>
              <th class="font-weight-bold">Services</th>
              <th class="font-weight-bold">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($servicePacks->where('pack_id', $p->id) as $sp)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $sp->service->service_name }}</td>
                {{-- <td>{{ $carCategories2[0]->category_name }}</td> --}}
                <td>
                  <a href="/dashboard/services/{{ $sp->service->id }}/edit" style="text-decoration: none">
                    <div class="badge badge-warning p-2">Edit</div>
                  </a> 
                  <form action="/dashboard/services/{{ $sp->service->id }}" style="display: inline" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="badge badge-danger p-2" style="border: none" onclick="return confirm('Are You Sure')">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="d-flex mt-4 flex-wrap">
      </div>
    </div>
  </div>
</div>
@endforeach
@endif
</div>


@endsection
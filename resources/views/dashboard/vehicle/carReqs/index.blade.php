@extends('dashboard.layouts.main')

@section('content') 


<div class="row">
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
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex align-items-center mb-4">
            <h4 class="card-title mb-sm-0">Car Requirements</h4>
            <a href="/dashboard/carrequirements/create" class="btn btn-primary ml-auto mb-3 mb-sm-0"> New Requirement</a>
          </div>
          <div class="table-responsive border rounded p-1">
            <table class="table">
              <thead>
                <tr>
                  <th class="font-weight-bold">Number</th>
                  <th class="font-weight-bold">Car Requiremnt</th>
                  <th class="font-weight-bold">Car Category</th>
                  <th class="font-weight-bold">Created at</th>
                  <th class="font-weight-bold">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($carCategories as $carCategory)
                @foreach ($carReqs->where('carCategory_id', $carCategory->id) as $carReq)
                <tr>
                    <td>{{ ($carReqs->currentPage()-1) * $carReqs->perPage() + $loop->iteration }}</td>
                    <td>{{ $carReq->requirement }}</td>
                    <td>{{ $carCategory->category_name}}</td>
                    <td>{{ $carReq->created_at }}</td>
                    <td>
                      <a href="/dashboard/carrequirements/{{ $carReq->id }}/edit?carrequirement={{ $carReq->id }}" style="text-decoration: none">
                        <div class="badge badge-warning p-2">edit</div>
                      </a>
                        <form action="/dashboard/carrequirements/{{ $carReq->id }}" method="post" style="display: inline">
                        @method('delete')
                        @csrf
                        <input type="hidden" value="{{ $carReq->id }}" name="id">
                        <button type="submit" class="badge badge-danger p-2" onclick="return confirm('Are You Sure')" style="border: none">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="d-flex mt-4 flex-wrap">
            {{ $carReqs->links() }}
          </div>
        </div>
      </div>
    </div>
</div>


@endsection
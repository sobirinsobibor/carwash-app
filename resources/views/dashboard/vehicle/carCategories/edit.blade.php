@extends('dashboard.layouts.main')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="/dashboard/carcategories/{{ $carCategory[0]->id }}" method="post">
                  @method('put')
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail3">Nama Category</label>
                    <input type="text" class="form-control" id="namaKategori" name="category_name" oninput="makeSlug()" value="{{ $carCategory[0]->category_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">slug</label>
                    <input type="text" class="form-control" id="slugKategori" placeholder="category slug" name="category_slug" value="{{ $carCategory[0]->category_slug}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">id</label>
                    <input type="text" class="form-control" id="slugKategori"  name="id" value="{{ $carCategory[0]->id}}">
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
                  <button type="submit" class="btn btn-primary mr-2">Update Category</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>

<script>
    function generateSlug(text)
    {
        return text.toString().toLowerCase()
            .replace(/^-+/, '')
            .replace(/-+$/, '')
            .replace(/\s+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/[^\w\-]+/g, '');
    }

    function makeSlug(){
        var category_name = document.getElementById('namaKategori')
        var category_slug = document.getElementById('slugKategori')

        category_slug.value = generateSlug(category_name.value)
    }
</script>


@endsection
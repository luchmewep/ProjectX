    @extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('photo.create') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-row">    
        <div class="form-group col-md-6">
          <label for="file">Upload File</label>
          <input type="file" class="form-control" id="file" name="file">
        </div>
        <div class="form-group col-md-6">
          <label for="filename">File Name</label>
          <input type="text" class="form-control" id="filename" name="filename" placeholder="text">
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
</div>
@endsection

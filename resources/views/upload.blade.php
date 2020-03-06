    @extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('photos.create') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-row">    
        <div class="form-group col-md-6">
          <label for="file">Upload File</label>
          <input type="file" class="form-control" id="file" name="file" onchange="readURL(this);">
          <img id="blah" src="#" alt="your image" />
        </div>
        <div class="form-group col-md-6">
          <label for="filename">File Name</label>
          <input type="text" class="form-control" id="filename" name="filename" placeholder="text">
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
    <table>
      <caption>List of Files</caption>
      <thead>
        <tr>
          <th>Directories</th>
        </tr>
      </thead>
      <tbody>
        @foreach(Storage::disk('google')->getAdapter()->listContents() as $file)

        <tr>
          <td><a href="{{ Storage::disk('google')->getAdapter()->getUrl($file['path']) }}">
            {{ $file['name'] }}
          </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <script>
      function readURL(input) {
        alert('oh');
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</div>
@endsection

@extends('layout.admin')

@section('content')
<body>
  <br>
  <br>
  <h1 class="text-center mb-5 mt-5">Tambah Data status</h1>

  <div class="container mb-5">
      <div class="row justify-content-center">
          <div class="col-8">
              <div class="card">
                  <div class="card-body">
                      <form action="/inserstatus" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                             aria-describedby="emailHelp" placeholder="Enter Nama">
                             @error('name')
                             <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                         
                            <div class="form-group">
                                <label for="favcolor">Select your color:</label>
                                <input type="color" id="favcolor" name="color" value="#ff0000"><br><br>
                                @error('color')
                             <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            
                         </div>
                        </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                  </div>
              </div>
          </div>
      </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
@endsection
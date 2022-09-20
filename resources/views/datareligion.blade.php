@extends('layout.admin')
@push('css')
   <!-- Bootstrap CSS -->
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
   integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
    
@section('content')

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Pegawai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Pegawai</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
   <div class="container">
        <a href="/tambahagama" class="btn btn-success">Tambah +</a>
        {{-- {{ Session::get('halaman_url') }} --}}
        <div class="row g-3 align-items-center mt-2 mb-2">
          <div class="col-auto">
            <form action="/pegawai" method="GET">
            <input type="search" id="inputPassword6" name="search" class="form-control " aria-describedby="passwordHelpInline">
            </form>
          </div>
          <a href="/exportpdf" class="btn btn-info ml-3   ">Export PDF</a>
          <a href="/exportexcel" class="btn btn-success ml-2   ">Export Excel</a>
          <button type="button" class="btn btn-primary ml-2 " data-toggle="modal" data-target="#exampleModal">
            Import Data
          </button>
                      <!-- Button trigger modal -->
            
      
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="/importexcel" method="POST" enctype="multipart/form-data">
                  @csrf 
                  
                    <div class="modal-body">
                    <div class="form-group">
                      <input type="file" name="file" required>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  </div>
                 </form>
              </div>
            </div>
        </div>
        <div class="row">
          {{-- @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>                    
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1; 
                  @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->nama }}</td>
                        
                       
                      </tr>
                    @endforeach
      
                </tbody>
              </table>
              {{ $data->links() }}
        </div>
      </div>
</div>
      


@endsection

@push('scripts')
  
   
</body>

@endpush
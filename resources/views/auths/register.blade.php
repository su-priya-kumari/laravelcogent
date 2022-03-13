<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="main-content">
        <!-- Header -->
        
        <!-- Page content -->
        <div class="container mt--8 pb-5">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 mb-5">
              <div class="card border-0 mb-0 mb-5">
                  <!-- Header -->
                  <div class="header-body text-center mt-5">
                    <div class="row justify-content-center">
                      <div class="col-xl-5 col-lg-6 col-md-8 px-1">
                        <h1 class="text-dark">Register</h1>
                        
                      </div>
                    </div>
                  </div>
                  <hr>
                  @if(Session::has('message')) 
                    <div class="alert alert-primary alert-dismissible fade show m-2" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text">{{Session::get('message')}}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif
                  <!-- End Header -->
                <div class="card-body px-lg-5 py-lg-5">
                  
                  {{-- <form role="form" action="#" method="POST"> --}}
                  <form role="form" action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                          <input class="form-control" name="name" placeholder="Name" type="text" value="{{old('name')}}">                      
                        </div>
                        @error('name') <p class="text-lead text-danger text-sm">{{$message}}</p> @enderror
                      </div>

                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <input class="form-control" name="email" placeholder="Email" type="email" value="{{old('email')}}">                      
                      </div>
                      @error('email') <p class="text-lead text-danger text-sm">{{$message}}</p> @enderror
                    </div>

                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <input class="form-control" name="password" placeholder="Password" type="password" value="{{old('password')}}">
                      </div>
                      @error('password') <small class="text-lead text-danger">{{$message}}</small> @enderror
                    </div>

                    <div class="custom-control custom-control-alternative custom-checkbox mt-1">
                      <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin">
                        <span class="text-muted">Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary my-4">Sign up</button>
                      <hr>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
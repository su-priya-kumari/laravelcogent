@extends('layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>All Notes</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
  
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($notes as $note)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->detail }}</td>
                            <td>
                                <a href={{ route('deleteRecord',$note->id)}} class="btn btn-danger btn-sm"><i class="fas fa-times"></i>Delete</a>
                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                  
                    {!! $notes->links() !!}
                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
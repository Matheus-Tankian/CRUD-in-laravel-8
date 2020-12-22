@extends('funcionarios.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('funcionarios.create') }}"> Create New funcionarios</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>CPF</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($funcionarios as $funcionarios)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $funcionarios->name }}</td>
            <td>{{ $funcionarios->detail }}</td>
            <td>
                <form action="{{ route('funcionarios.destroy',$funcionarios->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('funcionarios.show',$funcionarios->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('funcionarios.edit',$funcionarios->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $funcionarios->links() !!}
      
@endsection
@extends('layout')
  
@section('content')
    <div class="row" style="margin-top:30px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Produto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalhes:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection
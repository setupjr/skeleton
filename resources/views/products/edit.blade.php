@extends('layouts.dash')

@section('content')
    <div class="container-fluid">
        <div class="side-body">
            @include('includes.flash')
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="title">Editar</div>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['url' => route('products.update', ['id' => $product->id]), 'method' => 'put']) !!}
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="sub-title">Nome</div>
                                    {!! Form::text('name', $product->name, ['required' => 'required', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
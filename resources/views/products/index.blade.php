@extends('layouts.dash')

@section('jsscript')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.delete').on('click', function (e) {
                e.preventDefault();
                var urlDelete = $(this).attr('url');
                $('.btn-delete').on('click', function() {
                    window.location = urlDelete;
                });
            });
        });
    </script>
@endsection

@section('content')
    <div class="modal fade" id="modalDeleteProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir este item? <br>
                    Esta ação não poderá ser desfeita.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-danger btn-delete">Excluir</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="side-body">
            @include('includes.flash')
            <div class="page-title">
                <span class="title">Produtos</span>
                {{--<div class="description">A bootstrap table for display list of data.</div>--}}
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th class="min-width">ID</th>
                                    <th>Nome</th>
                                    <th class="min-width">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $p)
                                    <tr>
                                        <td style="white-space: nowrap;">{{ $p->id }}</td>
                                        <td>{{ $p->name }}</td>

                                        <td style="white-space: nowrap;">
                                            <a href="{{ route('products.edit', ['id' => $p->id]) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="#" url="{{ route('products.destroy', ['id' => $p->id]) }}" class="delete" data-toggle="modal" data-target="#modalDeleteProduct">
                                                <i class="fa fa-trash-o red"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $products->render() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
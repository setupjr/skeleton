@extends('layouts.login')

@section('content')
    <div class="register-box">
        <div>
            <div class="register-form row">
                <div class="col-sm-12">
                    <div class="register-body">
                        <p class="text-center app-description">
                            Por enquanto estamos em fase de teste. Somente usuários convidados poderão ter acesso. <br>
                            Caso queira participar entre em contato pela página principal do site clicando <a href="{{ route('home') }}"><b>aqui</b></a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
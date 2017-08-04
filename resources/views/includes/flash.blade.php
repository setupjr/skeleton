@if (session('status'))
    @if (isset(session('status')['success']) && session('status')['success'])
        <div class="alert fresh-color alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">×</span></button>
            {!! session('status')['success'] !!}
        </div>
    @elseif(isset(session('status')['error']) && session('status')['error'])
        <div class="alert fresh-color alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">×</span></button>
            {!! session('status')['error'] !!}
        </div>
    @endif
@endif
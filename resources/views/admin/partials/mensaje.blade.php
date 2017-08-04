@if(Session::has('mensaje'))
    <p class="alert alert-success">
        {{ Session::get('mensaje') }}
    </p>
@endif
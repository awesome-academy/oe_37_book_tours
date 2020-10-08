@if(session('notice'))
    <div class="alert alert-info">
        {{ session('notice') }}
    </div>
@endif

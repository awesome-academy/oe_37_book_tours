@if ((count($errors) > 0))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>@lang('langviews.wrong') </strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@elseif (Session::has('register'))
    <div class="alert alert-success">
        <p> @lang('langviews.sign_up_true') </p>
    </div>

@elseif (Session::has('login'))
    <div class="alert alert-success">
        <p> @lang('langviews.sign_in_true') </p>
    </div>
    
@elseif (Session::has('loginFalse'))
    <div class="alert text-md-center">
        <p class="text-danger"> @lang('langviews.sign_in_false') </p>
    </div>

@endif

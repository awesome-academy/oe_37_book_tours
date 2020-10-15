<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-right">
                <ul class="menu list-inline mb-0">
                    @if (Auth::check())
                    <li class="list-inline-item"><a href="">@lang('langviews.wellcome'): {{ Auth::user()->name }} </a></li>
                    @else
                    <li class="list-inline-item"><a href="{{ route('login.get') }}">@lang('langviews.login') </a></li>
                    <li class="list-inline-item"><a href="{{ route('register.get') }}">@lang('langviews.register') </a></li>
                    @endif
                    <li class="list-inline-item"><a href="contact.html">@lang('langviews.contact') </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- *** TOP BAR END ***-->
</div>

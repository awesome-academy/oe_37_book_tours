<nav class="navbar navbar-expand-lg">
    <div class="container"><a href="{{ route('home.index') }}" class="navbar-brand home">
      @lang('langviews.booking_tour')
    </a>
    <div class="navbar-buttons">
        <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler">
            <i class="fa fa-align-justify"></i>
        </button>
        <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler">
            <i class="fa fa-search"></i>
        </button>
        <a href="basket.html" class="btn btn-outline-secondary navbar-toggler">
            <i class="fa fa-shopping-cart"></i>
        </a>
   </div>

    <div id="navigation" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown menu-large">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link"> @lang('langviews.tours_by_region')
                  <b class="caret"></b>
                </a>
               

                <ul class="dropdown-menu megamenu">
                    <li>
                        <div class="row flex-row flex-wrap">

                        @include('book_tour/layout/show_types')
                        
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown menu-large">
                <a href="{{route('home.tours')}}" data-delay="200" class=" nav-link">@lang('langviews.tours') <b class="caret"></b>
                </a>
            </li>
            <li class="nav-item dropdown menu-large">
                <a href="#" data-delay="200" class=" nav-link">@lang('langviews.about_me') <b class="caret"></b>
                </a>
            </li>
            
        </ul>

        <div class="navbar-buttons d-flex justify-content-end">
            <div id="search-not-mobile" class="navbar-collapse collapse"></div>
            <a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block">
                <i class="fa fa-search"></i>
            </a>
        </div>

    </div>
</nav>
<div id="search" class="collapse">
    <div class="container">
        <form action="{{ route('search.tours') }}" role="search" method="get" class="ml-auto">
            <div class="input-group">
                <input type="text" name="key" placeholder=" @lang('langviews.search') " class="form-control">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>


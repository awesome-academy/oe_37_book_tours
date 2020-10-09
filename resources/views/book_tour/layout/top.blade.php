<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-right">
                <ul class="menu list-inline mb-0">
                    <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">@lang('langviews.login')</a></li>
                    <li class="list-inline-item"><a href="register.html">@lang('langviews.register') </a></li>
                    <li class="list-inline-item"><a href="contact.html">@lang('langviews.contact') </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">@lang('langviews.customer_login') </h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <input id="email-modal" type="text" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password-modal" type="password" placeholder="password" class="form-control">
                        </div>
                        <p class="text-center">
                        <button class="btn btn-primary"><i class="fa fa-sign-in"></i> @lang('langviews.login') </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- *** TOP BAR END ***-->
</div>

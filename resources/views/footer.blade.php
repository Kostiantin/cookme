<footer>
    <a id="_scrl_top" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a class="footer-brand-link" href="/">{{ config('app.name', 'CookMe') }}</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-links">
                    <ul class="links-set-1">
                        <li><a href="#" class="f-link"><i class="fa fa-bullseye" aria-hidden="true"></i> @lang('everywhere.simple_products_delicious_diches')</a></li>
                        <li><a href="#" class="f-link"><i class="fa fa-bullseye" aria-hidden="true"></i> @lang('everywhere.meat_cuisine')</a></li>
                        <li><a href="#" class="f-link"><i class="fa fa-bullseye" aria-hidden="true"></i> @lang('everywhere.healthy_breakfast_recipes')</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-links">
                    <ul class="links-set-2">
                        <li><a href="#" class="f-link"><i class="fa fa-bell" aria-hidden="true"></i> @lang('everywhere.ask_chef')</a></li>
                        <li><a href="#" class="f-link"><i class="fa fa-bell-o" aria-hidden="true"></i> @lang('everywhere.hire_chef')</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-links">
                    <ul class="links-set-3">
                        <li><a href="{{ route('register') }}" class="f-link"><i class="fa fa-user-circle-o" aria-hidden="true"></i> @lang('everywhere.register')</a></li>
                        <li><a href="{{ route('login') }}" class="f-link"><i class="fa fa-user-circle" aria-hidden="true"></i> @lang('everywhere.login')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyrights">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">@lang('everywhere.copyrights')</div>
        </div>
    </div>
</div>
<script>
    ( function($) {
        $('#_scrl_top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1600);
            return false;
        });
    }) (jQuery);
</script>
<footer class="container-fluid footer">
    <div>
        <div class="footer-content">
            <hr/>
            @php
                $emailBody = rawurlencode(__('layouts.support.body', [
                    'version' => Helpers::getAppInfo(),
                    'url' => url()->current(),
                ]));
            @endphp
            <div>
                <x-ig::lang-switch />
                <ul class="list-unstyled d-flex flx-wrap gap-2">
                    <li>@lang('layouts.footer.copy', ['year' => date('Y')])</li>
                    <li><a href="mailto:@lang('layouts.provider.email')?body={{ $emailBody }}">@lang('layouts.support.link')</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

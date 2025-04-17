<footer class="container-fluid footer">
    <div>
        <div class="footer-content">
            <hr/>
            <div>
                <x-ig::lang-switch />
                <ul class="list-unstyled d-flex flx-wrap gap-2">
                    <li>@lang('layouts.footer.copy', ['year' => date('Y')])</li>
                    <li><x-ig::email-feedback /></li>
                    <li><x-ig-feedback /></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


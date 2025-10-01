<footer class="container-fluid footer">
    <div>
        <div class="footer-content">
            <hr/>
            <div>
                <x-ig::lang-switch />
                <ul class="list-unstyled d-flex flx-wrap gap-2">
                    <li><x-ig::email-feedback /></li>
                    <li><livewire:ig-feedback wire:key="f1" /></li>
                    <li><livewire:ig-feedback wire:key="f2" email="optional" title="Abcd" submit="XYZ" subject="DEF" /></li>
                </ul>
                <ul class="list-unstyled d-flex flx-wrap gap-2">
                    <li><x-ig::footer-copy /></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


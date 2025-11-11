<livewire:ig-feedback
    id="feedback-form"
    email="info@internetguru.io"
    name="Internet Guru"
/>
<livewire:ig-feedback
    id="feedback-form-2"
    email="info@internetguru.io"
    name="Internet Guru"
    :fields="[
        [
            'name' => 'phone',
            'required' => true,
        ],
        [
            'name' => 'message',
            'label' => 'Your Message',
        ]
    ]"
/>
<footer class="container-fluid footer">
    <div>
        <div class="footer-content">
            <hr/>
            <div>
                <x-ig::lang-switch />
                <ul class="list-unstyled d-flex flx-wrap gap-2">
                    <li><x-ig-feedback::link form-id="feedback-form" /></li>
                    <li><x-ig-feedback::link form-id="feedback-form-2">
                        Click here!
                    </x-ig-feedback::link></li>
                </ul>
                <ul class="list-unstyled d-flex flx-wrap gap-2">
                    <li><x-ig::footer-copy /></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

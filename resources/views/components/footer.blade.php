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
                    <li><a href="Javascript:void(0)" x-data x-on:click.prevent="Livewire.dispatch('openFeedback', {id: 'feedback-form'})">
                        {{ __('ig-feedback::layouts.modal.link_text') }}
                    </a></li>
                    <li><a href="Javascript:void(0)" x-data x-on:click.prevent="Livewire.dispatch('openFeedback', {id: 'feedback-form-2'})">
                        Click here!
                    </a></li>
                </ul>
                <ul class="list-unstyled d-flex flx-wrap gap-2">
                    <li><x-ig::footer-copy /></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<x-app>
    <x-slot:title>
        @lang('layouts.welcome.title')
    </x-slot>

    <x-slot:description>
        @lang('layouts.welcome.description')
    </x-slot>

    <section class="section section-welcome">
        <div id="print-test">
            <h2>Test print</h2>
            <x-ig::print-button selector="#print-test" class="mb-3" />
            <div>
                <p><strong>{{ Helpers::getAppInfo() }}</strong></p>
                <p>Test data current locale: <strong>{{ app()->currentLocale() }}</strong></p>
                <p>Test data current url: <strong>{{ url()->current() }}</strong></p>
                <p>Test data app.name: <strong>{{ config('app.name') }}</strong></p>
                <p>Test data app.url: <strong>{{ config('app.url') }}</strong></p>
                <p>Test data app.env: <strong>{{ config('app.env') }}</strong></p>
                <p>Test data app.debug: <strong>{{ config('app.debug') ? 'true' : 'false' }}</strong></p>
                <p>Test data with font awesome icon: <i class="fa-solid fa-user-tie"></i></p>
            </div>
            <h2>Test macros</h2>
            <ul>
                <li><samp>now()->subMonths(3)->myDiffForHumans()</samp><br />{{ now()->subMonths(3)->myDiffForHumans() }}</li>
                <li><samp>now()->subMonths(15)->myDiffForHumans()</samp><br />{{ now()->subMonths(15)->myDiffForHumans() }}</li>
                <li><samp>now()->subMonths(11)->subDays(16)->myDiffForHumans()</samp><br />{{ now()->subMonths(11)->subDays(16)->myDiffForHumans() }}</li>
                <li><samp>now()->subSeconds(10)->myDiffForHumans()</samp><br />{{ now()->subSeconds(10)->myDiffForHumans() }}</li>
            </ul>
            <h2>Test Editable Form</h2>
            <x-ig::form>
                <livewire:upload name="images" />
                <x-ig::input type="text" name="name" label="Name" value="John">Enter your name</x-ig::input>
                <x-ig::input type="email" name="email" label="Email">Enter your email</x-ig::input>
                <x-ig::input type="password" name="password" label="Password">Enter your password</x-ig::input>
                <x-ig::input type="select" :options="['Option 1', 'Option 2']" name="select">Choose an option</x-ig::input>
                <x-ig::input type="checkbox" name="checkbox" label="Checkbox">Check me</x-ig::input>
                <x-ig::submit>Submit</x-ig::submit>
            </x-ig::form>
            <h2 class="mt-5">Test Editable Form with <code>editable-skip</code></h2>
            <x-ig::form class="editable-skip" :action="route('submit')">
                <x-ig::input type="text" name="name" label="Name" value="John">Enter your name</x-ig::input>
                <x-ig::input type="email" name="email" label="Email">Enter your email</x-ig::input>
                <x-ig::input type="password" name="password" label="Password">Enter your password</x-ig::input>
                <x-ig::input type="select" :options="['Option 1', 'Option 2']" name="select">Choose an option</x-ig::input>
                <x-ig::input type="checkbox" name="checkbox" label="Checkbox">Check me</x-ig::input>
                <x-ig::submit>Submit</x-ig::submit>
            </x-ig::form>
        </div>
    </section>

</x-app>

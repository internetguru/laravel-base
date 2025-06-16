<x-app>
    <x-slot:title>
        @lang('layouts.welcome.title')
    </x-slot>

    <x-slot:description>
        @lang('layouts.welcome.description')
    </x-slot>

    <section class="section section-welcome">
        <div>
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

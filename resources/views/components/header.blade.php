@props([
    'title' => null,
    'breadcrumb' => null,
])

<header class="container-fluid header">
    <div>
        <div class="header-content">
            <x-ig::breadcrumb />
            <x-ig-user::user-menu />
        </div>
    </div>
    <hr/>
</header>

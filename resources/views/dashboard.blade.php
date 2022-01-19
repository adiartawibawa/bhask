<x-user-layout>
    <x-slot name="header_content">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-8 text-2xl">
                Welcome to your {{ config('app.name') }} application!
            </div>

            <div class="mt-6 text-gray-500">
                {{ config('app.name') }} provides a beautiful, robust starting point for your next awesome application.
                {{ config('app.name') }}
                is designed to help you build your application using a development environment that is simple, powerful,
                and
                enjoyable. We believe you should love expressing your creativity through programming, so we have spent
                time carefully crafting
                the Laravel ecosystem to be a breath of fresh air. We hope you love it.
            </div>
        </div>
    </div>
</x-user-layout>

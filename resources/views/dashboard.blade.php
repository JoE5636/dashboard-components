<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex flex-col gap-2 pb-10">
                <x-card />
                <x-dropzone />
                <x-table-tabs />
                <x-tab-pills />
            </div>
        </div>
    </div>
</x-app-layout>

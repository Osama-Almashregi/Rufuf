<script src="https://cdn.tailwindcss.com"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            <div class="flex justify-center items-center mt-10 grid  gap-10 p-10">
                <a href="{{route('books.index')}}" class="bg-gradient-to-r from-[#60efff] to-[#0061ff] text-gray-100 rounded-lg px-10   font-bold  py-2 text-l uppercase text-center ">
                   الرئيسية
                </a>
                </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged inhhhh!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
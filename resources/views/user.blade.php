<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">
        <table class="mb-5 w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">Name</th>
                    <th scope="col" class="py-3 px-6">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">{{ $user->name }}</td>
                    <td class="py-4 px-6">{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->Links('vendor.pagination.splade-tailwind') }}
    </x-panel>
</x-layout>
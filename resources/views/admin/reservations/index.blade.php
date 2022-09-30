<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create') }}"
                    class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">New Reservation</a>
            </div>{{-- end new category button --}}
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Phone
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Guest Number
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Table Id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->first_name }} {{ $reservation->last_name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $reservation->email }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->phone }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->guest_number }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->table->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->res_date }}
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-4">Edit</a>
                                    <form method="POST" action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                        onsubmit="return confirm('Are you sure?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>{{-- end table --}}
        </div>
    </div>
</x-admin-layout>

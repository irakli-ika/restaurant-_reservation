<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Go Back</a>
            </div>{{-- end new category button --}}
            <div class="m-2 p-2 bg-slate-100 rounded-lg max-w-xl">
                <form method="post" action="{{ route('admin.tables.store') }}">
                    @csrf
                    <div class="mb-4 w-full">
                        <label for="name" class="form-label inline-block mb-2 text-gray-700"
                        >Name</label
                        >
                        <input
                        type="text"
                        class="
                        @error('name') border-red-400 @enderror
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        "
                        id="name"
                        name="name"
                        placeholder="Name"
                        />
                        @error('name')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="guest_number" class="form-label inline-block mb-2 text-gray-700">Guest Number</label>
                        <input class="
                        @error('guest_number') border-red-400 @enderror
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        type="number" id="guest_number" name="guest_number" placeholder="Guest Number">
                        @error('guest_number')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="status">Status</label>
                        <select class="
                        @error('status') border-red-400 @enderror
                        form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example"
                        id="status"
                        name="status">
                        @foreach (App\Enums\TableStatus::cases() as $status)
                            <option value="{{ $status->value }}">{{ $status->name }}</option>
                            
                        @endforeach
                        </select>
                        @error('status')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="location">Location</label>
                        <select class="
                        @error('location') border-red-400 @enderror
                        form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example"
                        id="location"
                        name="location">
                        @foreach (App\Enums\TableLocation::cases() as $location)
                            <option value="{{ $location->value }}">{{ $location->name }}</option>
                        @endforeach
                        </select>
                        @error('location')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="px-4 py-2 block mx-auto text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

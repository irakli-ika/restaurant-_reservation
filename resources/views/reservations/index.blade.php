<x-guest-layout>
    <div class="container w-full px-5 py-6 ">
      <div class="m-2 p-2 bg-slate-100 rounded-lg max-w-xl m-auto">
        <form method="POST" action="{{ route('reservations.store') }}">
            @csrf
            <div class="mb-4 w-full">
                <label for="first_name" class="form-label inline-block mb-2 text-gray-700"
                >First Name</label
                >
                <input
                type="text"
                class="
                @error('first_name') border-red-400 @enderror
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
                id="first_name" 
                name="first_name"
                placeholder="First Name"
                />
                @error('first_name')
                    <div class="alert alert-danger text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 w-full">
                <label for="last_name" class="form-label inline-block mb-2 text-gray-700">Last Name</label>
                <input class="
                @error('last_name') border-red-400 @enderror
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
                type="text" 
                id="last_name" 
                name="last_name"
                placeholder="Last Name"
                />
                @error('last_name')
                    <div class="alert alert-danger text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 w-full">
                <label for="email" class="form-label inline-block mb-2 text-gray-700"
                >Email</label
                >
                <input
                type="email"
                class="
                @error('email') border-red-400 @enderror
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
                id="email" 
                name="email"
                placeholder="Email" />
                @error('email')
                    <div class="alert alert-danger text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 w-full">
                <label for="phone" class="form-label inline-block mb-2 text-gray-700"
                >Phone</label
                >
                <input
                type="text"
                class="
                @error('phone') border-red-400 @enderror
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
                id="phone" 
                name="phone"
                placeholder="Phone" />
                @error('phone')
                    <div class="alert alert-danger text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 w-full">
                <label for="res_date" class="form-label inline-block mb-2 text-gray-700"
                >Reservation Date</label
                >
                <input
                type="datetime-local"
                class="
                @error('res_date') border-red-400 @enderror
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
                id="res_date" 
                name="res_date"
                placeholder="Reservation Date" />
                @error('res_date')
                    <div class="alert alert-danger text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 w-full">
                <label for="guest_number" class="form-label inline-block mb-2 text-gray-700"
                >Guest Number</label
                >
                <input
                type="number"
                class="
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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                id="guest_number" 
                name="guest_number"
                placeholder="Guest Number" />
                @error('guest_number')
                    <div class="alert alert-danger text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 w-full">
                <label for="table_id">Table Id</label>
                <select class="
                @error('table_id') border-red-400 @enderror
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
                id="table_id"
                name="table_id">
                @foreach ($tables as $table)
                    <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                @endforeach
                </select>
                @error('table_id')
                    <div class="alert alert-danger text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <button class="px-4 py-2 block mx-auto text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg"
                    type="submit">Make Reservation</button>
        </form>
    </div>
</div>
      </div>
</x-guest-layout>
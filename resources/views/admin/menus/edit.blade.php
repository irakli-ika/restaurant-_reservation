<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.menus.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Go Back</a>
            </div>{{-- end new category button --}}
            <div class="m-2 p-2 bg-slate-100 rounded-lg max-w-xl">
                <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="mb-4 w-full">
                        <label for="name" class="form-label inline-block mb-2 text-gray-700">Name</label
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
                        value="{{ $menu->name }}"
                        id="name" 
                        name="name"
                        placeholder="Name"
                        />
                        @error('name')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <div class="mb-4">
                            <img src="{{ Storage::url($menu->image) }}" class="w-32 h-32">
                        </div>
                        <label for="image" class="form-label inline-block mb-2 text-gray-700">Upload Image</label>
                        <input class="
                        @error('image') border-red-400 @enderror
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
                        type="file" 
                        id="image" 
                        name="image">
                        @error('image')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="price" class="form-label inline-block mb-2 text-gray-700"
                        >Price</label
                        >
                        <input
                        type="number"
                        min="0.00"
                        max="10000.0"
                        step="0.01"
                        class="
                        @error('price') border-red-400 @enderror
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
                        id="price"
                        name="price"
                        placeholder="price"
                        value="{{ $menu->price }}"
                        />
                        @error('price')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="description" class="form-label inline-block mb-2 text-gray-700"
                        >Description</label
                        >
                        <textarea
                        type="text"
                        class="
                        @error('description') border-red-400 @enderror
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
                        id="description" 
                        name="description"
                        placeholder="Description">{{ $menu->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="categories">Categories</label>
                        <select class="
                        @error('categories') border-red-400 @enderror
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
                        id="categories"
                        name="categories[]"
                        multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>{{ $category->name }}</option>
                        @endforeach
                        </select>
                        @error('categories')
                            <div class="alert alert-danger text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="px-4 py-2 block mx-auto text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg"
                            type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

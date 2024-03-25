@extends('backend.layout.app')
@section('title')
Home Page Image Create
@endsection
@section('main')
<form action="{{route('home.image.store')}}" method="post" class=" px-6 py-6 rounded-md space-y-7" enctype="multipart/form-data">
    @csrf
    <div class="bg-white py-12 rounded-lg shadow-md">
        <div class="px-10">
            <label for="image" class="block text-sm leading-5 font-medium text-gray-700">
                First Image<span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="image" value="{{old('first_image')}}" name="first_image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter category image" />
            </div>
            @error('first_image')<p class="text-red-600 mt-5">{{$message}}</p>@enderror
        </div>

        <div class="px-10">
            <label for="image" class="block text-sm leading-5 font-medium text-gray-700">
                Second Image<span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="image" value="{{old('second_image')}}" name="second_image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter category image" />
            </div>
            @error('second_image')<p class="text-red-600 mt-5">{{$message}}</p>@enderror
        </div>
        <div class="px-10">
            <label for="image" class="block text-sm leading-5 font-medium text-gray-700">
                Third Image<span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="image" value="{{old('third_image')}}" name="third_image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter category image" />
            </div>
            @error('third_image')<p class="text-red-600 mt-5">{{$message}}</p>@enderror
        </div>

    </div>
    <div class="mt-8 pt-5">
        <div class="flex justify-end">
            <span class="inline-flex rounded-md shadow-sm">
                <a href="{{route('home.image')}}" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Cancel
                </a>
            </span>
            <span class="ml-3 inline-flex rounded-md shadow-sm">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Save
                </button>
            </span>
        </div>
    </div>
</form>
@endsection
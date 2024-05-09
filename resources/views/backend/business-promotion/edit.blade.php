@extends('backend.layout.app')
@section('title')
Business Promotion Edit
@endsection
@section('main')
<form action="{{route('businessPromotion.update')}}" method="post" class="px-6 py-6 rounded-md  space-y-7" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="py-12 bg-white rounded-lg shadow-md">
        <div class="px-10">
            <label for="title" class="block text-sm font-medium leading-5 text-gray-700">
               Title<span class="text-red-600"> * </span>
            </label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <input id="title" value="{{optional($businessPromotion)->title}}" name="title" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter business Promotion name" />
            </div>
            @error('title')<p class="mt-5 text-red-600">{{$message}}</p>@enderror
        </div>
        <div class="px-10">
            <label for="long_description" class="block text-sm leading-5 font-medium text-gray-700">
                Description <span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea  id="content" name="long_description" class="ckeditor form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Description"> {{ optional($businessPromotion)->long_description }} </textarea>
            </div>
            @error('long_description')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                    <img width="150 px" src="{{optional($businessPromotion)->image}}" class="object-contain rounded-full h-14 w-14" alt="No Image">
                </div>
            </div>

            <label for="image" class="block text-sm leading-5 font-medium text-gray-700">
                 Image <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a> <br>
                <span class="text-black"> The size of height and width should be the same for 1:1 ratio </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="image" value="{{optional($businessPromotion)->image}}" name="image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" />
            </div>
            @error('image')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>

    </div>
    <div class="pt-5 mt-8">
        <div class="flex justify-end">
            <span class="inline-flex rounded-md shadow-sm">
                <a href="{{route('businessPromotion.list')}}" class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
                    Cancel
                </a>
            </span>
            <span class="inline-flex ml-3 rounded-md shadow-sm">
                <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                    Save
                </button>
            </span>
        </div>
    </div>
</form>
@endsection
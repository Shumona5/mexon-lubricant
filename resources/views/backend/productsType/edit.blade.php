@extends('backend.layout.app')
@section('title')
Products Type Details Edit
@endsection
@section('main')
<form action="{{route('products.type.update',$detail->id)}}" method="post" class="px-6 py-6 rounded-md  space-y-7" >
    @csrf
    @method('put')
    <div class="py-12 bg-white rounded-lg shadow-md">
        <div class="px-10">
            <label for="title1" class="block text-sm font-medium leading-5 text-gray-700">
            Title1<span class="text-red-600"> * </span>
            </label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <input id="title1" value="{{$detail->title1}}" name="title1" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter title" />
            </div>
            @error('title1')<p class="mt-5 text-red-600">{{$message}}</p>@enderror
        </div>
        <div class="px-10">
            <label for="title2" class="block text-sm font-medium leading-5 text-gray-700">
            Title2<span class="text-red-600"> * </span>
            </label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <input id="title2" value="{{$detail->title2}}" name="title2" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter title" />
            </div>
            @error('title2')<p class="mt-5 text-red-600">{{$message}}</p>@enderror
        </div>
        <div class="px-10">
            <label for="long_description" class="block text-sm leading-5 font-medium text-gray-700">
                Description <span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea  id="content" name="long_description" class="ckeditor form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Description"> {{ $detail->long_description }} </textarea>
            </div>
            @error('long_description')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
                <label for="name" class="block text-sm leading-5 font-medium text-gray-700">
                    Category<span class="text-red-600"> * </span>
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <select required name="category_id"
                        class="form-select appearance-none
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
                        aria-label="Default select example">
                        <option selected>Select Category </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $detail->category_id) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach

                    </select>
                </div>
                @error('category_id')
                    <p class="text-red-600 mt-5">{{ $message }}</p>
                @enderror
            </div>

            <div class="px-10">
                <label for="image" class="block text-sm font-medium leading-5 text-gray-700">
                    Image<span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a>
                </label>
                <div class="relative mt-1 rounded-md shadow-sm">
                    <input id="image" value="{{$detail->image}}" name="image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter category image" />
                </div>
                @error('image')<p class="mt-5 text-red-600">{{$message}}</p>@enderror
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
@extends('backend.layout.app')
@section('title')
Category Edit
@endsection
@section('main')
<form action="{{route('category.update',$category->slug)}}" method="post" class="px-6 py-6 rounded-md  space-y-7" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="py-12 bg-white rounded-lg shadow-md">
        <div class="px-10">
            <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                Name<span class="text-red-600"> * </span>
            </label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <input id="name" value="{{$category->name}}" name="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter category name" />
            </div>
            @error('name')<p class="mt-5 text-red-600">{{$message}}</p>@enderror
        </div>
        <div>

            <div class="px-10">
                <label for="parent" class="block text-sm leading-5 font-medium text-gray-700">
                    Select Parent<span class="text-red-600"> * </span>
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">

                    <select name="parent_id" class="form-select appearance-none
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
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option value="">-- Select Option --</option>
                        @foreach($parents as $parent)
                        <option @if($parent->id==$category->parent_id) selected @endif value="{{$parent->id}}">{{$parent->name}}</option>
                        @endforeach

                    </select>


                </div>

            </div>

            <div class="px-10">
                <label for="image" class="block text-sm font-medium leading-5 text-gray-700">
                    Image<span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a>
                </label>
                <div class="relative mt-1 rounded-md shadow-sm">
                    <input id="image" value="" name="image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter category image" />
                </div>
                @error('image')<p class="mt-5 text-red-600">{{$message}}</p>@enderror
            </div>

            <div class="px-10">

                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                        <img width="150 px" src="{{ $category->image }}" class="object-contain rounded-full h-14 w-14" alt="">
                    </div>
                </div>
            </div>

        

            <div class="px-10">
                <label for="position" class="block text-sm leading-5 font-medium text-gray-700">
                    Position<span class="text-red-600"> * </span>
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input id="position" value="{{$category->position}}" name="position" type="number" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter position " />
                </div>
                @error('position')<p class="text-red-600 mt-5">{{$message}}</p>@enderror
            </div>

            <div class="px-10">
                <label for="status" class="block text-sm leading-5 font-medium text-gray-700">
                    Status<span class="text-red-600"> * </span>
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <select required name="status" class="form-select appearance-none
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
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option @if ($category->status == 'active') selected @endif value="active">Active</option>
                        <option @if ($category->status == 'inactive') selected @endif value="inactive">Inactive</option>
    
                    </select>
                </div>
                @error('status')
                <p class="text-red-600 mt-5">{{ $message }}</p>
                @enderror
            </div>
        </div>

    </div>
    <div class="pt-5 mt-8">
        <div class="flex justify-end">
            <span class="inline-flex rounded-md shadow-sm">
                <a href="{{route('category.list')}}" class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
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
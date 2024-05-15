@extends('backend.layout.app')
@section('title')
SubCategory Details Edit
@endsection
@section('main')
<form action="{{route('subCategory.update',$subcategory->id)}}" method="post" class=" px-6 py-6 rounded-md space-y-7" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="bg-white py-12 rounded-lg shadow-md">
        <div class="px-10">
            <label for="title1" class="block text-sm leading-5 font-medium text-gray-700">
            Title1<span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="title1" value="{{$subcategory->title1}}" name="title1" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter Title Name " />
            </div>
            @error('title1')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="first_short_description" class="block text-sm leading-5 font-medium text-gray-700">
            First Short Description  <span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea  id="content" name="first_short_description" class="ckeditor form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Description"> {{ $subcategory->first_short_description }} </textarea>
            </div>
            @error('first_short_description')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="first_long_description" class="block text-sm leading-5 font-medium text-gray-700">
            First Long Description  <span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea  id="content" name="first_long_description" class="ckeditor form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Description"> {{ $subcategory->first_long_description }} </textarea>
            </div>
            @error('first_long_description')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        
       <div class="px-10">
            <label for="first_image" class="block text-sm leading-5 font-medium text-gray-700">
            First Image <span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a> <br>
                <span class="text-black"> The size of height and width should be the same for 1:1 ratio </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="image" value="{{$subcategory->first_image}}" name="first_image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" />
            </div>
            @error('first_image')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="title2" class="block text-sm leading-5 font-medium text-gray-700">
            Title2<span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="title2" value="{{$subcategory->title2}}" name="title2" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Enter Title Name " />
            </div>
            @error('title2')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="second_short_description" class="block text-sm leading-5 font-medium text-gray-700">
            Second Short Description  <span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea  id="content" name="second_short_description" class="ckeditor form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Description"> {{ $subcategory->second_short_description }} </textarea>
            </div>
            @error('second_short_description')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="second_long_description" class="block text-sm leading-5 font-medium text-gray-700">
            Second Long Description <span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea  id="content" name="second_long_description" class="ckeditor form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" placeholder="Description"> {{ $subcategory->second_long_description }} </textarea>
            </div>
            @error('second_long_description')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="second_image" class="block text-sm leading-5 font-medium text-gray-700">
            Second Image  <span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a> <br>
                <span class="text-black"> The size of height and width should be the same for 1:1 ratio </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="image" value="{{$subcategory->second_image}}" name="second_image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" />
            </div>
            @error('second_image')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="image" class="block text-sm leading-5 font-medium text-gray-700">
             Image  <span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a> <br>
                <span class="text-black"> The size of height and width should be the same for 1:1 ratio </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="image" value="{{$subcategory->image}}" name="image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" />
            </div>
            @error('image')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="name" class="block text-sm leading-5 font-medium text-gray-700">
                Category<span class="text-red-600"> * </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <select required name="category_id" class="form-select appearance-none
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
                    <option selected>Select Category </option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $subcategory->category_id) selected @endif>
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
            <label for="pdf_image" class="block text-sm leading-5 font-medium text-gray-700">
            Pdf Image  <span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a> <br>
                <span class="text-black"> The size of height and width should be the same for 1:1 ratio </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="pdf_image" value="{{$subcategory->pdf_image}}" name="pdf_image" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" />
            </div>
            @error('pdf_image')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
        <div class="px-10">
            <label for="pdf" class="block text-sm leading-5 font-medium text-gray-700">
            Upload Pdf  <span class="text-red-600"> * </span> <a class="text-blue-600 underline" href="https://squoosh.app/" target="_blank">Resize here</a> <br>
                <span class="text-black"> The size of height and width should be the same for 1:1 ratio </span>
            </label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="pdf" value="{{$subcategory->pdf}}" name="pdf" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:border-blue-200 focus:outline-none" />
            </div>
            @error('pdf')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
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

                    <option @if($subcategory->status=='Active') selected @endif value="Active">Active</option>
                    <option @if($subcategory->status=='Inactive') selected @endif value="Inactive">Inactive</option>

                </select>
            </div>
            @error('status')
            <p class="text-red-600 mt-5">{{ $message }}</p>
            @enderror
        </div>
     
        <div class="mt-8 pt-5">
            <div class="flex justify-end">
                <span class="inline-flex rounded-md shadow-sm">
                    <a href="{{route('subCategory.list')}}" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
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
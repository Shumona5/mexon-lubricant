@extends('backend.layout.app')
@section('title')
Write Us List 
@endsection
@section('main')

<div class="container flex flex-col px-8">
   


    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        @if (request()->query('search'))
        <div class="flex mb-10 items-left">
            <p>You searched for: {{request()->query('search')}}</p>
        </div>
        @endif
        <div class="border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Serial
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Name
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Email 
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Location
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Subject
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Body
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                   @foreach($writeUs as $key=>$data)
                    <tr>

                    <td class="text-sm text-gray-900">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                   {{$key+1}}
                                </div>
                            </div>
                        </td>
                        

                        <td class="text-sm text-gray-900">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                   {{$data->name}}
                                </div>
                            </div>
                        </td>
                        

                        <td class="text-sm text-gray-900">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                {{$data->email}}
                                </div>
                            </div>
                        </td>
                        <td class="text-sm text-gray-900">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                {{$data->location}}
                                </div>
                            </div>
                        </td>
                        <td class="text-sm text-gray-900">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                {{$data->subject}}
                                </div>
                            </div>
                        </td>
                        <td class="text-sm text-gray-900">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                {{$data->body}}
                                </div>
                            </div>
                        </td>

                       

                        <td class="flex px-8 py-8 space-x-2 text-sm font-medium text-right whitespace-nowrap">
                            <a title="Edit" href=""
                                class="text-indigo-600 hover:text-indigo-900">
                                <svg class="w-5 h-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a title="Delete" href=""
                                onclick="return confirm('Are you sure you want to delete it ?')"
                                class="text-indigo-600 hover:text-indigo-900">
                                <svg class="w-5 h-5 text-red-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- More people... -->
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
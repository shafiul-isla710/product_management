@extends('component.layout')

@section('content')


    <div class="h-screen w-3/4 pt-10 p-5 bg-[#FBFBFB] mt-5 m-auto">


            <h1 class=" mt-10 text-center">If you want you can update your information</h1>


            <form class="max-w-sm mt-10 mx-auto" method="post" action="{{route('update.route',$data->id)}}" >
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product_id</label>
                    <input type="" id="email" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{$data->product_id}}" />
                    @error('product_id')
                      <p class="text-red-900">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="" id="email" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{$data->name}}" />
                    @error('name')
                    <p class="text-red-900">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <input type="" id="password" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->description}}" />
                    @error('description')
                    <p class="text-red-900">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="" id="password" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->price}}"  />
                    @error('price')
                    <p class="text-red-900">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                    <input type="" id="password" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{$data->stock}}" />
                </div>

                <div class="flex justify-around gap-10">
                    <a href="">
                        <button type="button">Back</button>
                    </a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>

            </form>



    </div>


@endsection

@extends('component.layout')



@section('content')

        <div class="bg-[#FFF6E3] w-3/4 h-full p-10 m-auto mt-[20px] text-black">

           <div class="flex flex row gap-5">
               <form  method="get" action="{{route('product.route')}}">
                   @csrf
                   <input type="text" name="search" placeholder="search products" class="p-2 outline-none rounded-lg" value="{{old('search',$search)}}">
                   <button type="submit" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
               </form>

           </div>

            <div class="mt-20 text-center">
                <h1 class="mt-10 text-3xl font-bold text-blue-300  ">Our Product</h1>
                <h3 class="mt-2">Product content refers to the combination of product information  <span class="text-red-900 font-bold">with appropriate<br>media content </span> to send a precise product message to a specific target audience via a dedicated channel. <span class="text-red-700">Registration</span></h3>
            </div>




            <div class="relative overflow-x-auto mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <p>
                        {{session('update')}}
                    </p>
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product_id
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Name
                        </th>

                        <th scope="col" class="px-6 py-3">
                          Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Stock Products
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Pictures
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>



                    @foreach($products as $product)

                        <tr class="bg-white border-b dark:bg-gray-800  dark:border-gray-700 align-middle">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{$product->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$product->product_id}}
                            </td>
                            <td class="px-6 py-4">
                                {{$product->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$product->description}}
                            </td>

                            <td class="px-6 py-4">
                                {{$product->price}}
                            </td>

                            <td class="px-6 py-4">
                                {{$product->stock}}
                            </td>

                            <td class="px-6 py-4">

                                <img class=" h-[50px] w-[50px] rounded-lg bg-blue-300 p-1 hover:h-[80px] hover:w-[80px]" src="images/{{$product->image}}">
                            </td>

                            <td class="px-6 py-4 flex flex-row gap-2 mt-3 ">
                                <a href="{{route('edit.route',$product->id)}}">
                                    <button class="hover:border-b-2 border-red-300 font-bold text-blue-700">Edit</button>
                                </a>
                                  /
                                <form action="{{route('delete.route',$product->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')

                                        <button type="submit" class="hover:border-b-2 font-bold border-red-300 text-red-700">Delete</button>

                                </form>
                            </td>
                        </tr>



                    @endforeach

                    </tbody>
                </table>
            </div>


        </div>
@endsection




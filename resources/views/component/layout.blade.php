<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management system</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="w-4/5 bg-[#D4F6FF] mt-8 items-center rounded-lg m-auto p-3 flex justify-between px-20">

    <div class="flex flex-row items-center gap-5">

        <div class="flex flex-row">
            <h2 class="font-bold bg-red-300 p-2 rounded-lg">Product Management</h2>
        </div>
        <div class="flex flex-row gap-5">
            <a class="hover:border-b-2 border-red-600 mt-2" href="{{route('product.route')}}">products</a>

         
        </div>
    </div>

    <div> 
        <a href="{{route('input.route')}}" class="bg-blue-700 text-sm hover:bg-blue-800 text-white p-2 rounded-md"> Add products</a>
    </div>

</div>

@section('content')

@show

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

    <style type="text/tailwindcss">
    @layer utilities {
     .container{
        @apply px-10 mx-auto;
     }
    }
  </style>
    <title>Document</title>

</head>
<body>

    <div class="container">

    <div class="flex justify-between my-5">
    <h2 class="text-red-500 text-xl">Edit-{{$ourPost->name}}</h2>
    <a href="/" class=" bg-green-500 text-black rounded py-2 px-4">Back To Home</a>

    </div>

    <div>

    <form method="POST" action="{{route('update',$ourPost->id)}}"   enctype="multipart/form-data">
        @csrf
       <div class="flex  flex-col gap-5">
        <label for="">Name</label>
       <input type="text" name="name" value="{{$ourPost->name}}">

       @error('name')
         <div class="alert alert-danger text-red-600">{{ $message }}</div>
        @enderror


       <label for="">Discription</label>
        <input type="text" name="description" value="{{$ourPost->description}}">

        @error('description')
         <div class="alert alert-danger text-red-600">{{ $message }}</div>
        @enderror


        <label for="">Add Image</label>
        <input type="file" name="image" id="">

        @error('image')
         <div class="alert alert-danger text-red-600">{{ $message }}</div>
        @enderror


        
        <div>

        <input type="submit" value="Submit" class="bg-green-600 px-4 py-2 rounded">
        </div>
       
       </div>

    </form>
    </div>
    


    </div>
   
</body>
</html>
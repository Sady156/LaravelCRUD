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
    <h2 class="text-red-500 text-xl">Hello World</h2>
    <a href="/create" class=" bg-green-500 text-black rounded py-2 px-4">Add Post</a>

    </div>

    <div>
    <div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 border border-green-400">
          <thead class="bg-green-400 text-black">
            <tr>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase">ID</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase">Name</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase">Description</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase">Image</th>
             
              <!-- <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase ">Image</th> -->
              <th scope="col" class="px-6 py-3 text-end text-xs font-medium  uppercase ">Action</th>
            </tr>
          </thead>
          <tbody>


          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr class="odd:bg-white even:bg-gray-100">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?php echo e($post->id); ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?php echo e($post->name); ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?php echo e($post->description); ?></td>
              
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800  "><img src="image/<?php echo e($post->image); ?>" width=70px alt=""></td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <!-- <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button> -->
              
              <a href="<?php echo e(route('edit',$post->id)); ?>" class="bg-green-600 px-3 py-2 text-white rounded"  >Edit</a>
              <a href="<?php echo e(route('delete',$post->id)); ?>" class="bg-red-600 px-2 py-2 text-white rounded"  >Delete</a>
              </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
          
          </tbody>
        </table>
        <?php echo e($posts->links()); ?>

      </div>
    </div>
  </div>
</div>
    </div>
    


    </div>
   
</body>
</html><?php /**PATH C:\Users\sady\Desktop\laravel project\CRUD\resources\views/welcome.blade.php ENDPATH**/ ?>
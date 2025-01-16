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
    <h2 class="text-red-500 text-xl">Edit-<?php echo e($ourPost->name); ?></h2>
    <a href="/" class=" bg-green-500 text-black rounded py-2 px-4">Back To Home</a>

    </div>

    <div>

    <form method="POST" action="<?php echo e(route('update',$ourPost->id)); ?>"   enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
       <div class="flex  flex-col gap-5">
        <label for="">Name</label>
       <input type="text" name="name" value="<?php echo e($ourPost->name); ?>">

       <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <div class="alert alert-danger text-red-600"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


       <label for="">Discription</label>
        <input type="text" name="description" value="<?php echo e($ourPost->description); ?>">

        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <div class="alert alert-danger text-red-600"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


        <label for="">Add Image</label>
        <input type="file" name="image" id="">

        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <div class="alert alert-danger text-red-600"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


        
        <div>

        <input type="submit" value="Submit" class="bg-green-600 px-4 py-2 rounded">
        </div>
       
       </div>

    </form>
    </div>
    


    </div>
   
</body>
</html><?php /**PATH C:\Users\sady\Desktop\laravel project\CRUD\resources\views/edit.blade.php ENDPATH**/ ?>
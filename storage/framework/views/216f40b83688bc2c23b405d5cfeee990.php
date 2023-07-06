<!doctype html>

<html>

<head>

   <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

<div class="container">

   <header>

       <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   </header>

           <?php echo $__env->yieldContent('content'); ?>

   <footer>

       <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   </footer>
</body>

</html><?php /**PATH H:\Xampp files\htdocs\ITify\resources\views/layout/iTify.blade.php ENDPATH**/ ?>
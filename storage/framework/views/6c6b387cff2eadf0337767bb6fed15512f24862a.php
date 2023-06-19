<form action="<?php echo e(route('import.process')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div>
        <label for="file">Select Excel File:</label>
        <input type="file" name="file" id="file" required>
    </div>
    <div>
        <button type="submit">Upload</button>
    </div>
</form>
<?php /**PATH C:\laragon\www\assesment-1\resources\views/purchase-list.blade.php ENDPATH**/ ?>
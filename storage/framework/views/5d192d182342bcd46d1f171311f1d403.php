<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1><?php echo e($pageTitle); ?></h1>
    <form action="<?php echo e(route('employees.update', $employee->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo e(old('firstName', $employee->firstname)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo e(old('lastName', $employee->lastname)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email', $employee->email)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo e(old('age', $employee->age)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <select class="form-select" id="position" name="position" required>
                <option value="" disabled selected>Choose a position</option>
                <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($position->id); ?>" <?php echo e($position->id == $employee->position_id ? 'selected' : ''); ?>>
                        <?php echo e($position->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Employee</button>
        <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
<?php /**PATH C:\Users\BAKPAO\Tery\SEMESTER 3\PAW\modul13-tery\resources\views/employee/edit.blade.php ENDPATH**/ ?>
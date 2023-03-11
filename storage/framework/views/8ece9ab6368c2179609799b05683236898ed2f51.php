

<?php $__env->startSection("body"); ?>
    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Bangla Literature - Adhunik Zug PDF</h4>
                    </div>

                     <!-- Alert message (start) -->
                    <?php if(Session::has('message')): ?>
                        <div class="alert <?php echo e(Session::get('alert-class')); ?> ">
                             <?php echo e(Session::get('message')); ?>

                        </div>
                    <?php endif; ?>
                    <!-- Alert message (end) -->

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="<?php echo e(route('learn.bangla.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="subject_name" value="Adhunik Zug">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">PDF Title</label>
                                        	<input type="text" id="city-column" class="form-control"  placeholder="Enter PDF Title" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">PDF File Upload</label>
                                            <input type="file" id="city-column" class="form-control" placeholder="Enter Question"
                                                   name="pdf_file_path" required accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Serial</th>
                            <th>PDF Title</th>
                            <th>PDF Path</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($result->title); ?></td>
                                <td><?php echo e($result->pdf_file_path); ?></td>
                                
                                <td class="d-flex">
                                	<a href="<?php echo e(asset($result->pdf_file_path)); ?>" target="_blank" class="btn btn-primary">View</a>
                                    <form class="px-3"
                                        onclick="return confirm('Are you sure you want to delete this contact?')"
                                        method="POST" action="<?php echo e(route('learn.noun.destroy', $result->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger active">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\office\quizeApp\resources\views/Learn/BanglaGrammer/adhunikzug.blade.php ENDPATH**/ ?>
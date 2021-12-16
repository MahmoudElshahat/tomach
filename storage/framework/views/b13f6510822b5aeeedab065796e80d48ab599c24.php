<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> اللغات </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="????">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> اللغات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع لغات الموقع </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th> الاسم</th>
                                                <th>الاختصار</th>
                                                <th>اتجاه</th>
                                                <th>الحالة</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php if(isset($languages)): ?>
                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($language -> name_en); ?></td>
                                                        <td><?php echo e($language -> abbr); ?></td>
                                                        <td><?php echo e($language -> direction); ?></td>
                                                        <td><?php echo e($language -> active); ?></td>
                                                        <td>
                                                            <div class="product-carousel">
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="<?php echo e(route('admin.languages.edite',$language -> id)); ?>" >
                                                                    <button class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1" type="button" class="btn btn-primary me-3 add float-start">
                                                                        <h2>تعديل</h2>
                                                                    </button>                                                                </a>

                                                                 

                                                                <a class="  box-shadow-3 mr-1 mb-1">
                                                                    <button class="btn btn-outline-danger" type="button" onclick="ajax_query('<?php echo e(route('admin.languages.delete',$language-> id)); ?>')"  class="btn btn-primary me-3 add float-start">
                                                                        <i class="bi bi-trash"><h2>حذف</h2></i>
                                                                    </button>
                                                                </a>
                                                                <div id="succes-msg" class="alert alert-success"  style="display:none; text-align:center">
                                                                    <h2>Item Deleted </h2>
                                                                </div>
                                                                

                                                            </div>

                                                        </td>

                                                        


                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/resturant/resources/views/admin/languages/index.blade.php ENDPATH**/ ?>
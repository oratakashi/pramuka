<?php $__env->startSection('title', "Dashboard"); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
    <section class="wrapper">
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol terques">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            0
                        </h1>
                        <p>New Users</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol red">
                        <i class="fa fa-tags"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2">
                            0
                        </h1>
                        <p>Sales</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol yellow">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3">
                            0
                        </h1>
                        <p>New Order</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol blue">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            0
                        </h1>
                        <p>Total Profit</p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->
        <div class="row">
            <div class="col-lg-4">
                <!--user info table start-->
                <section class="card">
                    <div class="card-body">
                        <a href="#" class="task-thumb">
                        <img alt="" class="rounded-circle" style="height:80px; margin-top:10px" src="<?php echo e(base_url('media/photo_user/')); ?><?php echo $_SESSION['photo']; ?>">
                        </a>
                        <div class="task-thumb-details">
                            <h1><a href="#"><?php echo $_SESSION['nama'] ?></a></h1>
                            <p><?php echo $_SESSION['lev_user'] ?></p>
                        </div>
                    </div>
                </section>
                <!--user info table end-->
            </div>
            <div class="col-lg-8">
                <!--work progress start-->
                <section class="card">
                    <div class="card-body progress-card">
                        <div class="task-progress">
                            <h1>Work Progress</h1>
                            <p>Anjelina Joli</p>
                        </div>
                        <div class="task-option">
                            <select class="styled">
                                <option>Anjelina Joli</option>
                                <option>Tom Crouse</option>
                                <option>Jhon Due</option>
                            </select>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                Target Sell
                            </td>
                            <td>
                                <span class="badge badge-pill badge-danger">75%</span>
                            </td>
                            <td>
                            <div id="work-progress1"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                Product Delivery
                            </td>
                            <td>
                                <span class="badge badge-pill badge-success">43%</span>
                            </td>
                            <td>
                                <div id="work-progress2"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                Payment Collection
                            </td>
                            <td>
                                <span class="badge badge-pill badge-info">67%</span>
                            </td>
                            <td>
                                <div id="work-progress3"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                Work Progress
                            </td>
                            <td>
                                <span class="badge badge-pill badge-warning">30%</span>
                            </td>
                            <td>
                                <div id="work-progress4"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                Delivery Pending
                            </td>
                            <td>
                                <span class="badge badge-pill badge-primary">15%</span>
                            </td>
                            <td>
                                <div id="work-progress5"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                Delivery Pending
                            </td>
                            <td>
                                <span class="badge badge-pill badge-primary">15%</span>
                            </td>
                            <td>
                                <div id="work-progress5"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                Delivery Pending
                            </td>
                            <td>
                                <span class="badge badge-pill badge-primary">15%</span>
                            </td>
                            <td>
                                <div id="work-progress5"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                Delivery Pending
                            </td>
                            <td>
                                <span class="badge badge-pill badge-primary">15%</span>
                            </td>
                            <td>
                                <div id="work-progress5"></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </section>
                <!--work progress end-->
            </div>
        </div>

    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/dashboard.blade.php ENDPATH**/ ?>
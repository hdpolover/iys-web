<main id="content" role="main">
<!-- Hero Section -->
<div class="container content-space-2 content-space-lg-3">
    <!-- Heading -->
    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
    <!-- <span class="d-block small font-weight-bold text-cap mb-2">Our Team</span> -->
    <h2>Announcements</h2>
    </div>
    <!-- End Heading -->

    <!-- Card -->
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-header-title">Announcement</h4>
        </div>
        <!-- Body -->
        <div class="card-body">
            <div class="row">
            <?php
                if($announcements == null){
                echo '
                    <div class="d-flex">
                        <div class="container d-flex align-items-center vh-100 mt-5">
                            <div class="w-sm-75 w-lg-50 text-center mx-sm-auto">
                                <div class="mb-7">
                                <img class="img-fluid" src="'.site_url("assets/svg/illustrations/oc-relaxing.svg").'" alt="SVG Illustration">
                                </div>

                                <h1 class="h2">No announcements yet.</h1>
                                <p> Stay tuned for announcements at the Istanbul Youth Summit</p>
                            </div>
                        </div>
                    </div>
                ';
                }

                foreach ($announcements as $announcement) {
                $poster = $announcement->poster == null || $announcement->poster == '' ? site_url('assets/img/img7.jpg') : $announcement->poster;
                echo '
                    <div class="col col-md-4 col-sm-6 mb-6">
                    <!-- Card -->
                    <div class="card card-sm" style="max-width: 20rem;">
                        <img class="card-img-top" src="'.$poster.'" alt="Card image cap">
                        <div class="card-body">
                        <h3 class="card-title">'.$announcement->title.'</h3>
                        <span class="card-text maxText mb-1">'.$announcement->content.'</span>
                        <a class="card-link" href="'.site_url('announcement-general/'.$announcement->id_announcement).'">Read more <i class="bi-chevron-right small ms-1"></i></a>
                        <p class="card-text mt-3">
                            <small class="text-muted">'.date_format(date_create($announcement->date), 'j F Y H:i').'</small>
                        </p>
                        </div>
                    </div>
                    <!-- End Card -->
                    </div>    
                ';
                }
            ?>
            </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="card-footer pt-0">
            <!-- <div class="d-flex justify-content-end gap-3">
            <a class="btn btn-white" href="javascript:;">Cancel</a>
            <a class="btn btn-primary" href="javascript:;">Save changes</a>
            </div> -->
        </div>
        <!-- End Footer -->
        </div>
        <!-- End Card -->
    <!-- End Card Info -->
</div>
<!-- End Hero Section -->
</main>
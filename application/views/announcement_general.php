<main id="content" role="main">
<figure class="position-absolute zi-n1" style="top: 30rem; left: 5rem; width: 90%; height: 20rem;">
    <img class="img-fluid" src="<?= site_url()?>assets/svg/components/shape-5.svg" alt="Image Description">
</figure>
<!-- Hero Section -->
<div class="bg-img-start" style="background-image: url(./assets/svg/components/card-11.svg);">
	<div class="container content-space-2 content-space-b-3 content-space-t-lg-5">
	<div class="w-lg-65 text-center mx-lg-auto">
		<h1 class="mb-0">Announcements</h1>
        <p>Read our latest announcement.</p>
		<!-- <span class="badge bg-warning text-dark rounded-pill mb-3">Baca pengumuman terbaru dari kami</span> -->
	</div>
	</div>
</div>
<div class="container content-space-2 content-space-lg-3">
    <!-- Heading -->
    <!-- End Heading -->

    <!-- Card -->
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

</div>
<!-- End Hero Section -->
</main>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <!-- IGM -->
                    <img src="<?=ROOT . $data->image?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <!-- IMG Title -->
                        <h2><?=$data->title?></h2>
                        <a href="photo-detail">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <!-- IMG Date + time , we have to parse our $date-date to a timestamp with strtotime-->
                    <span class="tm-text-gray-light"><?= date('jS M Y H:i a ',strtotime($data->date)) ?></span>
                    <!-- IMG views -->
                    <span> <?=$data->views?> views </span>
                </div>
</div>
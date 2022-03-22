<!-- HEADER VIEW -->
<?php $this->view("image_gallery/header",$data); ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?=ASSETS?>image_gallery/img/hero.jpg"  >
        <!-- SEARCH FORM -->
        <form class="d-flex tm-search-form" method="GET">
            <input class="form-control tm-search-input" name="find" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <!-- Current Page / Total Page -->
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="<?=$data['page_current']?>" size="1" class="tm-input-paging tm-text-primary"> of <?=$data['page_total']?>
                </form>
            </div>
        </div>

        <!-- Gallery starts -->
        <div class="row tm-mb-90 tm-gallery">

        	<!-- Here comes the images -->
            <?php 
                if (is_array($data['images'])) {

                    foreach ($data['images'] as  $row) {
                        # code...
                        $this->view("image_gallery/single_image",$row);
                    }
                    

                }
            ?>
            
                   
        </div> 
        <!-- Gallery ends -->
        <!-- row -->

        <!-- PAGINATION -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <!-- Prev Page -->
                <a href="<?php echo $data['previous_page']; ?>" class="btn btn-primary tm-btn-prev mb-2 ">Previous</a>
                <div class="tm-paging d-flex">
                    <!-- Page 1 -->
                    <a href="<?=$data['page_1']?>" class="active tm-paging-link">1</a>
                    <!-- Current Page + 1 -->
                    <a href="<?=$data['page_2']?>" class="tm-paging-link"><?=($data['page_current'] + 1)?></a>
                    <!-- Current Page + 2 -->
                    <a href="<?=$data['page_3']?>" class="tm-paging-link"><?=($data['page_current'] + 2)?></a>
                    <!-- Current Page + 3 -->
                    <a href="<?=$data['page_4']?>" class="tm-paging-link"><?=($data['page_current'] + 3)?></a>
                </div>
                <!-- Next Page -->
                <a href="<?php echo $data['next_page']; ?>" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>            
        </div>

    </div> <!-- container-fluid, tm-container-content -->


    <!-- FOOTER VIEW -->
    <?php $this->view("image_gallery/footer"); ?>
    
    

<!-- HEADER VIEW -->
<?php $this->view("image_gallery/header",$data); ?>

<?php
    // Upload image only for logged in users
    if($data['is_logged_in']):

?>

<div style="margin: 6rem auto;max-width:600px;width:100%;padding:2em">

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">            
            <input type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Image Title" required >
            <div id="emailHelp" class="form-text">Add a title to your image</div>
        </div>
        <div class="mb-3">
            
            <input type="file" name='file' class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Upload Image</button>
    </form>

</div>

<?php else:        ?>
    <h2 class="col-6 text-info m-auto mt-5 mb-5 p-5 text-center">
        Please log in to be able to upload files
    </h2>
<?php endif;  ?>

<!-- FOOTER VIEW -->
<?php $this->view("image_gallery/footer"); ?>
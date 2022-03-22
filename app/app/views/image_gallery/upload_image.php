<!-- HEADER VIEW -->
<?php $this->view("image_gallery/header",$data); ?>

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

<!-- FOOTER VIEW -->
<?php $this->view("image_gallery/footer"); ?>
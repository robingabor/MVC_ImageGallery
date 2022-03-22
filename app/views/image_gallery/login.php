<!-- HEADER VIEW -->
<?php $this->view("image_gallery/header",$data); ?>

<div style="margin: 6rem auto;max-width:600px;width:100%;padding:2em">

    <h2 class="col-6 tm-text-primary mb-5">
        <?=$data['page_title']?>
    </h2>

    <form method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>    

</div>

<!-- FOOTER VIEW -->
<?php $this->view("image_gallery/footer"); ?>
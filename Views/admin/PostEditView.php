<?php
include_once "header.php";
?>

<div class="container mb-5">
    <h3 class="text-center mt-5">Edit Post</h3>

    <Form action="/BTL_NHOM10/?controller=post&acction=editPost"  method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Title" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $data[0]['id']   ?>" placeholder="id" readonly required>
        </div>
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $data[0]['Title']   ?>" placeholder="Title"  required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" value="<?php echo $data[0]['date']   ?>" name="date" required>
        </div>
        <div class="mb-3">
            <div class="row">

                <div class="col-12">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="file_img"  accept="image/png, image/jpeg" >

                </div>
            </div>

        </div>
        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>
            <textarea class="form-control" id="paragraph" name="paragraph" rows="6"  required> <?php echo $data[0]['paragraph']   ?> </textarea>
        </div>
        <div class="mb-3 ">
            <input class="btn btn-primary ms-auto" name="button" id="btn-addpost" type="submit" value="Submit">
        </div>


    </Form>



</div>

<?php
include_once "footer.php";
?>
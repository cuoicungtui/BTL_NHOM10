<?php
include_once "Views/admin/header.php";
?>

<div class="container mt-5">
    <h3 class="text-center mt-5">Add Conten</h3>

    <Form action="/BTL_NHOM10/?controller=conten&acction=addConten" method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="ID" class="form-label">ID</label>
            <input type="number" class="form-control" id="ID" name="ID" value=<?php echo $_GET['id'] ?> readonly>
        </div>
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="Title" name="Title" placeholder="Title" >
        </div>
        <div class="mb-3">
            <label for="index" class="form-label">index</label>
            <input type="number" class="form-control" id="index" name="index" required >
        </div>
        <div class="mb-3">
            <div class="row">
            
                <div class="col-6">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="file_img" accept="image/png, image/jpeg" >
                   
                </div>
                <div class="col-6">
                    <label for="name_image" class="form-label">Image</label>
                    <input class="form-control" type="text" id="name_image" name="name_image" placeholder="Name image" >
                   
                </div>
            </div>

        </div>
        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>
            <textarea class="form-control" id="paragraph" name="paragraph" rows="6"></textarea>
        </div>
        <div class="mb-3 ">
            <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
        </div>
        
        
    </Form>

</div>
<?php
include_once "Views/admin/footer.php";
?>
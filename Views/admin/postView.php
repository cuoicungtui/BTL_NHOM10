<?php
include_once "Views/admin/header.php";
?>

<body>

    <div class="container ">

        <h3 class="text-center mt-5">Post</h3>
        <table class="table mt-5">

    </div>

    <a class="btn btn-dark mt-5" href="/BTL_NHOM10/?controller=post&acction=addPostView" role="button">Add post</a>
    <thead>

        <tr>
            <th>Id</th>
            <th class="text-center">image</th>
            <th>Title</th>
            <th>Pragraph</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Conten</th>
        </tr>
    </thead>
    <tbody>
       
        <?php
        foreach ($data as $value) {
        ?>
            <tr>
                <th scope="row"><?php echo $value['id']  ?></th>
                <td class="text-center"><img src="<?php echo $value['img'] ?>" class="img-thumbnail" alt="..." width="75px" height="75px"></td>
                <td><?php echo $value['Title']  ?></td>
                <td><?php echo $value['paragraph']  ?></td>
                <td><?php echo $value['date'] ?></td>
                <td> <a href="/BTL_NHOM10/?controller=post&acction=postEditView&id=<?php echo $value['id'] ?>"><i class="bi bi-pencil-square"></i> </a> </td>
                <td><a href="/BTL_NHOM10/?controller=post&acction=deletePost&id=<?php echo $value['id'] ?>"><i class="bi bi-trash-fill"></i></a></td>
                <td> <a href="/BTL_NHOM10/?controller=conten&acction=loadViewConten&id=<?php echo $value['id'] ?>"> <i class="bi bi-three-dots-vertical"></i> </a> </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
    </table>
    <?php
    include_once "Views/admin/footer.php";
    ?>
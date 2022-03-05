<?php
include_once "Views/admin/header.php";
?>
<div class="container" style="margin-top: 5%;">
    <h1 class="mt-3 text-center">Conten</h1>
    <a class="btn btn-primary mb-5 bt-3" href="/BTL_NHOM10/?controller=conten&acction=addContenView&id=<?php echo $_GET['id'] ?? $data[0]['id']  ?>" role="button">Add conten</a>
    <table class="table table-hover table-bordered">
        <thead>

            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Title</th>
                <th scope="col" class="text-center">Index</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Name_image</th>
                <th scope="col" class="text-center">Paragraph</th>
                <th scope="col" class="text-center">Change </th>
                <th scope="col" class="text-center">Delete </th>
            </tr>
        </thead>
        <tbody>

            <?php             
            
            for ($i = 0; $i < count($data); $i++) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $data[$i]['id_conten']  ?></th>

                    <td><?php echo $data[$i]['h1']  ?></td>
                    <td><?php echo $data[$i]['index_conten']  ?></td>
                    <td class="text-center"><img src="<?php echo $data[$i]['img'] ?>" class="img-thumbnail" alt="..." width="75px" height="75px"></td>
                    <td><?php echo $data[$i]['imgName']  ?></td>
                    <td style=" width: 60%;}"><?php echo $data[$i]['p']  ?></td>
                    <td class="text-center"><a href="/BTL_NHOM10/?controller=conten&acction=editContenView&id_conten=<?php echo $data[$i]['id_conten'] ?>&id=<?php echo $data[$i]['id'] ?>"><i class="bi bi-pencil-square"></i> </a></td>
                    <td class="text-center"><a href="/BTL_NHOM10/?controller=conten&acction=deleteConten&id_conten=<?php echo $data[$i]['id_conten'] ?>&id=<?php echo $data[$i]['id'] ?>"><i class="bi bi-trash"></i></a></td>

                </tr>

            <?php
            }

            ?>



        </tbody>
    </table>
</div>


<?php
include_once "Views/admin/footer.php";
?>
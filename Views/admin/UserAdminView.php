<?php
include_once "Views/admin/header.php";
?>

<body>

    <div class="container ">

        <h3 class="text-center mt-5">User</h3>
        <table class="table mt-5">

    </div>


    <thead>
        
        <tr>
            <th>Id</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>SDT</th>           
            <th>birthday</th>
            <th>BHYT_number</th>      
            <th>CCCD </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $value) {
        ?>
            <tr>
                <th scope="row"><?php echo $value['id_user']  ?></th>
                <td><?php echo $value['Name']  ?></td>
                <td><?php echo $value['Email'] ?></td>
                <td><?php echo $value['SDT']  ?></td>
                <td><?php echo $value['birthday'] ?></td>
                <td><?php echo $value['BHYT_number']  ?></td>
                <td><?php echo $value['CCCD'] ?></td>
              
            </tr>

        <?php
        }
        ?>


    </tbody>
    </table>
<?php
include_once "Views/admin/footer.php";
?>
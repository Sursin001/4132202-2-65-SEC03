<?php
include "condb.php";
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Lastname</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_user ORDER BY user_id ASC";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
        <td><?=$row ['user_id']?></td>
        <td><?=$row ['user_name']?></td>
        <tdr><?=$row ['user_pass']?></tdr>
        <td><button data= "<?=$row ['user_id']?>">EDIT</button></td>
        <td><button data= "<?=$row ['user_id']?>">DEL</button></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>





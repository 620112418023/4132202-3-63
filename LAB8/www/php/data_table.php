<?php
require "conDB.php";
?>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>name</td>
            <td>subject</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM tb_regsiter
        LEFT JOIN tb_subject
        ON tb_regsiter.subject_id = tb_subject.subject_id
        ORDER BY tb_regsiter.id ASC ";
        $result = $mysqli->query($sql);
        while($obj =$result->fetch_object()){
    ?>
        <tr>
            <td><?$obj->id?></td>
            <td><?$obj->pre_name . $obj->name?></td>
            <td><?$obj->$subject_name?></td>
            <td><a herf="/php/del.php?id=<?= $obj->id ?>&sub_id=<?= $obj->subject_id ?>"> DEL</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
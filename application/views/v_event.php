<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1>
    <table border="1">
        <tr>
            <th>Event</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
        </tr>
        <?php foreach ($tb_event as $u) { ?>
            <tr>
                <td><?php echo $u->event ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->Deskripsi ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
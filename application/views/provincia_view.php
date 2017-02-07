<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Paginación Codeigniter 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <table class="table table-striped">
    <?php
    if($provincias)
    {
    ?>
        <tr>
            <th>
                Provincia
            </th>
        </tr>
        <?php
        foreach ($provincias as $provincia)
        {
        ?>
            <tr>
                <td>
                    <?php echo $provincia->provincia ?>
                </td>
            </tr>
        <?php
        }
        ?>
    <?php
    }
    ?>
    </table>
    <?php echo $this->pagination->create_links() ?>

</body>
</html>
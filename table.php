<?php include("config.php"); ?>

<?php
    $entriesRepository = new App\Lists\EntriesRepository($pdo);
    $res = $entriesRepository->fetchEntries();
?>

<table border="1" width="100%">
    <?php foreach($res AS $row): ?>
        <tr>
            <td width="20%" align="center"> 
                <?php echo $row->title; ?>
            </td>
            <td width="70%">
                <?php echo $row->description; ?>
            </td>
            <td width="10%" align="center">
                <?php echo $row->releasedate; ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<form action="table.php" method="post">
    <input type="text" name="title" id="idTitle" placeholder="Game Title" style="width:100%;padding:5px;margin:5px 0;" />
    <input type="text" name="description" id="idDescription" placeholder="Game Description" style="width:100%;padding:5px;margin:5px 0;" />
    <input type="text" name="releasedate" id="idReleasedate" placeholder="Game Release Year" style="width:100%;padding:5px;margin:5px 0;" />
    <input type="submit" name="submit" value="Enter" style="width:30%;padding:5px;margin:5px 0; float:right;" />
</form>
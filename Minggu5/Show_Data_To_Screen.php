<table border="1">
    <tr>
        <th> No. </th>
        <th> NIM </th>
        <th> Nama </th>
        <th> Program Studi </th>
    </tr>
    <?php
        $q = strval($_GET['q']);
        include "Connection_To_Database.php";
        $query = "SELECT * FROM mahasiswa WHERE Prodi = '".$q."' ORDER BY NIM ASC";
        $result = mysqli_query($connection, $query);
        $i = 0;
        while ($data = mysqli_fetch_array($result)) :
            $i++;
    ?>
        <tr>
            <td> <?= $i ?> </td>
            <td> <?= $data["NIM"] ?> </td>
            <td> <?= $data["Nama"] ?> </td>
            <td> <?= $data["Prodi"] ?> </td>
        </tr>
    <?php
        endwhile
    ?>
</table>
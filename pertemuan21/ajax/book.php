<!-- <h2>Hello World!</h2> -->
<?php 
    // sleep(1);
    usleep(500000);
    require '../functions.php';

    $keyword = $_GET["keyword"];

    $query = "SELECT * FROM books WHERE judul LIKE '%$keyword%' OR penulis LIKE '%$keyword%' OR penerbit LIKE '%$keyword%' OR ISBN LIKE '%$keyword%'";
    $book = query($query);
    
?>
<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>ISBN</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $book as $row ) :?>
<tr>
    <td><?= $i ?></td>
    <td>
        <a href="edit.php?id=<?= $row["id"]; ?>">Ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" >hapus</a>
    </td>
    <td>
        <img src="img/<?= $row["gambar"]; ?>" width="75">
    </td>
    <td><?= $row["judul"]; ?></td>
    <td><?= $row["penulis"]; ?></td>
    <td><?= $row["penerbit"]; ?></td>
    <td><?= $row["isbn"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>
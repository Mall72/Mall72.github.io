<center><table border="1" bgcolor="#B0C4DE"></center>
    <tr>
        <td><a href="index.html">Home</a></td>
        <td><a href="Rumusdatar.php">Rumus bangun datar</a></td>
        <td><a href="Rumusruang">Rumus bangun ruang</a></td>
    </tr>
    <tr>
        <td colspan="3" bgcolor="#B0C4DE">Rumus bangun datar</td>
    </tr>
 <tr>
    <th>Masukan</th>
    <th>Hasil</th>
    <th>Gambar</th>
  </tr>
  <tr>
<p>
    <form name="panjang" method="POST" action="Rumusdatar.php">
    <td>Panjang   :<br/>
    <input type="text" name="panjang" value=""><p>
     Lebar  :<br/>
    <input type="text" name="lebar" value=""><p>
    <input type="submit" name="hasil" value="hasil"></td>
 
    <td><?php if (isset($_POST['hasil']))
{
    echo "kode program php - keliling dan luas persegi panjang";
    echo "<hr>";
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    
    $keliling_persegi_panjang = (2 * $panjang) + (2 * $lebar);
    $luas_persegi_panjang = $panjang * $lebar;

    echo "Panjang persegi = $panjang <br/>";
    echo "Lebar persegi = $lebar <br/>";

    echo "<br>";

    echo "Keliling persegi panjang = 2 *($panjang + $lebar)
         = $keliling_persegi_panjang <br>";
    
    echo "Luas persegi panjang = $panjang * $lebar
         = $luas_persegi_panjang <br>";
}
?></td></form>
  <th width="150"><img src="1684130106847.png" width="130" height="130"></th>
</tr>
</table>
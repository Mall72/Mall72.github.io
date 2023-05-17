<center><table border="1" bgcolor="#B0C4DE"></center>
    <tr>
        <td><a href="index.html">Home</a></td>
        <td><a href="Rumusdatar.php">Rumus bangun datar</a></td>
        <td><a href="Rumusruang.php">Rumus bangun ruang</a></td>
    </tr>
    <tr>
        <td colspan="3" bgcolor="#B0C4DE">Rumus bangun ruang</td>
    </tr>
 <tr>
    <th>Masukan</th>
    <th>Hasil</th>
    <th>Gambar</th>
  </tr>
  <tr>
<p>
    <form name="kubus" method="POST" action="Rumusruang.php">
    <td>Sisi  :<br/>
    <input type="text" name="sisi" value=""><p>
    <input type="submit" name="hasil" value="hasil"></td>
 
    <td><?php if (isset($_POST['hasil']))
{
    echo "kode program php - luas dan volume kubus";
    echo "<hr>";
    $sisi = $_POST['sisi'];
    
    $luas_kubus = (6 *($sisi * $sisi));
    $volume_kubus = ($sisi * $sisi * $sisi);

    echo "Sisi Kubus = $sisi <p>"; 

    echo "Luas kubus = 6 *($sisi * $sisi) = $luas_kubus <br/>";
    echo "Volume kubus = s3 ($sisi * $sisi * $sisi) = $volume_kubus <br/>";
}
?></td></form>
  <th width="150"><img src="1684131288168.png" width="130" height="130"></th>
</tr>
</table>
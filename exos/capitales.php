<p>
  Creer un tableau qui stock les pays d'europe avec leur capitale.
  Afficher ce tableau via une boucle
</p>
<?php
$capitales = [
  "France" => "Paris",
  "Espagne" => "Madrid",
  "Belgique" => "Bruxelles"
];
echo "<table>
        <tr>
          <th>Pays</th>
          <th>Capitale</th>
        </tr>";
foreach ($capitales as $pays => $capitale) {
  echo "<tr>
          <th>$pays</th>
          <td>$capitale</td>
        </tr>";
}
echo "</table>";
?>
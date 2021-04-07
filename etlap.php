<form method="POST">
    <input class="btn btn-primary" type="submit" value="Kosárba">
    <input type="hidden" name="kosar" value="true">
<table class="table">
    <thead>
        <tr>
            <th>Kép</th>
            <th>Név</th>
            <th>Leírás</th>
            <th>Ár</th>
            <th>Kérem</th>
        </tr>
    </thead>
    <tbody>
        
<?php
$result = $mysqli->query("SELECT `pazon`, `pnev`, `par`, `pimages`, `pleiras` FROM `ppizza` WHERE 1");
while ($row = $result->fetch_assoc()) {
    $leiras = '<ul>';
    foreach (explode(",", $row['pleiras']) as $value) {
        $leiras .= '<li>'.$value.'</li>';
    }
    $leiras .= '</ul>';
        echo '<tr>'
            .'<td><img src="images/Pizza_'.$row['pnev'].'.png" class="PizzaKep" alt="Pizza_'.$row['pnev'].'.png" title="'.$row['pnev'].'"></td>'
            .'<td>'.$row['pnev'].'</td>'
            .'<td>'.$leiras.'</td>'
            .'<td>'.$row['par'].'</td>'
            .'<td><input type="checkbox" name="pizzaid[]" value="'.$row['pazon'].'"></td>'
        .'</tr>';
}
?>
    </tbody>
</table>
</form>



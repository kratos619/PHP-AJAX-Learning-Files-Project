<?php
include('ini.php');

$query = "SELECT * FROM cars";

$result = mysqli_query($connection,$query);
if(!$result){
    die("something Went Wrong");
}
while($row = mysqli_fetch_assoc($result)){
    $cars_id = h($row['id']);
    $cars_name = h($row['car']);

    ?>
    <tr>
        <td><?php echo h($cars_id); ?></td>
        <td><?php echo h($cars_name); ?></td>
    </tr>

    <?php
}
//redirect_to("display_cars.php");

?>
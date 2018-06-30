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
        <td><a rel="<?php echo $cars_id; ?>" class="title-link" href="javascript:void(0)" ><?php echo h($cars_name); ?></a></td>
    </tr>

    <?php
}
//redirect_to("display_cars.php");

?>
<script>
$('.title-link').on('click',function () {
    $('#action_container').show();
    var id = $(this).attr('rel');
    //console.log(id);
    $.post('process.php', {id:id} , function (data) { 

      //  console.log(data);
        $('#action_container').html(data);
     })

 });
</script>
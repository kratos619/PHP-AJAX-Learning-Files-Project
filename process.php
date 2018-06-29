<?php

include('ini.php');
if(isset($_POST['id'])){
$selected_id  = h($_POST['id']);   

$query = "SELECT * FROM cars where id = '$selected_id' ";

$result = mysqli_query($connection,$query);
if(!$result){
    die("something Went Wrong");
}
while($row = mysqli_fetch_assoc($result)){
    $cars_id = h($row['id']);
    $cars_name = h($row['car']);

    ?>
    <!-- html -->
    <div class="input-field">
        <input class="car_name" rel="<?php echo $cars_id; ?>" type="text" value="<?php echo $cars_name; ?>" name="car_name" class="validate car_name" >
        <label class="active" for="first_name2">Car Name</label>
        <input type="button" value="Update"  name="car_name"  class="btn update" >
        <input type="button" value="Delete"  name="car_name" class="btn delete" >
    </div>
    <?php
}
}
// update data
if(isset($_POST['update'])){
echo "its work";

}

?>
<script>
    $(document).ready(function(){
        var id;
        var title;
        var update = "update";
        var deletethis = "deletethis";

        $('.car_name').on('input',function(){
            id = $(this).attr('rel');
            title = $(this).val();
            //console.log(title);


        });

        $('.update').on('click',function() {
            //console.log('a');
            $.post('process.php',{id:id, title:title, update:update, deletethis:deletethis},function(data){ 
             console.log(data);
             })
        });

    });
</script>
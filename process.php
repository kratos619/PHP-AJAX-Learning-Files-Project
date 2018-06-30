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
    <div id="myForm" class="input-field">
        <input class="car_name" rel="<?php echo $cars_id; ?>" type="text" value="<?php echo $cars_name; ?>" name="car_name" class="validate car_name" >
        <label class="active" for="first_name2">Car Name</label>
        <input type="button"  value="Update"  name="car_name"  class="btn update" onclick="M.toast({html: 'Data SuccessFully Update'})" >
        <input type="button" value="Delete"  name="car_name" class="btn delete" onclick="M.toast({html: 'Data SuccessFully Delete'})" >
        <button class="btn btn-close"><i class="large material-icons">close</i></button>
    </div>
    <?php
}
}
// update data
if(isset($_POST['update'])){
$selected_id = escape_string($_POST['id']); 
$selected_car_name = escape_string($_POST['title']); 

$query = "UPDATE cars SET car = '$selected_car_name' where id = '$selected_id'";
$result = mysqli_query($connection,$query);
if(!$result){
    die("something Went Wrong" . mysqli_error($connection) );
}

}
// update data
if(isset($_POST['deletethis'])){
$selected_id = escape_string($_POST['id']); 
$selected_car_name = escape_string($_POST['title']); 

$query = "DELETE FROM cars where id = '$selected_id'";
$result = mysqli_query($connection,$query);
if(!$result){
    die("something Went Wrong" . mysqli_error($connection) );
}

}
?>
<script>
    $(document).ready(function(){
        var id;
        var title;
        var update = "update";
        var deletethis = "deletethis";
// extract data for update
        $('.car_name').on('input',function(){
            id = $(this).attr('rel');
            title = $(this).val();
            //console.log(title)

        });
        //update post function
        $('.update').on('click',function() {
            //console.log('a');
            $.post('process.php',{id:id, title:title, update:update, deletethis:deletethis},function(data){ 
             
             });
             
        });

        // delete function
        
        $('.delete').on('click',function() {
            //console.log('a');
             id = $('.title-link').attr('rel');
            $.post('process.php',{id:id, deletethis:deletethis},function(data){ 
             //console.log(id);
             console.log('delete Successfully');
             });
             
        });    

        $('.btn-close').on('click',function () { 
            $('#action_container').hide();
         });
    });
</script>
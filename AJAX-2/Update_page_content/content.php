
    <?php
$categories = [
    [
        'id' => 1,
        "name" => "Furniture",
        'subcategories' =>
         [
            ['id'=> 1, 'name'=> "Beds"],
            ['id'=> 2, 'name'=> "Bench"],
            ['id'=> 3, 'name'=> "tables"],
            ['id'=> 4, 'name'=> "sofa"]
        ]
    ],
    [
        'id' => 2,
        "name" => "Lighting",
        'subcategories' =>
         [
            ['id'=> 1, 'name'=> "Celing"],
            ['id'=> 2, 'name'=> "Floor"],
            ['id'=> 3, 'name'=> "Table"],
            ['id'=> 4, 'name'=> "Wall"]
        ]
    ],
    [
        'id' => 3,
        "name" => "Accessories",
        'subcategories' =>
         [
            ['id'=> 1, 'name'=> "Name"],
            ['id'=> 2, 'name'=> "Outdoor"],
            ['id'=> 3, 'name'=> "pillow"],
            ['id'=> 4, 'name'=> "Wall And Art"]
        ]
    ],

];

$category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : 0;
foreach ($categories as $category) {
  if($category['id'] == $category_id){
    $subcategories = $category['subcategory'];
    foreach ($subcategories as  $subcategoty) {
      echo `<option value="{$subcategoty['id']}">`;
      echo $subcategoty['name'];
      echo "</option>";
    }
  }
}


    ?>

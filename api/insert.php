<?php
// 新增
// from(從) ../modal/$table.php
include_once "db.php";
$table=$_POST['table'];
// ucfirst = 第一個字大寫的函式
$db=ucfirst($table);

if(!empty($_FILES['img']['tmp_name'])){
    
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    // ****************************************
    $_POST['img']=$_FILES['img']['name'];
    
};
// 刪除陣列中的 table value
unset($_POST['table']);

if(isset($_POST['pw2'])){
    unset($_POST['pw2']);
}


$$db->save($_POST);
// 跳轉頁面
to("../admin.php?do=$table");

// $_POST['img'];
// $text=$_POST['text'];

?>



<!-- 
 $_FILES['img']['name'] 為$_FILES中的array['img']
例如
ex:$_FILES=['img'=>['name'=>'abc','tmp_name'=>'cba']

]

 $array1=[
    'img'=>[
        'name' => 'mm.aa',
        'error' => '0']
        ,'cat'=>[1=>1,123]
];
echo "<pre>";
print_r($array1['img']['name']);
echo "</pre>";
 -->
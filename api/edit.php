<!-- from backend/$table -->
<!-- 編輯 -->
<?php

include_once "db.php";

$table=$_POST['table'];

$db=ucfirst($table);



if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        // 刪除   in_arrar (可當作複選的概念)
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $$db->del($id);

            // 更新
        }else {
            $row=$$db->find($id);
            switch ($table) {
                // case 'title':
                //     $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
                //     $row['text']=$_POST['text'][$idx];
                // break;
                case 'admin':
                    // *********************
                        $row['acc']=$_POST['acc'][$idx];
                        $row['pw']=$_POST['pw'][$idx];
                    break;
                case 'menu':
                        $row['href']=$_POST['href'][$idx];
                    // 考試專用: 耦合性高
                        $row['text']=$_POST['text'][$idx];
                        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    break;
                case 'introduction':
                        $row['name']=$_POST['name'][$idx];
                        $row['text']=$_POST['text'][$idx];
                        $row['societies']=$_POST['societies'][$idx];
                        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                default:
                // in_arrar (可當作複選的概念)
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                if(isset($_POST['text'])){
                    $row['text']=$_POST['text'][$idx];
                }
                // $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                // if(isset($_POST['text'])){
                //     $row['text']=$_POST['text'][$idx];
                // }
            }
            $$db->save($row); 
        }
    }
}
// dd($table);
// header(location:admin.php?do=$table);
to("../admin.php?do=$table")
// dd($_POST);
?>
<style>

</style>

<div class="col-8 inner">
    <h2 class="title">學生介紹</h2>
    <hr>
    <table class="table">
        <tbody>

            <div class="p-4 int">
                <div class="int-logo">
                    <tr>
                        <th width="10%">頭像</th>
                        <th width="30%">學生姓名</th>
                    </tr>
                    <?php

                // 分頁
                $div=5;
                $total=$Introduction->count();
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;

                // 空格很重要
                $rows=$Introduction->all(['sh'=>1]," limit $start,$div");
                

                 // $rows=$Comic->all(['sh'=>1], "limit 2");
                 // *********
                 foreach($rows as $row):
                 ?>
                    <tr>
                        <td width="10%">
                            <img src="./upload/<?=$row['logo'];?>" class="img-fluid mt-4 "
                                style="width:150px;height:150px;">
                        </td>
                        <td width="30%" class="int-name">
                            <?=$row['name'];?>
                        </td>
                    </tr>
                    <!-- <tr>
                    </tr> -->
                </div>
                <?php endforeach ;?>
        </tbody>
    </table>


    <!--event-banner-box  -->
    <div class="event-banner-box">
        <div class="inner">
        </div>
        <ul>
            <li>
                <a href="https://www.youtube.com/@bluearchive_tw" target="_blank" rel="noopener noreferrer">
                    <img src="./icon/04820x197.jpg" alt="" class="img-fluid ">
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/TW.BlueArchive/" target="_blank" rel="noopener noreferrer">
                    <img src="./icon/05820x197.jpg" alt="" class="img-fluid ">
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
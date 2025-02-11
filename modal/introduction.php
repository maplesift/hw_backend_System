<!-- from backend/$do.php -->
<h3 class="cent title">新增學生介紹</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <style>
    .padding-l {
        padding-left: 7px;
    }

    .padding-t {
        padding-top: 7px;
    }


    .w {
        width: 12%;
    }
    </style>
    <table>
        <tr>
            <td class="title padding-l">Logo:</td>
            <td><input type="file" name="logo" id="logo" class="form-control"></td>
        </tr>
        <tr>
            <td class="title">大圖:</td>
            <td><input type="file" name="img" id="img" class=" form-control"></td>
        </tr>
        <tr class="padding-t">
            <td class="title w">學生姓名:</td>
            <td><input type="text" name="name" id="name" class="form-control"></td>
        </tr>

        <tr>
            <td class="title">學園:

            </td>
            <td>
                <select class="form-select" id="schools" name="schools">
                    <option value="abydos" data-image="./icon/abydos.png">アビドス</option>
                    <option value="arius" data-image="./icon/arius.png">アリウス</option>
                    <option value="valkyrie" data-image="./icon/valkyrie.png">ヴァルキューレ</option>
                    <option value="gehenna" data-image="./icon/gehenna.png">ゲヘナ</option>
                    <option value="sengaikyo" data-image="./icon/sengaikyo.png">山海経</option>
                    <option value="toriniti" data-image="./icon/toriniti.png">トリニティ</option>
                    <option value="hyakkiyako" data-image="./icon/hyakkiyako.png">百鬼夜行</option>
                    <option value="minenia" data-image="./icon/minenia.png">ミレニア</option>
                    <option value="reddouinta" data-image="./icon/reddouinta.png">レッドウィンター</option>
                    <option value="srt" data-image="./icon/srt.png">SRT</option>
                </select>
            </td>
        </tr>
        <tr class="padding-t">
            <td class="title ">社團:</td>
            <td><input type="text" name="societies" id="societies" class="form-control"></td>
        </tr>

        <tr class="mt-3">
            <td class="title">文字介紹:</td>
            <td>
                <textarea name="text" style="width:515px;height:100px;" class="cent form-control"></textarea>
            </td>
        </tr>
    </table>
    <div class="cent mt-3">
        <!-- *** 藏變數   -->
        <input type="hidden" name="table" value="<?=$_GET['table']?>">

        <input type="submit" value="新增" class="btn btn-success">
        <input type="reset" value="重置" class="btn btn-info">
    </div>
</form>
<script>
$(document).ready(function() {
    $('#schools').select2({
        templateResult: formatOption,
        templateSelection: formatOption
    });

    function formatOption(option) {
        if (!option.id) {
            return option.text;
        }
        var img = $(option.element).data('image');
        return $('<span><img src="' + img + '" width="25px" height="25px"/> ' + option.text + '</span>');
    }
});
</script>
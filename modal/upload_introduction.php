<h3 class="cent title">修改學生介紹圖片:</h3>
<hr>
<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="title">Logo:</td>
            <td><input type="file" name="logo" id="logo" class="form-control"></td>
        </tr>
        <tr>
            <td class="title">大圖:</td>
            <td><input type="file" name="img" id="img" class="form-control"></td>
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

    </table>
    <div class="cent">
        <input type="submit" value="修改" class="btn btn-warning">
        <input type="reset" value="重置" class="btn btn-info">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
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
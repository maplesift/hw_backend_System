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
                    <option value="abydos">アビドス</option>
                    <option value="arius">アリウス</option>
                    <option value="valkyrie">ヴァルキューレ</option>
                    <option value="gehenna">ゲヘナ</option>
                    <option value="sengaikyo">山海経</option>
                    <option value="toriniti">トリニティ</option>
                    <option value="hyakkiyako">百鬼夜行</option>
                    <option value="minenia">ミレニア</option>
                    <option value="reddouinta">レッドウィンター</option>
                    <option value="srt">SRT</option>
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
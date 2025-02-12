# 如何修改 JavaScript 函式以正確使用模板字串

你原本的程式碼中，URL 部分使用了單引號包住字串，但裡面卻使用了 ES6 模板字串的語法 (`${id}`)，這會導致無法正確解析插值。解決方法有兩種：

## 方法 1：使用反引號 (Template Literals)

使用 ES6 的模板字串語法，必須以反引號 <code>`</code> 包住字串，修改後的程式碼如下：

```javascript
function del(id) {
    Swal.fire({
        title: "確定要刪除嗎?",
        text: "這個動作為不可逆",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "是  我要刪除!",
        cancelButtonText: "還是算了!"
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = `./api/del.php?id=${id}&table=<?=$do;?>`;
        }
    });
}

# 简单的留言板

http://message.xuchunyang.cn/

## 网站前端

用 `<form>` 渲染一个表单，让用户输入信息，如 hello，当用户提交时，浏览器访问 `http://your-server.com/add-message.php?message=hello`

```html
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
</head>
<body>

<form action="/add-message.php">
    <input name="message">
    <button>发送留言</button>
</form>

</body>
```

## 网站后端

前端只能用 HTML，但后端用什么语言均可，这里使用 PHP。

上面的表单提交时，会发送一个 `GET /add-message.php?message=hello` 请求，PHP 语言，会自动把请求中的 `message` 参数解析出来，放大 `$_GET` 这个数组中。

我们把用户提交的信息 `message` 读取出来，放到我们的数据库 `database.txt` 中。

```php
<?php
$message = $_GET['message'] . "\n";
file_put_contents('database.txt', $message, FILE_APPEND);
?>

<a href="database.txt">查看所有留言</a>
```
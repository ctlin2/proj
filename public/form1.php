<!DOCTYPE html>
<html lang="zh-TW">
<head>  
    <title>PHP全能網頁設計師</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/layout.css">
    <script src="js/layout.js"></script>
</head>
<body>
    <form method="POST" action="processor1.php">
    一般用法，姓名：<input type="text" name="custName1" size="10"><p>
    設定欄位值，姓名：<input type="text" name="custName2" value="欄位值" size="20"><p>
    設定最多填寫3個字元，姓名：<input type="text" name="custName3" size="30" maxlength="3"><p>
    設定唯讀屬性，姓名：<input type="text" name="custName4" value="唯讀屬性，無法修改" size="20" readonly><p>
    <input type="submit" value="送出">
    </form>
</body>
</html>
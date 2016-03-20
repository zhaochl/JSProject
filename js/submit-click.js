<form action="update.php" method="post" onsubmit="window.confirm('确定更新线上服务器么?')">
<input type="submit" value="上线" onclick="window.confirm('确定更新线上服务器么?')">
<input type="hidden" name="go" value="yes">
</form>

onclick confirm return false 只是阻止click執行，并不阻止sumbit 函数执行
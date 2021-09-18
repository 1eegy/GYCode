<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<meta charset="utf-8">
<style type="text/css">
table.hovertable {
    font-family: verdana,arial,sans-serif;
    font-size:11px;
    color:#333333;
    border-width: 1px;
    border-color: #999999;
    border-collapse: collapse;
}
table.hovertable th {
    background-color:#c3dde0;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #a9c6c9;
}
table.hovertable tr {
    background-color:#d4e3e5;
}
table.hovertable td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #a9c6c9;
}
</style>
 
<!-- Table goes in the document BODY -->
<table class="hovertable">
<tr>
    <th>姓名</th><th>在岗</th><th>开会</th><th>外出</th><th>请假</th><th>备注</th>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td>大明</td>
	 <td><input type="button" id="btn" value="选择" /></td>
	 <td>Item 1C</td><td>Item 1C</td><td>Item 1C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td>小明</td><td>Item 2B</td><td>Item 2C</td><td>Item 1C</td><td>Item 1C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td>李白</td><td>Item 3B</td><td>Item 3C</td><td>Item 1C</td><td>Item 1C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td>杜甫</td><td>Item 4B</td><td>Item 4C</td><td>Item 1C</td><td>Item 1C</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td>茅台</td><td>Item 5B</td><td>Item 5C</td><td>Item 1C</td><td>Item 1C</td>
</tr>
</table>
    <script type="text/javascript">
        document.getElementById("btn").onclick = function(){
            alert("1"); //给按钮添加点击事件
        }
    </script>
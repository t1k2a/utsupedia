<table>
    <form action="/pedia" method="POST">
        {{ csrf_field() }}
        <tr><th>記事タイトル: </th><td><input type="text" name="title"></td></tr>
        <tr><th>本文: </th><td><input type="text" name="contents"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>
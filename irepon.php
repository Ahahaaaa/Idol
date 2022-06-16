<table id="list">
  <thead>
    <tr id="list-title">
      <th class="id">ID</th>
      <th class="name">名前</th>
      <th class="remarks">備考</th>
      <th class="updated">更新日</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr class="data-edit">
      <form method="post" action="<?php print basename( __FILE__ ); ?>">
        <td class="id">1</td>
        <td class="name_value">テスト 太郎</td>
        <td class="name_change"><input type="text" name="name" value="テスト 太郎" maxlength="128"></td>
        <td class="remarks_value">めもめも</td>
        <td class="remarks_change"><input type="text" name="remarks" value="めもめも" maxlength="128"></td>
        <td class="updated">2019-02-01</td>
        <td class="button">
          <input type="button" value="編 集" class="edit-line">
          <input type="submit" value="保 存" class="save-line">
          <input type="button" value="キャンセル" class="cancel-line">
        </td>
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="mode" value="update">
      </form>
    </tr>
  </tbody>
  <tfoot>
    <tr id="add">
      <form method="post" action="<?php print basename( __FILE__ ); ?>">
        <td class="id"></td>
        <td class="name"><input type="text" name="name" maxlength="128"></td>
        <td class="remarks"><input type="text" name="remarks" maxlength="128"></td>
        <td class="updated"></td>
        <td class="data-edit"><input type="submit" value="追 加"></td>
        <input type="hidden" name="mode" value="add">
      </form>
    </tr>
  </tfoot>
</table>
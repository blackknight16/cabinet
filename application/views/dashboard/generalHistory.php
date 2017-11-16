<table class='submenu-container'><tr>
    <td><span class='submenu-title'>Общая история</span></td>
    <td class='submenu-panel2'>
        <a class="submenu-icon edit" href="#"></a>
        <a class="submenu-icon add" href="#"></a>
        <a class="submenu-icon delete" href="#"></a>
        <a class="submenu-icon time" href="#"></a>
        <a class="submenu-icon strelka" href="#"></a>
    </td>
</tr></table>
<table id="general-history-table" class="compact-table">
    <thead>
        <tr>
            <th>Дата</th>
            <th>ФИО</th>
            <th>Таб.номер</th>
            <th>Офис</th>
            <th>Событие</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($model as $k=>$v) { ?>
    <tr>
        <td><?=$v->Date ?></td>
        <td><?=$v->Fio ?></td>
        <td><?=$v->PersonnelNumber ?></td>
        <td><?=$v->Office ?></td>
        <td><?=$v->Event ?></td>
    </tr>
<?php } ?>
    </tbody>
</table>
<ul class="submenu-panel3">
    <li>Общая история</li>
    <li>Мониторинг</li>
    <li>Вкладка история</li>
</ul>


<script type="text/javascript">
    $(function(){
        $('#general-history-table').dataTable({
            "pageLength": 5,
            "searching": false,
             "bInfo": false,
             "bLengthChange": false,
             language: {
                "processing": "Подождите...",
                "search": "Поиск:",
                "lengthMenu": "Показать _MENU_ записей",
                "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                "infoEmpty": "Записи с 0 до 0 из 0 записей",
                "infoFiltered": "(отфильтровано из _MAX_ записей)",
                "infoPostFix": "",
                "loadingRecords": "Загрузка записей...",
                "zeroRecords": "Записи отсутствуют.",
                "emptyTable": "В таблице отсутствуют данные",
                "paginate": {
                    "first": "Первая",
                    "previous": "Предыдущая",
                    "next": "Следующая",
                    "last": "Последняя"
                },
                "aria": {
                    "sortAscending": ": активировать для сортировки столбца по возрастанию",
                    "sortDescending": ": активировать для сортировки столбца по убыванию"
                }
            }
  });
})
//# sourceURL=generalHistory.js
</script>
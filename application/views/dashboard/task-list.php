<table class='submenu-container'>
    <tr>
        <td><span class='submenu-title'>Список задач</span></td>
        <td class='submenu-panel2'>
            <a class="submenu-icon edit" href="#"></a>
            <a class="submenu-icon add" href="#"></a>
            <a class="submenu-icon delete" href="#"></a>
            <a class="submenu-icon time" href="#"></a>
            <a class="submenu-icon strelka" href="#"></a>
        </td>
    </tr>
    <tr>
        <td class='submenu-title'></td>
        <td class='submenu-panel2'>
            <a class="submenu-time " href="#">Сегодня</a>
            <a class="submenu-time " href="#">2 дня</a>
            <a class="submenu-time " href="#">Неделя</a>
            <a class="submenu-time " href="#">Месяц</a>
            <a class="submenu-time " href="#">Все</a>
        </td>
    </tr>
</table>
<table id="task-table" class="compact-table">
    <thead><tr>
        <th>Дата постановки</th>
        <th>Время начала</th>
        <th>Время окончания</th>
        <th>Описание</th>
        <th>Показать на карте</th>
    </thead></tr>
    <tbody>
<?php foreach($model as $k=>$v) { ?>
    <tr>
        <td><?=$v->CreateDate ?></td>
        <td><?=$v->BeginTime ?></td>
        <td><?=$v->EndTime ?></td>
        <td><?=$v->Place ?></td>
        <td><?=$v->Description ?></td>
    </tr>
<?php } ?>
    </tbody>
</table>
<ul class="submenu-panel3">
    <li>Личные</li>
    <li>От системы</li>
    <li>От руководителя</li>
    <li>Все задачи</li>
</ul>

<script type="text/javascript">
    $(function(){
        $('#task-table').dataTable({
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
//# sourceURL=task.js
</script>
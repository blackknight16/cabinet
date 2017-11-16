<table class='submenu-container'><tr>
        <td><span class='submenu-title'>GM Phone</span></td>
<td class='submenu-panel2'>
    <a class="submenu-icon edit" href="#"></a>
    <a class="submenu-icon add" href="#"></a>
    <a class="submenu-icon delete" href="#"></a>
    </td>
    </tr></table>
<table><tr>
        <td class='phone'>
            <div class='row1'><button>Добавить</button></div>
            <div class='row2'>
                <a class='phone-icon callin' href="#"></a>
                <a class='phone-icon callout' href="#"></a>
                <a class='phone-icon reload' href="#"></a>
            </div>
                    <div><input id="phonenumber" type='text' placeholder="Введите номер"/></div>
                
            <table>
                <tr>
                    <td class='phone-button'>1</td>
                    <td class='phone-button'>2</td>
                    <td class='phone-button'>3</td>
                </tr><tr>
                    <td class='phone-button'>4</td>
                    <td class='phone-button'>5</td>
                    <td class='phone-button'>6</td>
                </tr><tr>
                    <td class='phone-button'>7</td>
                    <td class='phone-button'>8</td>
                    <td class='phone-button'>9</td>
                </tr><tr>
                    <td class='phone-button'>*</td>
                    <td class='phone-button'>0</td>
                    <td class='phone-button'>#</td>
                </tr>
            </table></td>
            <td><div id="phonetabs">
                    <ul>
                        <li><a href="#tab1">Журнал</a></li>
                        <li><a href="#tab2">Контакты</a></li>
                    </ul>
                    <div id='tab1'>
                        <table id="phone-table" class='compact-table'>
                            <thead class="nodisplay">
                                <tr>
                                    <th></th><th></th><th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($model['journal'] as $k=>$v) { ?>
                                <tr>
                                    <td><?=$v->Journal ?></td>
                                    <td><?=$v->Date ?></td>
                                    <td><?=$v->Number ?></td>
                                </tr> 
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div id='tab2'>
                        <table id="contact-table" class='compact-table'>
                            <thead class="nodisplay">
                                <tr>
                                    <th></th><th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($model['contacts'] as $k=>$v) { ?>
                                    <tr>
                                        <td><?=$v->Name; ?></td>
                                        <td><?=$v->Number; ?></td>
                                    </tr> 
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div></td>
    </tr><tr>
        <td><div>Статус:</div></td>
        <td></td>
    </tr>
</table>

<script type="text/javascript">
    $(function(){
        $('#phonetabs').tabs();
        $('.phone-button').click(function(){
            $('#phonenumber').val(
               $('#phonenumber').val() + $(this).text());
        })
        
        $('#phone-table,#contact-table').dataTable({
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
    });//# sourceURL=gmphone1.js
</script>
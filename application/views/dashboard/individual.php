<div class="individual">
    <?php echo validation_errors(); ?>
    <form action="<?=base_url('index.php/dashboard/saverpersonal') ?>" method='post'>
        <div class='personal-foto'></div>
        <div class='text-data'>
            <div><textarea name='fio' class="fio"><?= $model['Fio'] ?></textarea></div>
            <input name="post" type="text" value="<?= $model['Post'] ?>" /><br/>
            <input name="company" type="text" value="<?= $model['company'] ?>" /><br/>
        </div><br/>
        <center>
            <input name='birthday' type="text" id="datepicker" 
             value="<?= $model['Birthday'] ?>" />
        </center>
        <input name="individualId" id='individualId' type="hidden" value="<?=$model['Id'] ?>" />
        <br/>
        <center><input type="submit" value="Сохранить" class="save" /></center>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        var old = $('.personal-foto').css('background-image');
        var reversePath = old.split('').reverse().join('');
        var startId = reversePath.indexOf('/',0);
        var subPath1 = old.substring(0, old.length-startId);
        var newPath = subPath1 + '<?=$model['FotoName'] ?>' + '")';
        $('.personal-foto').css('background-image', newPath);
        
        $( "#datepicker" ).datepicker({
            changeYear: true,
            yearRange: "c-100:c+0",
            changeMonth: true,
            dateFormat: "yy-mm-dd",
        });
        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Нед',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
        
        //set background-color
        $newColor = "<?=$model['themeName'] ?>";
        $('body').removeClass().addClass($newColor);
    });
//# sourceURL=individual.js
</script>
$(function(){
    $('button.light').click(function(){
        $('body').removeClass().addClass('light');
        
        var data = '<form><input name="individualid" value="' + $('#individualId').val() + '" /> <input name="themename" value="light" /></form>';
        // так и не понял, как создать полльзовательский метод, чтобы вынести
        $.ajax({
            type: 'POST',
            url: $('#appearance').data('url'),
            data: $(data).serialize(), 
            success: function(){}
        });
    });
    $('button.dark').click(function(){
        $('body').removeClass().addClass('dark');
        
        var data = '<form><input name="individualid" value="' + $('#individualId').val() + '" /> <input name="themename" value="dark" /></form>';
        $.ajax({
            type: 'POST',
            url: $('#appearance').data('url'),
            data: $(data).serialize(), 
            success: function(){}
        });
    });
    $('#theme-reset').click(function(){
        $('body').removeClass();
        
        var data = '<form><input name="individualid" value="' + $('#individualId').val() + '" /> <input name="themename" value="" /></form>';
        $.ajax({
            type: 'POST',
            url: $('#appearance').data('url'),
            data: $(data).serialize(), 
            success: function(){}
        });
    });
    $('#display-category-info').click(function(){
        $('.category-block').toggleClass('nodisplay');
    });
});
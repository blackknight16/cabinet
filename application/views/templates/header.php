<?php

?>
<html>
    <head>
        <title>
            <?php if (isset($title)) {
                echo $title;
            } else {
                echo 'Личный кабинет';
            } ?>
        </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?=base_url('content/jquery-ui.css') ?>">
  <link rel="stylesheet" href="<?=base_url('content/modal-window.css') ?>">
  <link rel="stylesheet" href="<?=base_url('content/jquery.dataTables.css') ?>">
  <link rel="stylesheet" href="<?=base_url('content/animate.css') ?>">
  <link rel="stylesheet" href="<?=base_url('content/header.css') ?>">
  <link rel="stylesheet" href="<?=base_url('content/authorize.css') ?>">
  <script src="<?=base_url('js/jquery-1.12.3.js') ?>" type="text/javascript"></script>
  <script src="<?=base_url('js/jquery-ui.js') ?>" type="text/javascript"></script>
  <script src="<?=base_url('js/modal-window.js') ?>" type="text/javascript"></script>
  <script src="<?=base_url('js/menu-logic.js') ?>" type="text/javascript"></script>
  <script src="<?=base_url('js/datatables.js') ?> "type="text/javascript" ></script>
  
  <script type="text/javascript">
  $( function() {
    $( "#menu" ).menu({
	position: {
            my:'left top',
            at:'left bottom'
        }
    });
      
    function getIndividual(){
        var p = {};
        $('#individual').load('<?=base_url('index.php/dashboard/individual/') ?>' ,p,function(str){            
        });
    }
    function getTaskList(){
        var p = {};
        $('#taskList').load('<?=base_url('index.php/dashboard/tasklist/') ?>' ,p,function(str){            
        });
    }
    function getActions(){
        var p = {};
        $('#actions').load('<?=base_url('index.php/dashboard/actions/') ?>' ,p,function(str){
        });
    }
    function getGeneralHistories(){
        var p = {};
        $('#generalhistory').load('<?=base_url('index.php/dashboard/generalhistory/') ?>',p,function(str){
        });
    }
    function getGmPhones(){
        var p = {};
        $('#gmphone').load('<?=base_url('index.php/dashboard/gmphone/') ?>' ,p,function(str){
        });
    }
    getIndividual();
    getTaskList();
    getActions();
    getGeneralHistories();
    getGmPhones();
  } );
  </script>  
</head>
<body>
    <div id="header">
        <div class='header-row'>
        <a href="<?=base_url()?>"><div class='cabinet-logo'></div></a>
        <ul id="menu">
            <li>
                <div class='add-menulogo'></div>          
                <ul>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                </ul>
            </li>
            <li>
                <div class='edit-menulogo'></div>      
                <ul>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                </ul>
            </li>
            <li>
                <div class='copy-menulogo'></div>           
                <ul>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                </ul>
            </li>
            <li>
                <div class='folder-menulogo'></div>            
                <ul>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                	<li><a href="#">Не работает</a></li>
                </ul>
            </li>
            <li>
                <div class='monitor-menulogo'></div>
                <ul>
                	<li><a id="theme-reset" href="#">Сбросить настройки</a></li>
                	<li><a id='go' href="#">Шаблоны</a></li>
                	<li><a id='display-category-info' href="#">Отобразить/скрыть рабочее окно</a></li>
                </ul>
            </li>
        </ul>
        <div class='support-block'>
            <div class='support-logo'></div> 
            <div class='support'>Техподдержка</div>
        </div>
    </div>
    </div><br/>
    <div></div>
    <div id="content">

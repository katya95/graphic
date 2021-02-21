<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Последовательный выбор AJAX с использованием jQuery и PHP | Материалы сайта RUSELLER.COM</title>
        
        <!-- Стили CSS -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/js/chosen/chosen.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

		
		<h1 id="logo">Последовательный выбор AJAX</h1>

		<ul id="questions">
			
		</ul>

<ul id="questions">
	<!-- Генерируется кодом jQuery -->
	<li>
		<p>Что желаете купить?</p>
		<select data-placeholder="Выберите категорию продукта">
			<option data-connection="phoneSelect" value="Phones">Телефоны</option>
			<option data-connection="notebookSelect" value="Notebooks">Ноутбуки</option>
			<option data-connection="tabletSelect" value="Tablets">Планшеты</option>
		</select>
	</li>
	<!-- Следующая секция вставляется в зависимости от выбора -->
</ul>
 <script>
$(function(){
	
	var questions = $('#questions');
	
	function refreshSelects(){
		var selects = questions.find('select');
		
		// Улучшаем элемент selects с помощью плагина Chose
		selects.chosen();
		
		// Ждем изменений
		selects.unbind('change').bind('change',function(){
			
			// Выбранная опция
			var selected = $(this).find('option').eq(this.selectedIndex);
			// Ищем атрибут data-connection
			var connection = selected.data('connection');
			
			
			// Удаляем следующий контейнер li (к=если есть)
			selected.closest('#questions li').nextAll().remove();
			
			if(connection){
				fetchSelect(connection);
			}

		});
	}
	
	var working = false;
	function fetchSelect(val){
		
		if(working){
			return false;
		}
		working = true;
		
		$.getJSON('ajax.php',{key:val},function(r){
			
			var connection, options = '';
			
			$.each(r.items,function(k,v){
				connection = '';
				if(v){
					connection = 'data-connection="'+v+'"';
				}
				
				options+= '<option value="'+k+'" '+connection+'>'+k+'</option>';
			});
			
			if(r.defaultText){
				
				// Плагин Chose требует, чтобы был добавлен пустой элемент опции
				// если нужно выводить текст "Пожалуйста, выберите"
				
				options = '<option></option>'+options;
			}
			
			// Строим разметку для раздела select
			
			$('<li>\
				<p>'+r.title+'</p>\
				<select data-placeholder="'+r.defaultText+'">\
					'+ options +'\
				</select>\
				<span class="divider"></span>\
			</li>').appendTo(questions);
			
			refreshSelects();
			
			working = false;
		});
		
	}
	
	$('#preloader').ajaxStart(function(){
		$(this).show();
	}).ajaxStop(function(){
		$(this).hide();
	});
	
	// В начале загружаем выбор продукта
	fetchSelect('productSelect');
});
</script>

		<div id="preloader"></div>

        <footer>
	        <h2><i>Урок:</i> Последовательный выбор AJAX с использованием jQuery и PHP</h2>
            <a target="_blank" href="http://www.ruseller.com">Материалы сайта RUSELLER.COM</a>
        </footer>
        
        <!-- JavaScript -->
		<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
		<script src="assets/js/chosen/chosen.jquery.min.js"></script>
		<script src="assets/js/script.js"></script>
  
    </body>
</html>


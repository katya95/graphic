<?php

// Будем использовать данный класс для определения каждого элемента select

class SelectBox{
	public $items = array();
	public $defaultText = '';
	public $title = '';
	
	public function __construct($title, $default){
		$this->defaultText = $default;
		$this->title = $title;
	}
	
	public function addItem($name, $connection = NULL){
		$this->items[$name] = $connection;
		return $this; 
	}
	
	public function toJSON(){
		return json_encode($this);
	}
}


/* конфигурация элементов select */

// Продукт

$productSelect = new SelectBox('Что желаете купить?','Выберите категорию продукта');
$productSelect->addItem('Телефоны','phoneSelect')
			  ->addItem('Ноутбуки','notebookSelect')
			  ->addItem('Планшеты','tabletSelect');

// Типы телефонов

$phoneSelect = new SelectBox('Какой тип телефона вы хотите?', 'Выберите тип телефона');
$phoneSelect->addItem('Смартфон','smartphoneSelect')
			->addItem('Обычный телефон','featurephoneSelect');

// Смартфоны

$smartphoneSelect = new SelectBox('Какой смартфон вам нужен?','Выберите модель смартфона');
$smartphoneSelect->addItem('Samsung Galaxy Nexus')
				 ->addItem('iPhone 4S','iphoneSelect')
				 ->addItem('Samsung Galaxy S2')
				 ->addItem('HTC Sensation');

// Обычные телефоны

$featurephoneSelect = new SelectBox('Какой телефон вам нужен?','Выберите модель телефона');
$featurephoneSelect->addItem('Nokia N34')
				   ->addItem('Sony Ericsson 334')
				   ->addItem('Motorola');

// Цвет iPhone

$iphoneSelect = new SelectBox('Какой цвет аппарата вам нравится?','Выберите цвет');
$iphoneSelect->addItem('Белый')->addItem('Черный');

// Выбор ноутбука

$notebookSelect = new SelectBox('Какой ноутбук вы хотите купить?', 'Выберите модель ноутбука');
$notebookSelect->addItem('Asus Zenbook','caseSelect')
			   ->addItem('Macbook Air','caseSelect')
			   ->addItem('Acer Aspire','caseSelect')
			   ->addItem('Lenovo Thinkpad','caseSelect')
			   ->addItem('Dell Inspiron','caseSelect');

// Планшет

$tabletSelect = new SelectBox('Какой планшет является предметом вашей мечты?', 'Выберите модель планшета');
$tabletSelect->addItem('Asus Transformer','caseSelect')
			 ->addItem('Samsung Galaxy Tab','caseSelect')
			 ->addItem('iPad 16GB','caseSelect')
			 ->addItem('iPad 32GB','caseSelect')
			 ->addItem('Acer Iconia Tab','caseSelect');

// Сумка

$caseSelect = new SelectBox('Возьмёте защитный чехол к вашему аппарату?','');
$caseSelect->addItem('Да')->addItem('Нет');


// Регистрируем все пункты выбора в массиве

$selects = array(
	'productSelect'			=> $productSelect,
	'phoneSelect'			=> $phoneSelect,
	'smartphoneSelect'		=> $smartphoneSelect,
	'featurephoneSelect'	=> $featurephoneSelect,
	'iphoneSelect'			=> $iphoneSelect,
	'notebookSelect'		=> $notebookSelect,
	'tabletSelect'			=> $tabletSelect,
	'caseSelect'			=> $caseSelect
);

// Будем просматривать данный массив и возвращать выбранный объект в зависимости
// от парметра $_GET['key'] передаваемого jQuery

// Вы можете модифицировать код для выбора результата из таблицы

if(array_key_exists($_GET['key'],$selects)){
	header('Content-type: application/json');
	echo $selects[$_GET['key']]->toJSON();
}
else{
	header("HTTP/1.0 404 Not Found");
	header('Status: 404 Not Found');
}

?>
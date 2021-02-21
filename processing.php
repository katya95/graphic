<?php 
class Figure
{
protected $color;
protected $image;
protected $name;
protected $data;
protected $patch;
protected $db;
protected $width=300;
protected $height=300;
protected $format;
protected $temp_image;
protected $figure;
//protected $choice_name;
protected $func;
protected $setfigure;
protected $img_input;
protected $img_src;
protected $quality = 80;

    public function __construct($db)
    {
        $this->db = $db;  
        //$this->figure=$figure;
    }
    //protected $height=0;
public function getColor()
  	{
  		return $this->color;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setColor($color)
	//public function setColor($_POST['width'])
  	{
  		$this->color=$color;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
public function color()
  	{
  		$img = imagecreatetruecolor(300,300);
  		$white = imagecolorallocate($img,255,255,255);
		$red = imagecolorallocate($img,255,0,0);
		$green = imagecolorallocate($img,0,255,0);
		$blue = imagecolorallocate($img,0,0,255);
  	// if( isset ($_POST['color']) && trim(strlen($_POST['color'])) > 0 ){
  	 	if ($_POST['color']=='white'){
  	 		 $this->setColor($white);
  	 	}
  	 	if ($_POST['color']=='red'){
  	 		 $this->setColor($red);
  	 	}
  	 	if ($_POST['color']=='green'){
  	 		 $this->setColor($green);
  	 	} 
  	 	if ($_POST['color']=='blue'){
  	 		 $this->setColor($blue);
  	 	}
  //	 }
	}
	public function getFunc()
	{
		return $this->func;
	}
public function setFunc($func)
	{
		 $this->func=$func;
	}
	//public function setDraw($img,$figure)
	public function draw()
	//public function draw()
	{
		$f='func';
		$this->setFunc($f);
		//$result=$this->getFunc($this->getFormatImg(),$args,$this->getColor());
		//$func=getFunc();
		//return $this->func=$func($img,$args,$this->getColor());
		//return $this->setfigure;
		//return $this->getFunc();
	
	}
public function getFigure()
  	{
  		return $this->figure;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setFigure($figure)
	//public function setColor($_POST['width'])
  	{
  		$this->figure=$figure;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getImage()
	{
		return $this->image;
	}
	public function setImage($image)//имя картинки $save_image
  	{
  		$this->image=$image;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
  	{
  		$this->name=$name;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
/*public function getChoiceName()
	{
		return $this->choice_name;
	}
	public function setChoiceName($choice_name)
  	{
  		$this->choice_name=$choice_name;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}*/
	public function getPatch()
	{
		return $this->patch;
	}
	public function setPatch($patch)
  	{
  		$this->patch=$patch;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getData()
	{
		return $this->data;
	}
	public function setData($data)
  	{
  		$this->data=$data;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function setPictureWidth($width)
	{
		$this->width=$width;
	}
	public function getPictureWidth()
	{
		return $this->width;
	}
	public function setPictureHeight($height)
	{
		$this->height=$height;
	}
	public function getPictureHeight()
	{
		return $this->height;
	}
	public function setFormatPicture($format)
	{
		$this->format=$format;
	}
	public function getFormatPicture()
	{
		return $this->format;
	}
    /*public function getTempImage()
	{
		return $this->temp_image;
	}
	public function setTempImage($temp_image)//имя картинки $save_image
  	{
  		$this->temp_image=$temp_image;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}*/
  	
  	public function parameterImage()
  	{
  		//if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
		$this->setName($_POST['name']);
		$data=date('Y-m-d H:i:s');
		//$data=date("m.d.y");
		$this->setData($data);
		$this->setPatch('foto/');
		// $this->setChoiceName($_POST['choice_name']);
		//$this->setFormatPicture($_POST['format']);
		
		//$this->setImage($_POST['file']);
		
		//$this->setImage();
	 	//$name=1;
	//}else{
		//$name=0;
	//}
  	}
  	
  	public function savePicture()
  	{
  		//$this->paremeterImage();
  		//$this->getName();
  		//$this->getData();
  		//$this->getpatch();
  		//$this->getImage();
  		
  		//$temp='';
$query = "INSERT INTO `pictures` (`id`,`name`,`date`,`patch`,`image`,`temp`) VALUES (:id, :name, :date, :patch, :image, :temp)";

$args = [
	 'id'=>NULL,
    'name' =>$this->getName(),
	 'date'=>$this->getData(),
	 'patch'=>$this->getPatch(),
	 'image'=>$this->getImage(),
	 'temp'=>'hjh'
	];
 //return DB::run($query, $args )->fetch();
   //$this->db::run($query, $args )->fetch();
   $this->db->sql($query, $args);	
  	}
  	
	public function outputPicture()
	{
		//$query = 'SELECT * FROM `pictures` WHERE `name` = ? ';//выборка по имени, сортировка по дате
		return $this->db->getRows('SELECT * FROM `pictures` WHERE `name` = ? ORDER BY  `date` DESC', [$this->getName()]);
        //return DB::run($query, $name )->fetch();
	}
	
	public function getPicture()
	{
		$user=$this->outputPicture($_POST['user_name']);
		foreach($this->outputPicture($_POST['user_name']) as $row)
		{
		// echo $row['name'] . ' ' . $row['date'].$row['avatar'].'</br>';
		//echo 'Пользователь '.$this->getName().' '. $this->getData().'<br/>';
			//echo '<img src=" '.$this->getPatch().$this->getImage().'" />';
			echo 'Фотография:'.' <img src="'.$row['patch'].$row['image'].'"width=30%>'.'<br/>';
  			echo '<br/>';
		}
		
	}
	
	
	//отдельный класс для вывода
public function outPicture()
	{
	
  		return $post=$this->db->getRows('SELECT * FROM `pictures`');

		//$query = 'SELECT * FROM `pictures` ';//выборка по имени, сортировка по дате
       // return DB::run($query, [$name] )->fetch();
	}
	
public function getPictureTemp()
	{
	$temp='temp';
	//$id=$this->getCount();
	//$id=13;
  		return $this->db->getValue("SELECT `image` FROM `pictures`WHERE `temp` = ?", [$temp]);

		//$query = 'SELECT * FROM `pictures` ';//выборка по имени, сортировка по дате
       // return DB::run($query, [$name] )->fetch();
	}
public function getPathTemp()
	{
	//$id=$this->getCount();
	//$id=13;
  		return $this->db->getValue("SELECT`patch` FROM `pictures`WHERE `temp` = ?", [$temp]);

		//$query = 'SELECT * FROM `pictures` ';//выборка по имени, сортировка по дате
       // return DB::run($query, [$name] )->fetch();
	}
	
public function getPictureSave()
	{
	//$temp='temp';
	//$id=$this->getCount();
	//$id=89;
	//$id=13;
  		return $this->db->getValue("SELECT `image` FROM `pictures`ORDER BY date DESC LIMIT 1");

		//$query = 'SELECT * FROM `pictures` ';//выборка по имени, сортировка по дате
       // return DB::run($query, [$name] )->fetch();
	}
public function getPathSave()
	{
	//$id=$this->getCount();
	//$id=89;
	//$id=13;
	//$temp='temp';
  		return $this->db->getValue("SELECT`patch` FROM `pictures`ORDER BY date DESC LIMIT 1");

		//$query = 'SELECT * FROM `pictures` ';//выборка по имени, сортировка по дате
       // return DB::run($query, [$name] )->fetch();
	}
	
	public function updateTemp($path,$image)
	{
  		//$path='foto/';
  		$data=date('Y-m-d H:i:s');
  		//$name=$this->getName(),
     	$query = "UPDATE `pictures`
  		SET  `patch` = :patch,
 	 	 `image` = :image,
 	 	  `date` = :data,
 	 	 WHERE `temp` = :temp";
		$args = [
	  	'patch' => $path,
		'image' => $image,
		'date' => $data,
			'temp' => 'temp']; //getcount()-если не сохранена, то перезапись
		$this->db->sql($query, $args);
	}
	
public function getCount()
	{
	
  		return $this->db->getValue("SELECT COUNT(*) FROM `pictures`");

		//$query = 'SELECT * FROM `pictures` ';//выборка по имени, сортировка по дате
       // return DB::run($query, [$name] )->fetch();
	}
	public function check()
	{
		foreach($this->outPicture() as $row)
		{
		 echo $row['name'] . ' ' . $row['date'].$row['avatar'].'</br>';
		//echo 'Пользователь '.$this->getName().' '. $this->getData().'<br/>';
			//echo '<img src=" '.$this->getPatch().$this->getImage().'" />';
			echo 'Фотография:'.' <img src="'.$row['patch'].$row['image'].'"width=30%>'.'<br/>';
  			echo '<br/>';
		}
	}
	/*public function getById($id)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `id` = ? ';//выборка по имени, сортировка по дате
        return DB::run($query, [$id] )->fetch();
    }*/
	
	
    public function getFormatImg()//$img меняется в зависимости от  $_SESSION['save']==1      if ($_SESSION['save']==1){$img=$save_image.'.jpg'   } 
    {
    	return $this->img_input;
    }
	public function setFormatImg($img)//$img меняется в зависимости от  $_SESSION['save']==1      if ($_SESSION['save']==1){$img=$save_image.'.jpg'   } 
    {

        // Find format
        $ext = strtoupper(pathinfo($img, PATHINFO_EXTENSION));
         //$this->setFormatPicture($ext);
         //echo $this->getFormatPicture();
        //echo  $ext;
        //$this->setFormatPicture(strtoupper(pathinfo($img, PATHINFO_EXTENSION)));

        // JPEG image
       // if(is_file($img) && ( $this->getFormatPicture() == "JPG" OR $this->getFormatPicture() == "JPEG"))
         if(is_file($img) && ($ext == "JPG" OR $ext == "JPEG"))
        {

            $this->setFormatPicture($ext);
            $this->img_input = ImageCreateFromJPEG($img);
           // $this->img_src = $img;
            //$this->setImage($img);
           

        }

        // PNG image
        elseif(is_file($img) && $ext == "PNG")
          //elseif(is_file($img) && $this->getFormatPicture() == "PNG")
        {

           // $this->format = $ext;
           $this->setFormatPicture($ext);
            $this->img_input = ImageCreateFromPNG($img);
           //$this->setImage($img);
         //  $this->image = $img;

        }

        // GIF image
        elseif(is_file($img) && $ext == "GIF")
          //elseif(is_file($img) && $this->getFormatPicture() == "PNG")
        {

            //$this->format = $ext;
            $this->setFormatPicture($ext);
            $this->img_input = ImageCreateFromGIF($img);
           // $this->image = $img;
            //$this->setImage($img);

        }

        // Get dimensions
        //$this->width= imagesx($this->img_input); 
        //$this->height = imagesy($this->img_input);
        //$this-> setPictureWidth( $this->width);
        //$this-> setPictureHeight($this->height);

    }
	
// Save image
    public function saveImage()
    {
    // $img= imagecreatefromjpeg('foto/2.jpg');
           // imageJPEG($this->getFormatImg(),NULL,100); 
        // Save JPEG
       // if($this->format == "JPG" OR $this->format == "JPEG")
          if($this->getFormatPicture() == "JPG" OR $this->getFormatPicture() == "JPEG")
        {
            //imageJPEG($this->getFormatImg(), $this->getPatch(),100); 
            //imageJPEG($this->getFormatImg(), $this->getPatch().$this->getImage().,100); 
        
            imageJPEG($this->getFormatImg(),$this->getPatch().$this->getImage(),100); 
            
            
            
           // $img= imagecreatefromjpeg('foto/2.jpg');
            
            
            //$this->getPatch().$this->getImage() не рабочие
            
            //imageJPEG($img,NULL,100); 
              //imageJPEG($this->getImage(), $path, $this->quality); 
        }
      

        // Save PNG
        //elseif($this->getFormatPicture() == "PNG")
         elseif($this->getFormatPicture() == "PNG")
        {
             imagePNG($this->getFormatImg() ,$this->getPatch().$this->getImage());
        }

        // Save GIF
       // elseif($this->getFormatPicture() == "GIF")
        elseif($this->getFormatPicture() == "GIF")
        {
         	imageGIF($this->getFormatImg(), $this->getPatch().$this->getImage()); 

        }
        
        

    }
	

	public function outputImage()
    {
    // $img= imagecreatefromjpeg('foto/2.jpg');
           // imageJPEG($this->getFormatImg(),NULL,100); 
        // Save JPEG
       // if($this->format == "JPG" OR $this->format == "JPEG")
          if($this->getFormatPicture() == "JPG" OR $this->getFormatPicture() == "JPEG")
        {
            //imageJPEG($this->getFormatImg(), $this->getPatch(),100); 
            //imageJPEG($this->getFormatImg(), $this->getPatch().$this->getImage().,100); 
        
            imageJPEG($this->getFormatImg(),NULL,100); 
            
            
            
           // $img= imagecreatefromjpeg('foto/2.jpg');
            
            
            //$this->getPatch().$this->getImage() не рабочие
            
            //imageJPEG($img,NULL,100); 
              //imageJPEG($this->getImage(), $path, $this->quality); 
        }
      

        // Save PNG
        //elseif($this->getFormatPicture() == "PNG")
         elseif($this->getFormatPicture() == "PNG")
        {
             imagePNG($this->getFormatImg() ,NULL);
        }

        // Save GIF
       // elseif($this->getFormatPicture() == "GIF")
        elseif($this->getFormatPicture() == "GIF")
        {
         	imageGIF($this->getFormatImg(), $NULL); 

        }
    }
	
}





/*class ModelPost extends Model
{
    protected $tableName = 'posts';
}*/

class Circle extends Figure
{
protected $name_center_x=0;
   	protected $name_center_y=0;
    protected $width=0;
    protected $height=0;
  	protected $start_circle_degree=0;
  	protected $end_circle_degree=0;
  	
  	protected $figure='circle';
  	
/*public function getEmail($id)
	{
		return $this->db->getValue("SELECT `email` FROM `user` WHERE `id_user` = ?", [$id]);
	}*/
  	
/*public  function setCityActive($city)
		{
   			 $this->city = $city;
  		 }*/
  	
  	
  	public function getCentreX()
  	{
  		return $this->name_center_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setCentreX($name_center_x)
  	{
  		$this->name_center_x=$name_center_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getCentreY()
  	{
  		return $this->name_center_y;
  	}
  	//$name_center_y=$_POST['name_center_y'];
	public function setCentreY($name_center_y)
  	{
  		$this->name_center_y=$name_center_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
  	//$width=$_POST['width'];
public function getWidth()
  	{
  		return $this-> width;
  	}
  	
	public function setWidth($width)
  	{
  		$this->width=$width;
  		//$this->width=$_POST['width'];
  	}
  	
public function getHeight()
  	{
  		return $this->height;
  	}
  	//$height=$_POST['height'];
	public function setHeight($height)
  	{
  		$this->height=$height;
  		//$this->height=$_POST['height'];
  	}
  	
public function getStartDegree()
  	{
  		return $this->start_circle_degree;
  	}
  	//$start_circle_degree=$_POST['start_circle_degree'];
	public function setStartDegree($start_circle_degree)
  	{
  		$this->start_circle_degree=$start_circle_degree;
  	//$this->end_circle_degree=$_POST['start_circle_degree'];
  	}
  	
public function getEndDegree()
  	{
  		return $this->end_circle_degree;
  	}
  	//$end_circle_degree=$_POST['end_circle_degree'];
	public function setEndDegree($end_circle_degree)
  	{
  		$this->end_circle_degree=$end_circle_degree;
  		//$this->end_circle_degree=$_POST['end_circle_degree'];
  	}
  	
  	
public  function createCircle()
	{
	//$this->name = $name;
	//$this-> setCityActive($_POST['city']);
	
   // if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
	 	$this->setCentreX($_POST['name_center_x']);
	 	//$name=1;
	//}else{
		//$name=0;
	//}
//	if( isset ($_POST['name_center_y']) && trim(strlen($_POST['name_center_y'])) > 0 ){
		$this-> setCentreY($_POST['name_center_y']);
		//$name_2=1;
	//} else{
		//$name_2=0;
	//}
	$this->setWidth($_POST['width']);
	$this->setHeight($_POST['height']);
	$this->setStartDegree($_POST['start_circle_degree']);
	$this->setEndDegree($_POST['end_circle_degree']);
	$this->setFigure($figure);
	}
	
	/*public  function getCircle()
	{
	$this->getCentreX();
	$this-> getCentreY();
	$this->getWidth();
	$this->getHeight();
	$this->getStartDegree();
	$this->getEndDegree();
	//imagearc($img,$circle->getCentreX(),$circle->getCentreY(),$circle1->getWidth(),$circle1->getHeight(),$circle1->getStartDegree(),$circle1->getEndDegree(),$white);//в дальнейшем создать метод цвет и $img
	}*/
	public function draw()
	{
		$this->createCircle();
		/*$args = [
		$this->getCentreX(),
		$this-> getCentreY(),
		$this->getWidth(),
		$this->getHeight(),
		$this->getStartDegree(),
		$this->getEndDegree()
		];*/
	
		if (!empty($_SESSION['photo'])){
$path=$this->setPatch($_SESSION['pach']);
$this->setImage($_SESSION['photo']);
$this->setFormatImg($this->getPatch().$this->getImage());

}
else if(empty($_SESSION['photo'])){
//else if($_SESSION['photo']==''){

$image='2.jpg';
$path='foto/';
if (is_dir($path)==false){
mkdir($path);
$img1 = imagecreatetruecolor(300,300);
//$img1 = imagecreatetruecolor($figure->getPictureWidth(),$figure->getPictureHeight());
imageJPEG($img1,$path."2.jpg",100);
}
if (isset($_SESSION['existing'])){
	$p=$this->getPathSave();
	$i=$this->getPictureSave();
	//$path=$this->setPatch($p);
	//$image=$this->setImage($i);
	$this->setFormatImg($p.$i);
}
$this->setPatch($path);
$this->setImage($image);
 $this->setFormatImg($this->getPatch().$this->getImage());
}
		$img=$this->getFormatImg();
		$f=imagearc($img,$this->getCentreX(),$this->getCentreY(),$this->getWidth(),$this->getHeight(),$this->getStartDegree(),$this->getEndDegree(),$this->getColor());
		//$this->setfigure=imagearc($img,$args,$this->getColor());
		//$this->$figure='circle';
		//$figure=$this->setFigure('circle');
		$this->setFigure($figure);
		//$figure=getFigure();
		$this->setFunc($f);
		//return $f;
		//return $this->figure;
		//return $this->getFunc();
	}
	
  	//$this-> draw($this->getFigure());
  	//public function draw()
  	//{
		
  //	}
  	
}

class Rectangle extends Figure
{
protected $top_right_x=0;
   	protected $top_right_y=0;
    protected $bottom_left_x=0;
    protected $bottom_left_y=0;
  	//protected $start_circle_degree=0;
  	//protected $end_circle_degree=0;
  	
  	
  	public function getTopRightX()
  	{
  		return $this->top_right_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setTopRightX($top_right_x)
  	{
  		$this->top_right_x=$top_right_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getTopRightY()
  	{
  		return $this->top_right_y;
  	}
	public function setTopRightY($top_right_y)
  	{
  		$this->top_right_y=$top_right_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public function getBottomLeftX()
  	{
  		return $this->bottom_left_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setBottomLeftX($bottom_left_x)
  	{
  		$this->bottom_left_x=$bottom_left_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getBottomLeftY()
  	{
  		return $this->bottom_left_y;
  	}
	public function setBottomLeftY($bottom_left_y)
  	{
  		$this->bottom_left_y=$bottom_left_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public  function createRectangle()
	{
	//$this->name = $name;
	//$this-> setCityActive($_POST['city']);
	
   // if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
	$this->setTopRightX($_POST['top_right_x']);
	$this->setTopRightY($_POST['top_right_y']);
	$this-> setBottomLeftX($_POST['bottom_left_x']);
	$this->setBottomLeftY($_POST['bottom_left_y']);
	 	//$name=1;
	//}else{
		//$name=0;
	//}
	}
public function draw()
	{
		$this->createRectangle();
		/*$args = [
		$this->getTopRightX(),
		$this-> getTopRightY(),
		$this->getBottomLeftX(),
		$this->getBottomLeftY(),
		//$this->getStartDegree(),
		//$this->getEndDegree()
		];*/
	if (!empty($_SESSION['photo'])){
$path=$this->setPatch($_SESSION['pach']);
$this->setImage($_SESSION['photo']);
$this->setFormatImg($this->getPatch().$this->getImage());

}
else if(empty($_SESSION['photo'])){
//else if($_SESSION['photo']==''){

$image='2.jpg';
$path='foto/';
$this->setPatch($path);
$this->setImage($image);
 $this->setFormatImg($this->getPatch().$this->getImage());
}
		$img=$this->getFormatImg();
		$f=imagerectangle($img,$this->getTopRightX(),$this->getTopRightY(),$this->getBottomLeftX(),$this->getBottomLeftY(),$this->getColor());
		//$this->setfigure=imagearc($img,$args,$this->getColor());
		//$this->$figure='circle';
		//$figure=$this->setFigure('circle');
		$this->setFigure($figure);
		//$figure=getFigure();
		$this->setFunc($f);
		//return $this->figure;
		//return $this->getFunc();
	}
	
	
	
}
class Parallelogram extends Figure
{
protected $top_right_x=0;
   	protected $top_right_y=0;
    protected $bottom_left_x=0;
    protected $bottom_left_y=0;
  	//protected $start_circle_degree=0;
  	//protected $end_circle_degree=0;
  	
  	
  	public function getTopRightX()
  	{
  		return $this->top_right_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setTopRightX($top_right_x)
  	{
  		$this->top_right_x=$top_right_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getTopRightY()
  	{
  		return $this->top_right_y;
  	}
	public function setTopRightY($top_right_y)
  	{
  		$this->top_right_y=$top_right_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public function getBottomLeftX()
  	{
  		return $this->bottom_left_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setBottomLeftX($bottom_left_x)
  	{
  		$this->bottom_left_x=$bottom_left_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getBottomLeftY()
  	{
  		return $this->bottom_left_y;
  	}
	public function setBottomLeftY($bottom_left_y)
  	{
  		$this->bottom_left_y=$bottom_left_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public  function createRectangle()
	{
	//$this->name = $name;
	//$this-> setCityActive($_POST['city']);
	
   // if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
	$this->setTopRightX($_POST['top_right_x']);
	$this->setTopRightY($_POST['top_right_y']);
	$this-> setBottomLeftX($_POST['bottom_left_x']);
	$this->setBottomLeftY($_POST['bottom_left_y']);
	 	//$name=1;
	//}else{
		//$name=0;
	//}
	}
	public  function createParallelogram()
	{
		$this->setX3(getTopRightX());
		$this->setY3($this->getBottomLeftY());
		$this->setY4($this->getTopRightY());
		$this->setX4($this-> getBottomLeftX());
		$k1=0.5*(abs($this->getY3()-$this->getTopRightY()));
		//$k2=0.5*(abs($y3-$this->getTopRightY()))+(abs($y3-$this->getTopRightY()));
		$this->setX5($this->getX3());
		$d=$this->getY3()+$k1;
		$this->setY5($d);
		$this->setX6($this->getTopRightX());
		$this->setY6($this->getBottomLeftY())+$k1;
		/*
		 $points = array(
 		$this->getX6(),$this->getY6(),
 		$this->getX5(),$this->getY5(),
 		$this->getBottomLeftX(),$this->getBottomLeftY(),
 		 $this->getX4(),$this->getY4()
 		);
 
//imagefilledpolygon($img,$points,6,$white);
imagepolygon($this->getFormatImg(),$points,4,$this->getColor());*/
	}
	public function getX3()
  	{
  		return $this->x3;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setX3($x3)
  	{
  		$this->x3=$x3;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getY3()
  	{
  		return $this->y3;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setY3($y3)
  	{
  		$this->y3=$y3;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getX4()
  	{
  		return $this->x4;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setX4($x4)
  	{
  		$this->x4=$x4;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getY4()
  	{
  		return $this->y4;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setY4($y4)
  	{
  		$this->y4=$y4;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getX5()
  	{
  		return $this->x5;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setX5($x5)
  	{
  		$this->x=$x5;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getY5()
  	{
  		return $this->y5;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setY5($y5)
  	{
  		$this->y5=$y5;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getX6()
  	{
  		return $this->x6;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setX6($x6)
  	{
  		$this->x6=$x6;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getY6()
  	{
  		return $this->y6;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setY6($y6)
  	{
  		$this->y6=$y6;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getK1()
  	{
  		return $this->k1;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setK1($k1)
  	{
  		$this->k1=$k1;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function getFirstX()
  	{
  		return $this->first_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setFirstX($first_x)
  	{
  		$this->first_x=$first_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
	public function checkParallelogram()
  	{
  		
  	if($this->getTopRightX()==''){
		echo("Пожалуйста, введите top-right x");
		//theForm.top_right_x.focus();
		//return (false);
	}
	if($this->getTopRightX()<0)
	{
		echo("Пожалуйста, введите top-right x");
		//theForm.top_right_x.focus();
		//return (false);
	}
	if($this->getTopRightY()<0)
	{
		echo("Пожалуйста, введите top_right_y");
		//theForm.top_right_y.focus();
		//return (false);
	}
  	if($this->getTopRightY()=='')
	{
		echo("Пожалуйста, введите top_right_y");
		//theForm.top_right_y.focus();
		//return (false);
	}
	if($this->getBottomLeftX()<0)
	{
		echo("Пожалуйста, введите bottom_left_x");
	//theForm.bottom_left_x.focus();
		//return (false);
	}
  	if($this->getBottomLeftX()=='')
	{
		echo("Пожалуйста, введите bottom_left_x");
		//theForm.bottom_left_x.focus();
		//return (false);
	}
	if($this->getBottomLeftY()<0)
	{
		echo("Пожалуйста, введите bottom_left_y");
		//theForm.bottom_left_y.focus();
		//return (false);
	}
  	if($this->getBottomLeftY()=='')
	{
		echo("Пожалуйста, введите bottom_left_y");
		//theForm.bottom_left_y.focus();
		//return (false);
	}
  		
	if($this->getTopRightX() > $this->getBottomLeftX())
	{
		echo("Пожалуйста, введите top-right_x меньше, чем bottom_left_x");
		//theForm.top_right_x.focus();
		//return (false);
	}
	if($this->getTopRightY() > $this->getBottomLeftY())
	{
		echo("Пожалуйста, введите top_right_y меньше, чем bottom_left_y");
		//theForm.top_right_y.focus();
		//return (false);
  		//return $this->first_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
		
	}

}



class Triangle extends Figure
{
protected $first_x=0;
   	protected $first_y=0;
    protected $second_x=0;
    protected $second_y=0;
  	protected $third_x=0;
  	protected $third_y=0;
  	
  	
  	public function getFirstX()
  	{
  		return $this->first_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setFirstX($first_x)
  	{
  		$this->first_x=$first_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
public function getFirstY()
  	{
  		return $this->first_y;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setFirstY($first_y)
  	{
  		$this->first_y=$first_y;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
public function getSecondX()
  	{
  		return $this->second_x;
  	}
	public function setSecondX($second_x)
  	{
  		$this->second_x=$second_x;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public function getSecondY()
  	{
  		return $this->second_y;
  	}
	public function setSecondY($second_y)
  	{
  		$this->second_y=$second_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public function getThirdX()
  	{
  		return $this->third_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setThirdX($third_x)
  	{
  		$this->third_x=$third_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getThirdY()
  	{
  		return $this->third_y;
  	}
	public function setThirdY($third_y)
  	{
  		$this->third_y=$third_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
public  function createTriangle()
	{
	//$this->name = $name;
	//$this-> setCityActive($_POST['city']);
	
   // if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
	 	$this->setFirstX($_POST['first_x']);
	$this->setFirstY($_POST['first_y']);
	$this->setSecondX($_POST['second_x']);
	$this->setSecondY($_POST['second_y']);
	$this->setThirdX($_POST['third_x']);
	$this->setThirdY($_POST['third_y']);
	 	//$name=1;
	//}else{
		//$name=0;
	//}
	}
  	
}
class Line extends Figure
{
protected $right_x=0;
   	protected $right_y=0;
    protected $left_x=0;
    protected $left_y=0;
  	//protected $start_circle_degree=0;
  	//protected $end_circle_degree=0;
  	
  	
  	public function getRightX()
  	{
  		return $this->right_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setRightX($right_x)
  	{
  		$this->right_x=$right_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getRightY()
  	{
  		return $this->right_y;
  	}
	public function setRightY($right_y)
  	{
  		$this->right_y=$right_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
public function getLeftX()
  	{
  		return $this->left_x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setLeftX($left_x)
  	{
  		$this->left_x=$left_x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getLeftY()
  	{
  		return $this->left_y;
  	}
	public function setLeftY($left_y)
  	{
  		$this->left_y=$left_y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
public  function createLine()
	{
	//$this->name = $name;
	//$this-> setCityActive($_POST['city']);
	
   // if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
	 	$this->setRightX($_POST['right_x']);
	$this->setRightY($_POST['right_y']);
	$this->setLeftX($_POST['left_x']);
	$this->setLeftY($_POST['left_y']);

	 	//$name=1;
	//}else{
		//$name=0;
	//}
	}
}
class Dot extends Figure
{
protected $x=0;
protected $y=0;
   
  	//protected $start_circle_degree=0;
  	//protected $end_circle_degree=0;
  	
  	
  	public function getX()
  	{
  		return $this->x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setX($x)
  	{
  		$this->x=$x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getY()
  	{
  		return $this->y;
  	}
	public function setY($y)
  	{
  		$this->y=$y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public  function createDot()
	{
	//$this->name = $name;
	//$this-> setCityActive($_POST['city']);
	
   // if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
	 	$this->setX($_POST['x']);
	$this->setY($_POST['y']);


	 	//$name=1;
	//}else{
		//$name=0;
	//}
	}

}
class Text extends Figure
{
protected $text='';
protected $size;
protected $x=0;
protected $y=0;
protected $angle;
protected $font;
  	
  	public function getText()
  	{
  		return $this->text;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setText($text)
  	{
  		$this->text=$text;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
public function getSize()
  	{
  		return $this->size;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setSize($size)
  	{
  		$this->size=$size;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
public function getX()
  	{
  		return $this->x;
  	}
  	//$name_center_x->$_POST['name_center_x'];
	public function setX($x)
  	{
  		$this->x=$x;
  		//$this->name_center_x=$_POST['name_center_x'];
  	}
  	
	public function getY()
  	{
  		return $this->y;
  	}
	public function setY($y)
  	{
  		$this->y=$y;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public function getAngle()
  	{
  		return $this->angle;
  	}
	public function setAngle($angle)
  	{
  		$this-> angle=$angle;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
	public function getFont()
  	{
  		return $this->font;
  	}
	public function setFont($font)
  	{
  		$this->font=$font;
  		//$this->name_center_y=$_POST['name_center_y'];
  	}
  	
public  function createText()
	{
	//$this->name = $name;
	//$this-> setCityActive($_POST['city']);
	
   // if( isset ($_POST['name_center_x']) && trim(strlen($_POST['name_center_x'])) > 0 ){
	 	$this->setText($_POST['text']);
	 	$this->setSize($_POST['size']);
	 	$this->setX($_POST['x']);
		$this->setY($_POST['y']);
	 	$this->setFont('fonts/georgia.ttf');
	 	$this->setAngle(0);
	 	//$name=1;
	//}else{
		//$name=0;
	//}
	}
}

class Image {

protected $db;
protected $img;
protected $figure;
protected $pach;
protected $image;
protected $class;
protected $f;


 public function __construct($f)//выполняются действия для полученной фигуры
    {
    	 $this->db = new DB();
    	 //$this->class=Circle;
    	 
    	 /*$figure = ['circle' => new Circle($this->db), 'rectangle' =>new Rectangle($this->db)];
    foreach ($figure as $key => $value) {
    	//print_r("{$key}".$value);
    	echo $value;
}*/
    	 if ($f=='circle'){
   		 $this->figure=new Circle($this->db);
    	 }
    	 if ($f=='rectangle'){
   		 $this->figure=new Rectangle($this->db);
    	 }
   		 //$this->figure=new $this->class($this->db);
   		 //$this->image=new Image( $this->figure);
       // $this->figure = $figure;  
       
        
    }

//$figure=$_POST[''];
public function element()
{
	//$this->figure=$_POST[''];
	$this->img=getImage();
	$this->path=getPatch();
	$this->func=getFunc();
}
//public function setElement($img)
public function setElement()
{
	//$this->figure->setFormatImg($img);
		//$this->element();
	//	if ($_POST['nameselect']=='circle'){
	//	$this->figure='circle';
	
		$this->figure->draw();
		
		echo 'fgfgfgfg';
		//echo $this->figure;
		
		// $this->image->dtaw();
		//$this->figure_class->setImage();
	//	}
}




}
?>
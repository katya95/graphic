<?php 

include_once 'config.php';
class Figure
{
public $color;
public $image;
public $name;
public $data;
public  $patch;
public $db;
public  $width=300;
public  $height=300;
public  $format;
public  $temp_image;
public  $figure;
public  $func;
public  $setfigure;
public $img_input;
public  $img_src;
public  $quality = 80;

    public function __construct($db)
    {
        $this->db = $db;  
    }

	public function getColor()
  	{
  		return $this->color;
  	}
  	
	public function setColor($color)
  	{
  		$this->color=$color;
  	}
  	//setting color based on data from form
	public function color()
  	{
  		$img = imagecreatetruecolor(300,300);
  		$white = imagecolorallocate($img,255,255,255);
		$red = imagecolorallocate($img,255,0,0);
		$green = imagecolorallocate($img,0,255,0);
		$blue = imagecolorallocate($img,0,0,255);
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
	public function draw()
	{
		$f='func';
		$this->setFunc($f);
	}
	public function getFigure()
  	{
  		return $this->figure;
  	}
	public function setFigure($figure)
  	{
  		$this->figure=$figure;
  	}
	public function getImage()
	{
		return $this->image;
	}
	public function setImage($image)
  	{
  		$this->image=$image;
  	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
  	{
  		$this->name=$name;
  	}
	public function getPatch()
	{
		return $this->patch;
	}
	public function setPatch($patch)
  	{
  		$this->patch=$patch;
  	}
	public function getData()
	{
		return $this->data;
	}
	public function setData($data)
  	{
  		$this->data=$data;
  	}
  
	public function setFormatPicture($format)
	{
		$this->format=$format;
	}
	public function getFormatPicture()
	{
		return $this->format;
	}
	public  function create()
	{
	
	}
	//setting parameter based on form
  	public function parameterImage()
  	{
		$this->setName($_POST['name']);
		$data=date('Y-m-d H:i:s');
		$this->setData($data);
		$this->setPatch('foto/');
  	}
  	//save picture in database
  	public function savePicture()
  	{
		$query = "INSERT INTO `pictures` (`id`,`name`,`date`,`patch`,`image`,`temp`) VALUES (:id, :name, :date, :patch, :image, :temp)";

		$args = [
		 'id'=>NULL,
    	'name' =>$this->getName(),
		 'date'=>$this->getData(),
		 'patch'=>$this->getPatch(),
		 'image'=>$this->getImage(),
		 'temp'=>'0'
		];
   //$this->db::run($query, $args )->fetch();
  	 $this->db->sql($query, $args);	
  	}
  	//select picture based from name 
	public function outputPicture()
	{
		$name=$this->setName($_POST['user_name']);
		return $this->db->getRows('SELECT * FROM `pictures` WHERE `name` = ? ORDER BY  `date` DESC', [$this->getName()]);
	}
	
	public function getPicture()
	{
		$user=$this->outputPicture();
		foreach($this->outputPicture($_POST['user_name']) as $row)
		{
			echo  '<img src="'.$row['patch'].$row['image'].'"width=30%>'.'<br/>';
  			echo '<br/>';
		}
		
	}
	
	public function outPicture()
	{
  		return $post=$this->db->getRows('SELECT * FROM `pictures`');
	}
	//get picture from most recent date 
	public function getPictureSave()
	{
  		return $this->db->getValue("SELECT `image` FROM `pictures`ORDER BY date DESC LIMIT 1");
	}
	
	public function getPathSave()
	{
  		return $this->db->getValue("SELECT`patch` FROM `pictures`ORDER BY date DESC LIMIT 1");
	}
	//If picture was'nt saved, then replace the previous with flag 'temp'
	public function updateTemp($path,$image)
	{
  		$data=date('Y-m-d H:i:s');
  		$temp='temp';
     	$query = "UPDATE `pictures`
  		SET  `patch` = :patch,
 	 	`image` = :image,
 	 	`date` = :date
 	 	WHERE `temp` = :temp";
		$args = [
	  	'patch' => $path,
		'image' => $image,
		'date' => $data,
		'temp' => $temp
		]; 
		$this->db->sql($query, $args);
	}

    public function getFormatImg()
    {
    	return $this->img_input;
    }
    //setting format of picture
	public function setFormatImg($img)
    {
        // Find format
     	$ext = strtoupper(pathinfo($img, PATHINFO_EXTENSION));
         if($ext == "JPG" OR $ext == "JPEG")
       	 {
         	$this->setFormatPicture($ext);
            $this->img_input = ImageCreateFromJPEG($img);
       	 }
        elseif( $ext == "PNG")
        {
            $this->setFormatPicture($ext);
            $this->img_input = ImageCreateFromPNG($img);
        }
    }
	
	// Save image
    public function saveImage()
    {
          if($this->getFormatPicture() == "JPG" OR $this->getFormatPicture() == "JPEG")
       	 {
            imageJPEG($this->getFormatImg(),$this->getPatch().$this->getImage(),100); 
        }
        // Save PNG
         elseif($this->getFormatPicture() == "PNG")
        {
             imagePNG($this->getFormatImg() ,$this->getPatch().$this->getImage());
        }
    }
	
	// output a picture on screen
	public function outputImage()
    {
          if($this->getFormatPicture() == "JPG" OR $this->getFormatPicture() == "JPEG")
        {
            imageJPEG($this->getFormatImg(),NULL,100); 
        } elseif($this->getFormatPicture() == "PNG")
        {
             imagePNG($this->getFormatImg() ,NULL);
        }
    }
   //save a picture based on info from click button 'save'. If the button is pressed, then save picture as a new record.  
    public function buttonSave()
    {
		if ( $_SESSION['save']==1){
			$this->parameterImage();
			$save_image=random_int(100, 999);
			$this->setImage($save_image.'.jpg');
			$this->saveImage();
			$this->savePicture();
			//$_SESSION['existing']=true;
 			$img=$this->getPictureSave();
			$path=$this->getPathSave();
			echo '<img src="'.$path.$img.'"/>';

		}	else{
			$this->parameterImage();
			$image='2.jpg';
			$p='foto/';
			$this->setImage($image);
			$this->setPatch($p);
			$this->saveImage();
			$this->updateTemp($this->getPatch(),$this->getImage());
			$img=$this->getPictureSave();
			$path=$this->getPathSave();
			echo '<img src="'.$path.$img.'"/>';
		}
		imagedestroy($this->getFormatImg());	
		//session_destroy();
    }
    //get picture based on loading method
    public function pictureCheck()
    {
    	if (!empty($_SESSION['photo'])){
			$path=$this->setPatch($_SESSION['pach']);
			$this->setImage($_SESSION['photo']);
			$this->setFormatImg($this->getPatch().$this->getImage());
			echo $this->getPatch(),$this->getImage();

			} else if(empty($_SESSION['photo'])){
				 if (empty($this->getPathSave()) && $this->getPictureSave()){
 					$image='2.jpg';
					$path='foto/';
						if (is_dir($path)==false){
							mkdir($path);
							$img1 = imagecreatetruecolor(300,300);
							$img1 = imagecreatetruecolor($figure->getPictureWidth(),$figure->getPictureHeight());
							imageJPEG($img1,$path."2.jpg",100);
						}
 					}
			$p=$this->getPathSave();
			$i=$this->getPictureSave();
			$path=$this->setPatch($p);
			$image=$this->setImage($i);
			$img=$this->getPatch().$this->getImage();
			$this->setFormatImg($img);
		}
    }   
}

class Circle extends Figure
{
public $name_center_x=0;
public $name_center_y=0;
public $width=0;
public $height=0;
public $start_circle_degree=0;
public $end_circle_degree=0;	
public $figure='circle';

  	public function getCentreX()
  	{
  		return $this->name_center_x;
  	}

	public function setCentreX($name_center_x)
  	{
  		$this->name_center_x=$name_center_x;
  	}
  	
	public function getCentreY()
  	{
  		return $this->name_center_y;
  	}

	public function setCentreY($name_center_y)
  	{
  		$this->name_center_y=$name_center_y;
  	}

	public function getWidth()
  	{
  		return $this-> width;
  	}
  	
	public function setWidth($width)
  	{
  		$this->width=$width;
  	}
  	
	public function getHeight()
  	{
  		return $this->height;
  	}

	public function setHeight($height)
  	{
  		$this->height=$height;
  	}
  	
	public function getStartDegree()
  	{
  		return $this->start_circle_degree;
  	}
 
	public function setStartDegree($start_circle_degree)
  	{
  		$this->start_circle_degree=$start_circle_degree;
  	}
  	
	public function getEndDegree()
  	{
  		return $this->end_circle_degree;
  	}

	public function setEndDegree($end_circle_degree)
  	{
  		$this->end_circle_degree=$end_circle_degree;
  	}
  	
	public  function create()
	{
	 	$this->setCentreX($_POST['name_center_x']);
		$this-> setCentreY($_POST['name_center_y']);
		$this->setWidth($_POST['width']);
		$this->setHeight($_POST['height']);
		$this->setStartDegree($_POST['start_circle_degree']);
		$this->setEndDegree($_POST['end_circle_degree']);
	}
	
	public function draw()
	{
		$this->create();
		$this->color();
		$this->pictureCheck();
		$f=imagearc($this->getFormatImg(),$this->getCentreX(),$this->getCentreY(),$this->getWidth(),$this->getHeight(),$this->getStartDegree(),$this->getEndDegree(),$this->getColor());
		$this->setFunc($f);
		$this->buttonSave();
		
	}	 	
}

class Rectangle extends Figure
{
public $top_right_x=0;
public $top_right_y=0;
public $bottom_left_x=0;
public $bottom_left_y=0;
public $figure='rectangle';
 	
  	public function getTopRightX()
  	{
  		return $this->top_right_x;
  	}
  	
	public function setTopRightX($top_right_x)
  	{
  		$this->top_right_x=$top_right_x;
  	}
  	
	public function getTopRightY()
  	{
  		return $this->top_right_y;
  	}
  	
	public function setTopRightY($top_right_y)
  	{
  		$this->top_right_y=$top_right_y;
  	}
  	
	public function getBottomLeftX()
  	{
  		return $this->bottom_left_x;
  	}
  	
	public function setBottomLeftX($bottom_left_x)
  	{
  		$this->bottom_left_x=$bottom_left_x;
  	}
  	
	public function getBottomLeftY()
  	{
  		return $this->bottom_left_y;
  	}
  	
	public function setBottomLeftY($bottom_left_y)
  	{
  		$this->bottom_left_y=$bottom_left_y;
  	}
  	
	public  function create()
	{
		$this->setTopRightX($_POST['top_right_x']);
		$this->setTopRightY($_POST['top_right_y']);
		$this-> setBottomLeftX($_POST['bottom_left_x']);
		$this->setBottomLeftY($_POST['bottom_left_y']);
	}
	public function draw()
	{
		$this->create();
		$this->color();
		$this->pictureCheck();
		$img=$this->getFormatImg();
		$f=imagerectangle($img,$this->getTopRightX(),$this->getTopRightY(),$this->getBottomLeftX(),$this->getBottomLeftY(),$this->getColor());;
		$this->setFunc($f);
		$this->buttonSave();
	}
	
	
	
}
class Parallelogram extends Figure
{
protected $top_right_x=0;
protected $top_right_y=0;
protected $bottom_left_x=0;
protected $bottom_left_y=0;
public $figure='parallelogram';
  	
  	
  	public function getTopRightX()
  	{
  		return $this->top_right_x;
  	}
  	
	public function setTopRightX($top_right_x)
  	{
  		$this->top_right_x=$top_right_x;
  	}
  	
	public function getTopRightY()
  	{
  		return $this->top_right_y;
  	}
  	
	public function setTopRightY($top_right_y)
  	{
  		$this->top_right_y=$top_right_y;
  	}
  	
	public function getBottomLeftX()
  	{
  		return $this->bottom_left_x;
  	}
  	
	public function setBottomLeftX($bottom_left_x)
  	{
  		$this->bottom_left_x=$bottom_left_x;
  	}
  	
	public function getBottomLeftY()
  	{
  		return $this->bottom_left_y;
  	}
  	
	public function setBottomLeftY($bottom_left_y)
  	{
  		$this->bottom_left_y=$bottom_left_y;
  	}
	
	public  function createParallelogram()
	{
		$this->setTopRightX($_POST['top_right_x']);
		$this->setTopRightY($_POST['top_right_y']);
		$this-> setBottomLeftX($_POST['bottom_left_x']);
		$this->setBottomLeftY($_POST['bottom_left_y']);
		$this->setX3($this->getTopRightX());
		$this->setY3($this->getBottomLeftY());
		$this->setY4($this->getTopRightY());
		$this->setX4($this-> getBottomLeftX());
		$k1=0.5*(abs($this->getY3()-$this->getTopRightY()));
		//$k2=0.5*(abs($y3-$this->getTopRightY()))+(abs($y3-$this->getTopRightY()));
		$this->setX5($this->getX3());
		$d=$this->getY3()+$k1;
		$this->setY5($d);
		$this->setX6($this->getTopRightX());
		$this->setY6($this->getTopRightY()+$k1);
	}
	
	public function getX3()
  	{
  		return $this->x3;
  	}
  	
	public function setX3($x3)
  	{
  		$this->x3=$x3;
  	}
  	
	public function getY3()
  	{
  		return $this->y3;
  	}
  	
	public function setY3($y3)
  	{
  		$this->y3=$y3;
  	}
	public function getX4()
  	{
  		return $this->x4;
  	}
  	
	public function setX4($x4)
  	{
  		$this->x4=$x4;
  	}
  	
	public function getY4()
  	{
  		return $this->y4;
  	}
  	
	public function setY4($y4)
  	{
  		$this->y4=$y4;
  	}
  	
	public function getX5()
  	{
  		return $this->x5;
  	}
  	
	public function setX5($x5)
  	{
  		$this->x5=$x5;
  	}
  	
	public function getY5()
  	{
  		return $this->y5;
  	}
  	
	public function setY5($y5)
  	{
  		$this->y5=$y5;
  	}
  	
	public function getX6()
  	{
  		return $this->x6;
  	}
  	
	public function setX6($x6)
  	{
  		$this->x6=$x6;
  	}
  	
	public function getY6()
  	{
  		return $this->y6;
  	}
  	
	public function setY6($y6)
  	{
  		$this->y6=$y6;
  	}
  	
	public function getK1()
  	{
  		return $this->k1;
  	}
  	
	public function setK1($k1)
  	{
  		$this->k1=$k1;
  	}
	public function getFirstX()
  	{
  		return $this->first_x;
  	}
  	
	public function setFirstX($first_x)
  	{
  		$this->first_x=$first_x;
  	}
  	
	public function draw()
	{
		$this->createParallelogram();
		$this->color();
		$this->pictureCheck();
		$img=$this->getFormatImg();
		$points = array(
 			$this->getX6(),$this->getY6(),
 			$this->getX5(),$this->getY5(),
 			$this->getBottomLeftX(),$this->getBottomLeftY(),
 			$this->getX4(),$this->getY4()
 		);	
		$f=imagepolygon($this->getFormatImg(),$points,4,$this->getColor());
		$this->setFunc($f);
		$this->buttonSave();
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
public $figure='triangle'; 	
  	
  	public function getFirstX()
  	{
  		return $this->first_x;
  	}
  	
	public function setFirstX($first_x)
  	{
  		$this->first_x=$first_x;
  	}
  	
	public function getFirstY()
  	{
  		return $this->first_y;
  	}
  	
	public function setFirstY($first_y)
  	{
  		$this->first_y=$first_y;
  	}
  	
	public function getSecondX()
  	{
  		return $this->second_x;
  	}
  	
	public function setSecondX($second_x)
  	{
  		$this->second_x=$second_x;
  	}
  	
	public function getSecondY()
  	{
  		return $this->second_y;
  	}
  	
	public function setSecondY($second_y)
  	{
  		$this->second_y=$second_y;
  	}
  	
	public function getThirdX()
  	{
  		return $this->third_x;
  	}
  	
	public function setThirdX($third_x)
  	{
  		$this->third_x=$third_x;
  	}
  	
	public function getThirdY()
  	{
  		return $this->third_y;
  	}
  	
	public function setThirdY($third_y)
  	{
  		$this->third_y=$third_y;
  	}
  	
	public  function create()
	{
	 	$this->setFirstX($_POST['first_x']);
		$this->setFirstY($_POST['first_y']);
		$this->setSecondX($_POST['second_x']);
		$this->setSecondY($_POST['second_y']);
		$this->setThirdX($_POST['third_x']);
		$this->setThirdY($_POST['third_y']);
	}
	
	public function draw()
	{
		$this->create();
		$this->color();
		$this->pictureCheck();
		$img=$this->getFormatImg();
			$points = array(
			$this->getFirstX(),$this->getFirstY(),
			$this->getSecondX(),$this->getSecondY(),
			$this->getThirdX(),$this->getThirdY()
 		);
		$f=imagepolygon($this->getFormatImg(),$points,3,$this->getColor());
		$this->setFunc($f);
		$this->buttonSave();
	}
	
  	
}
class Line extends Figure
{
protected $right_x=0;
protected $right_y=0;
protected $left_x=0;
protected $left_y=0;
public $figure='line';
  	
  	public function getRightX()
  	{
  		return $this->right_x;
  	}
  	
	public function setRightX($right_x)
  	{
  		$this->right_x=$right_x;
  	}
  	
	public function getRightY()
  	{
  		return $this->right_y;
  	}
  	
	public function setRightY($right_y)
  	{
  		$this->right_y=$right_y;
  	}
  	
	public function getLeftX()
  	{
  		return $this->left_x;
  	}
  	
	public function setLeftX($left_x)
  	{
  		$this->left_x=$left_x;
  	}
  	
	public function getLeftY()
  	{
  		return $this->left_y;
  	}
  	
	public function setLeftY($left_y)
  	{
  		$this->left_y=$left_y;
  	}
  	
	public  function create()
	{
	 	$this->setRightX($_POST['right_x']);
		$this->setRightY($_POST['right_y']);
		$this->setLeftX($_POST['left_x']);
		$this->setLeftY($_POST['left_y']);
	}
	
	public function draw()
	{
		$this->create();
		$this->color();
		$this->pictureCheck();
		$img=$this->getFormatImg();
		$f=imageline($this->getFormatImg(),$this->getRightX(),$this->getRightY(),$this->getLeftX(),$this->getLeftY(),$this->getColor());
		$this->setFunc($f);
		$this->buttonSave();
	}
}

class Dot extends Figure
{
protected $x=0;
protected $y=0;
public $figure='dot';
     	
  	public function getX()
  	{
  		return $this->x;
  	}
	public function setX($x)
  	{
  		$this->x=$x;
  	}
  	
	public function getY()
  	{
  		return $this->y;
  	}
  	
	public function setY($y)
  	{
  		$this->y=$y;
  	}
  	
	public  function create()
	{
	 	$this->setX($_POST['x']);
		$this->setY($_POST['y']);
	}
	
	public function draw()
	{
		$this->create();
		$this->color();
		$this->pictureCheck();
		$img=$this->getFormatImg();
		$f=imagesetpixel($this->getFormatImg(),$this->getX(),$this->getY(),$this->getColor());
		$this->setFunc($f);
		$this->buttonSave();
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
public $figure='text';

  	public function getText()
  	{
  		return $this->text;
  	}

	public function setText($text)
  	{
  		$this->text=$text;
  	}
  	
	public function getSize()
  	{
  		return $this->size;
  	}

	public function setSize($size)
  	{
  		$this->size=$size;
  	}
  	
	public function getX()
  	{
  		return $this->x;
  	}

	public function setX($x)
  	{
  		$this->x=$x;
  	}
  	
	public function getY()
  	{
  		return $this->y;
  	}
  	
	public function setY($y)
  	{
  		$this->y=$y;
  	}
  	
	public function getAngle()
  	{
  		return $this->angle;
  	}
  	
	public function setAngle($angle)
  	{
  		$this-> angle=$angle;
  	}
  	
	public function getFont()
  	{
  		return $this->font;
  	}
  	
	public function setFont($font)
  	{
  		$this->font=$font;
  	}
  	
	public  function create()
	{
	 	$this->setText($_POST['text']);
	 	$this->setSize($_POST['size']);
	 	$this->setX($_POST['x']);
		$this->setY($_POST['y']);
	 	$this->setFont('fonts/9041.ttf');
	 	$this->setAngle(0);
	}
	
	public function draw()
	{
		$this->create();
		$this->color();
		$this->pictureCheck();
		$img=$this->getFormatImg();
		$string = $this->getText();
		$f=imagefttext ($this->getFormatImg(),$this->getSize(),0,$this->getX(),$this->getY(),$this->getColor(),$this->getFont(),$string);
		$this->setFunc($f);
		$this->buttonSave();
	}
}

class Image {

public $db;
public $img;
protected $figure;
protected $pach;
protected $image;
protected $f;
protected $width;
protected $height;


 public function __construct()
    {
    	 $this->db = new DB();
    }

public function setElement($f)
	{
 		if ($f=='circle'){
   			 $this->figure=new Circle($this->db);
    	 }
    	 if ($f=='square'){
   		 	$this->figure=new Rectangle($this->db);
    	 }
		 if ($f=='oval'){
   			 $this->figure=new Circle($this->db);
    	 }
    	 if ($f=='rectangle'){
   		 	$this->figure=new Rectangle($this->db);
    	 }
		 if ($f=='parallelogram'){
   			 $this->figure=new Parallelogram($this->db);
    	 }
    	 if ($f=='triangle'){
   		 	$this->figure=new Triangle($this->db);
    	 }
		 if ($f=='dot'){
   			 $this->figure=new Dot($this->db);
    	 }
    	 if ($f=='line'){
   		 	$this->figure=new Line($this->db);
    	 }
 		if ($f=='text'){
   		 	$this->figure=new Text($this->db);
    	 }
	
		$this->figure->create();
		$this->figure->color();
	}
	public function getElement()
	{
		return $this->figure->draw();	
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
	//create picture for processing from a given image. I do'nt use because get the data from db or cookies. 
	public function createPicture($path,$image)
    {
     	$this->figure->setImage($image);
     	$this->figure->setPatch($path);
     	$img=$this->figure->getPatch().$this->figure->getImage();
     	$this->figure->setFormatImg($img);
    }
    //save a processed picture on file
	public function savePicture()
    {
   		$this->figure->saveImage();
    }
    
}
?>
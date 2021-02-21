<?php

 //Class wrapper for working with PDO
 
class DB
{

  //const DB_HOST = '127.0.0.1'; 
  const DB_HOST = 'localhost';
  const DB_USER = 'root';
  const DB_PASSWORD = '';
  const DB_NAME = 'graphic';
  const CHARSET = 'utf8';
  const DB_PREFIX = '';
 

  static private $db;
 
  protected static $instance = null;
 
//return PDOStatement. Throws Exception
  public function __construct(){
    if (self::$instance === null){
      try {
        self::$db = new PDO(
          'mysql:host='.self::DB_HOST.';dbname='.self::DB_NAME,
          self::DB_USER,
          self::DB_PASSWORD,
          $options = [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".self::CHARSET
          ]
        );
      } catch (PDOException $e) {
          throw new Exception ($e->getMessage());
      }
    }
    return self::$instance;
  }

  public static function query($stmt)  {
    return self::$db->query($stmt);
  }
 //return PDOStatement
  public static function prepare($stmt)  {
    return self::$db->prepare($stmt);
  }
 
//return int
  static public function exec($query) {
    return self::$db->exec($query);
  }
 
//return string
  static public function lastInsertId() {
    return self::$db->lastInsertId();
  }
 
//return PDOStatement. Throws Exception
  public static function run($query, $args = [])  {
    try{
      if (!$args) {
        return self::query($query);
      }
      $stmt = self::prepare($query);
      $stmt->execute($args);
      return $stmt;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
    }
  }
 
 //any request
  public static function sql($query, $args = [])
  {
    self::run($query, $args);
  }
  
public static function getRow($query, $args = [])  {
    return self::run($query, $args)->fetch();
  }
  
  
public static function getValue($query, $args = [])  {
    $result = self::getRow($query, $args);
    if (!empty($result)) {
      $result = array_shift($result);
    }
    return $result;
  } 
  
public static function getRows($query, $args = [])  {
    return self::run($query, $args)->fetchAll();
  }
  
  
}
?>
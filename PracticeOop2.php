<?php
abstract class Country
{
    use Active;
    protected $slogan;
    public function setSlogan($slogan) 
    {
        return $this->slogan = $slogan;
    }

    abstract function sayHello();


}
interface Boss
{
   public function checkValidSlogan();
    
}
class EnglandCountry extends Country implements Boss 
{
   public function sayHello()
    {
        echo 'Hello';
    }
   public function checkValidSlogan()
    {
        $string = strtolower($this->slogan);
        if(strpos($string,"england") !== false || strpos($string, "english") !== false){
            return true;
        }
        return false;
    }
}      
class VietnamCountry extends Country implements Boss 
{
   public function sayHello()
    {
        echo 'Xin chao';
    }
    public function checkValidSlogan()
    {
        
        $string = strtolower($this->slogan);
        if(strpos($string, "vietnam") !== false && strpos($string, "hust") !== false){
            return true;
        }
        return false;
    }
}    
trait Active
{
   public function defindYourSelf()
    {
        return get_class($this);
    }
}
    
    $englandCountry = new EnglandCountry();
    
    $vietnamCountry = new VietnamCountry();
    
    $englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest');
    
    $vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');
    
    $englandCountry->sayHello(); // Hello

    echo "<br>";
    
    $vietnamCountry->sayHello(); // Xin chao
    
    echo "<br>";
    
    var_dump($englandCountry->checkValidSlogan()); // true
    
    echo "<br>";
    
    var_dump($vietnamCountry->checkValidSlogan()); // false
    
    
    
    
    
// Tạo Trait có tên 'Active'

// Sử dụng để in ra tên class sau khi chạy các lệnh sau (gợi ý: dùng get_class())

echo 'I am ' . $englandCountry->defindYourSelf();

echo "<br>";

echo 'I am ' . $vietnamCountry->defindYourSelf();
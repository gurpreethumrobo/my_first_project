
 <?php
class TV {
  public $model='xyz';
  
  public $volume=1;
  
  function volumeUp()
  {
  
      $this->volume++;
  }
  
  function volumeDown()
  {
  
     $this->volume--;
  }
 
}
$tv_one=new TV;

$tv_two= new TV;

$tv_one->volumeUp();

$tv_two->volumeUp();

echo $tv_one->volume;echo'<br>';

echo $tv_two->volume;

$tv_two->volumeDown();

echo '<br>';

echo $tv_two->volume;
$tv_model=new TV;
$tv_model->model();
echo $tv_model->size;
?>
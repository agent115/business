<?php 
use yii\helpers\Html;
$this->title= 'Главная';
?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                
                <?php foreach ($category as $cat):?>


                <a href="<?=  \yii\helpers\Url::to(['category/view', 'id'=>$cat['id']])?>"> <div class="menu-item" style="background:<?=$cat->keywords?>;" >
                        <i > <img src="/web/<?=$cat->description?>" style="width: 50px;
    height: 50px;"></i>
                      
                  <span class="name" ><i class="clip"><?=$cat->name ;?></i></span>
                  </div></a>
                
                
                <?php endforeach;?>
                
            </div>
        </div>
        
    </div>

    <script type="text/javascript">
//Отобразим окно оповещения
$(".menu-item").hover(function(){
      $(this).css("fontSize","25px");
      $(this).css("color","blue");
      $(this).html("Я оформленный параграф.");}, function(){
      $(this).css("fontSize","1em");
      $(this).css("color","black");
      $(this).html("Я обычный параграф.");
   });</script>
    
   
  
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
</section>
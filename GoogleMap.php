<?php

class GoogleMap extends CWidget{

    public $width   = 700;
    public $height  = 300;
    public $zoom    = 13;
    public $text    = 'we are here!';
    public $id      = 'map';
    public $lat     = '55.752477';    
    public $lon     = '37.615972';
    public $key     = '';
    

    public function run(){
    
        $assets = Yii::app()->getAssetManager()->publish( Yii::getPathOfAlias('ext.GoogleMap' ) . '/assets' );
        $cs = Yii::app()->getClientScript();        
        $cs->registerScriptFile( "//maps.google.com/maps?file=api&v=2&key=".$this->key, CClientScript::POS_END );
        $cs->registerScriptFile( $assets . '/google_map.js', CClientScript::POS_END );
        
        $cs->registerScript("google_map_init", "initialize('".$this->lat."','".$this->lon."',".$this->zoom.",'".$this->text."')", CClientScript::POS_READY);                        
        echo '<div id="map_canvas" style="width:'.$this->width.'px; height: '.$this->height.'px"></div>';
               
    }
}
?>
<br>

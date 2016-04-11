<?php     
    require_once("./lessphp/lessc.inc.php");    
    $less = new lessc();    
    $cssString =  $less->compile("
    //########################################
    @colorLessCompiler: rgb(255, 127, 0);
    @mesureLessCompiler: 1.4em;
    
    .phpLessCompiler(@color, @mesure)
    {
        background-color: @color;
        border: @mesure solid darken(@color, 30%);
        border-radius: @mesure;
        margin: @mesure;
        padding: @mesure;
        font-size: @mesure;
        font-weight: bold;
        color: lighten(@color, 50%);
        font: Verdana;
    }
    
    #phpLessCompiler
    {
        .phpLessCompiler(@colorLessCompiler, @mesureLessCompiler);
        
        li
        {
            margin-left: @mesureLessCompiler; 
        }
    }
    //############################################  
    ");
    
    
?>
<style>
    <?php echo $cssString; ?>
</style>   

<h3>Dit is een html code met css opmaak geproduceerd door een php less compiler</h3>

<p id="phpLessCompiler">Mijn opmaak is geregeld door een php less compiler</p>

<ol id="phpLessCompiler">
   <li>banaan</li>
   <li>appel</li>
   <li>yoghurt</li>
   <li>soyamelk</li>
   <li>havermout</li>    
</ol>
<?php     
    require("./lessphp/lessc.inc.php");    
    $less = new lessc();    
    //$cssString =  $less->compileFile("./css/lessPhpCompiler.less", "./css/lessPhpCompiler.css" );    
    $cssString =  $less->checkedCompile("./css/lessPhpCompiler.less", "./css/lessPhpCompiler.css" );    
    
?>
<style>
    <?php //echo $cssString; ?>
</style>

<link rel="stylesheet" type="text/css" href="./css/lessPhpCompiler.css">  

<h3>Dit is een html code met css opmaak geproduceerd door een php less compiler</h3>

<p id="phpLessCompiler">Mijn opmaak is geregeld door een php less compiler</p>

<ol id="phpLessCompiler">
   <li>banaan</li>
   <li>appel</li>
   <li>yoghurt</li>
   <li>soyamelk</li>
   <li>havermout</li>    
</ol>
<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 12.11.2020
 * Time: 23:10
 */

class footer
{
function __construct()
{
    return $this->loadfooter();
}
    function loadfooter(){
    $footer='
    <script src="assets/js/app.js"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>
    ';
    return $footer;
    }
}
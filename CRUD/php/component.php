<?php
function inputElement()
{
    $ele = "
     <div class=\"input-group-text bg-warning\"><i class=\"fa-solid fa-id-badge\"></i></div>
     <input type=\"text\" autocomplete=\"off\" placeholder=\"ID\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\">
    ";
    echo $ele;
} 

function buttonElement($btid,$styleclass,$text,$name,$attr){
    $btn = "
    <button name='$name' '$attr' class='$styleclass' id='$btid'>$text</button>
    ";
    echo $btn;
}


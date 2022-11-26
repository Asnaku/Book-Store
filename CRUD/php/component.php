<?php
function inputElement($icon, $placeholder, $name, $value)
{
    $ele = "
     <div class=\"input-group-text bg-warning\">$icon</div>
     <input type=\"text\" name='$name' value='$value'  placeholder='$placeholder' class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\">
    ";
    echo $ele;
}

function buttonElement($btid, $styleclass, $text, $name, $attr)
{
    $btn = "
    <button name='$name' '$attr' class='$styleclass' id='$btid'>$text</button>
    ";
    echo $btn;
}

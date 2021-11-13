<?php

// Every time this runs, it is passed the currently reducing object and the current object in the loop
// $r is currently reducing value, $o is current object in the loop
function productListTemplate($r,$o) {
return $r.<<<HTML
<div>
    <div>$o->name</div>
    <div>$o->price</div>
</div>
HTML;
}

?>
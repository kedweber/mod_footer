<?php

echo KService::get('mod://site/bottom.html')
    ->module($module)
    ->attribs($attribs)
    ->display();
<?php

return array(
    'about' => 'app/controller/about',
    'page/([-_a-z0-9]+)' => 'page/show/$1',
    'users/([-_a-z0-9]+)' => 'users/show/$1',
);
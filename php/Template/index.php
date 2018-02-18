<?php

use App\TurkeySub;
use App\VeggieSub;

require_once __DIR__ . '/vendor/autoload.php';


(new TurkeySub)->make();
(new VeggieSub)->make();

<?php

return \StubsGenerator\Finder::create()
    ->in(['source/woocommerce/src/Internal'])
    // finder.php already stubs AccessiblePrivateMethods and stubbing it here would cause a conflict.
    ->notPath('Traits/AccessiblePrivateMethods.php')
    ->sortByName(true)
;

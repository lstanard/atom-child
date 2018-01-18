<?php

namespace CatalystWP\Atom\models;

use CatalystWP\Atom\models\organisms\Header as Header;

add_filter('catalystwp_organism_data', function($data) {
    // debug_log($data);

    $data['header'] = new Header();

    return $data;
});

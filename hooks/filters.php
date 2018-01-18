<?php

namespace CatalystWP\Atom\models;

use CatalystWP\Atom\models\organisms\Header as Header;
use CatalystWP\Atom\models\organisms\Header as Footer;

/**
 * Filter to modify our organism data before rendering
 */

add_filter('catalystwp_organism_data', function ($data) {
    $data['header'] = new Header();
    $data['footer'] = new Footer();

    return $data;
});

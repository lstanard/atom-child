<?php

namespace CatalystWP\Atom\models;

class ChildOrganisms extends \CatalystWP\Nucleus\Model
{
    /**
     * Prepare post data for view
     * @param  int $id WordPress Post ID
     */
    public function initialize($id)
    {
        //set header & footer data
        $this->data['header'] = new organisms\Header();
        $this->data['footer'] = new organisms\Footer();
    }
}

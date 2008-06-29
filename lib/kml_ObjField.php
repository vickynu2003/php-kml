<?php

class kml_ObjField extends kml_SchemaField {

    protected $tagName = 'ObjField';


    /* Constructor */
    function kml_ObjField($name = null, $type = null) {
        parent::kml_SchemaField();
        if ($name !== null) $this->name($name);
        if ($type !== null) $this->type($type);

    }


    /* Render */
    function render($doc) {
        $X = parent::render($doc);
        return $X;
    }

}


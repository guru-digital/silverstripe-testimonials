<?php

class Testimonial extends DataObject {

    private static $db                = array(
        'Author'   => 'Text',
        'Approved' => 'Boolean',
        'Content'  => 'Text'
    );
    private static $searchable_fields = array(
        'Approved',
        'Author',
        'Content'
    );
    private static $summary_fields    = array(
        'Created',
        'Author',
        'Content',
        'Approved'
    );

    function forTemplate() {
        return $this->renderWith('Testimonial');
    }

}

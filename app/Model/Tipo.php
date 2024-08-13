<?php

class Tipo extends AppModel {
    public $hasMany = array(
        'Post' => array(
            "className" => 'posts',
            'foreignKey' => 'tipo_id'
        )
        );
}
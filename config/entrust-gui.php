<?php
return [
    "layout" => "entrust-gui::app",
    "route-prefix" => "admin/backend",
    "pagination" => [
        "users" => 5,
        "roles" => 5,
        "permissions" => 5,
    ],
    "middleware" => ['web', 'entrust-gui.admin'],
    "unauthorized-url" => '/login',
    "middleware-role" => 'admin',
    "confirmable" => false,
    "users" => [
      'fieldSearchable' => [
        'name'=>'like',
        'email'=>'like',
        'roles.name'=>'like'],
    ],
];

<?php
    return [
        'students'        => [StudentController::class, 'index'],
        'students/create' => [StudentController::class, 'create'],
        'students/store'  => [StudentController::class, 'store'],
        'students/delete' => [StudentController::class, 'delete'],
        'students/table'  => [StudentController::class, 'table'],
    ];
?>
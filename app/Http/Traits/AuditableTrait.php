<?php

namespace App\Http\Traits;

trait AuditableTrait {

    public function addCreateLog($model, array $data)
    {
        $model->logs()->create([
            'action' => 'create',
            'fields' => json_encode($data)
        ]);
    }

    public function addUpdateLog($model, array $data)
    {
        $model->logs()->create([
            'action' => 'update',
            'fields' => json_encode($data)
        ]);
    }
}

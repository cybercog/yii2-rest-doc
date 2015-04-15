<?php

namespace tests\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    /**
     * @restdoc-field int $id
     * @restdoc-field string $title
     */
    public function fields()
    {
        return [
            'id',
            'title' => function () {
                return 'title';
            }
        ];
    }
}

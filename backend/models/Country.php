<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $id ID
 * @property string|null $created_at Create Time
 * @property string|null $updated_at Updated At
 * @property string $country_code Country Code
 * @property string|null $name Country Name
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['country_code'], 'required'],
            [['country_code'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 255],
            [['country_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'country_code' => 'Country Code',
            'name' => 'Name',
        ];
    }
}

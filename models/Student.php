<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $student_name
 * @property string $class
 * @property string $phone
 * @property string $email
 * @property string $address
 *
 * @property Subject[] $subjects
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_name', 'class', 'phone', 'email', 'address'], 'required'],
            [['address'], 'string'],
            [['student_name', 'email'], 'string', 'max' => 50],
            [['class'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_name' => 'Student Name',
            'class' => 'Class',
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['student_id' => 'id']);
    }
}

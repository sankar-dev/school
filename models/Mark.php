<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mark".
 *
 * @property integer $id
 * @property integer $student_id
 * @property double $english
 * @property double $maths
 * @property double $science
 *
 * @property Student $student
 */
class Mark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'english', 'maths', 'science'], 'required'],
            [['student_id'], 'integer'],
            [['english', 'maths', 'science'], 'number'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'english' => 'English',
            'maths' => 'Maths',
            'science' => 'Science',
			'Total' => 'Total'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}

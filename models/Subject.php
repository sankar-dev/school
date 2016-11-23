<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $subject_name
 * @property integer $mark
 * @property integer $student_id
 *
 * @property Student $student
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_name', 'mark', 'student_id'], 'required'],
            [['mark', 'student_id'], 'integer'],
            [['subject_name'], 'string', 'max' => 50],
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
            'subject_name' => 'Subject Name',
            'mark' => 'Mark',
            'student_id' => 'Student ID',
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

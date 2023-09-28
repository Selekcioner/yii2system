<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%doctor}}`.
 */
class m230928_082528_create_doctor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%doctor}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100),
            'text' => $this->text(),
            'doctor_id' => $this->integer(),
            'alias' => $this->string(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%doctor}}');
    }
}

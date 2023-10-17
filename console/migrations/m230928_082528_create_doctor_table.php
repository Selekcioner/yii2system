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
            'name' => $this->string(32),

        ]);
        $this->addColumn('doctor', 'id', $this->smallInteger(8).'NOT NULL AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%doctor}}');
    }
}

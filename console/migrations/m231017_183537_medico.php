<?php

use yii\db\Migration;

/**
 * Class m231017_183537_medico
 */
class m231017_183537_medico extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%medico}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)
        ]);
        $this->alterColumn('medico', 'id', $this->smallInteger(8).'NOT NULL AUTO_INCREMENT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231017_183537_medico cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_183537_medico cannot be reverted.\n";

        return false;
    }
    */
}

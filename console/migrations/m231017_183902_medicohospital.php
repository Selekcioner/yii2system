<?php

use yii\db\Migration;

/**
 * Class m231017_183902_medicohospital
 */
class m231017_183902_medicohospital extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%medicohospital}}', [
            'id' => $this->primaryKey(),
            'id_medico' => $this->smallInteger(8),
            'id_hospital' => $this->smallInteger(8)
        ]);
        $this->alterColumn('medicohospital', 'id', $this->smallInteger(8).'NOT NULL AUTO_INCREMENT');

        $this->addForeignKey(
            'chain_to_medico',
            'medicohospital',
            'id_medico',
            'medico',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'chain_to_hospital',
            'medicohospital',
            'id_hospital',
            'hospital',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231017_183902_medicohospital cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_183902_medicohospital cannot be reverted.\n";

        return false;
    }
    */
}

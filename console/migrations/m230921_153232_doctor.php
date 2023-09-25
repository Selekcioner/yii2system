<?php

use yii\db\Migration;

/**
 * Class m230921_153232_doctor
 */
class m230921_153232_doctor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this ->createTable (`doctor`, [

            `id` => $this -> primaryKey(),
        `title` => $this -> string(200),
        `text` => $this -> string(),
        `author_id` => $this -> integer(),
        `alias` => $this -> string(200),
        `data` => $this -> date("Y-m-d"),
         `hits` => $this -> integer(),

        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230921_153232_doctor cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230921_153232_doctor cannot be reverted.\n";

        return false;
    }
    */
}

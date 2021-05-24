<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m210524_073745_add_user_table
 */
class m210524_073745_add_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'role' => Schema::TYPE_STRING . ' NOT NULL',
            'access_token' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210524_073745_add_user_table cannot be reverted.\n";

        return false;
    }
    */
}

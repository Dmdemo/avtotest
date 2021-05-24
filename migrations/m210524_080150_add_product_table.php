<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m210524_080150_add_product_table
 */
class m210524_080150_add_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'number' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'count' => Schema::TYPE_INTEGER . ' NOT NULL',
            'price' => Schema::TYPE_INTEGER . ' NOT NULL'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210524_080150_add_product_table cannot be reverted.\n";

        return false;
    }
    */
}

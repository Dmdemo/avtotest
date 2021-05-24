<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m210524_081418_add_basket_table
 */
class m210524_081418_add_basket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('basket', [
            'id' => Schema::TYPE_PK,
            'id_user' => Schema::TYPE_INTEGER . ' NOT NULL',
            'id_product' => Schema::TYPE_INTEGER . ' NOT NULL',
            'count' => Schema::TYPE_INTEGER . ' NOT NULL',
            'item_price' => Schema::TYPE_INTEGER . ' NOT NULL'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('basket');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210524_081418_add_basket_table cannot be reverted.\n";

        return false;
    }
    */
}

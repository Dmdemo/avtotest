<?php

use yii\db\Migration;

/**
 * Class m210524_081713_add_products_in_basket_table
 */
class m210524_081713_add_products_in_basket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public $table = "{{basket}}";

    public function safeUp()
    {
        $this->insert($this->table, array('id_user'=>'1','id_product'=>'2','count'=>'1','item_price'=>'120000'));
        $this->insert($this->table, array('id_user'=>'1','id_product'=>'1','count'=>'2','item_price'=>'216'));
        $this->insert($this->table, array('id_user'=>'1','id_product'=>'5','count'=>'1','item_price'=>'1245'));
     
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210524_081713_add_products_in_basket_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210524_081713_add_products_in_basket_table cannot be reverted.\n";

        return false;
    }
    */
}

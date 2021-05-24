<?php

use yii\db\Migration;

/**
 * Class m210524_080555_add_products_in_product_table
 */
class m210524_080555_add_products_in_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public $table = "{{product}}";

    public function safeUp()
    {
        $this->insert($this->table, array('name'=>'Ступица 45-К23','count'=>'9','price'=>'108'));
        $this->insert($this->table, array('name'=>'Ступица 45-К2678 (камаз)','count'=>'92','price'=>'120000'));
        $this->insert($this->table, array('name'=>'Головка цилиндра 45.23 (Урал мод 234)','count'=>'34','price'=>'3454'));
        $this->insert($this->table, array('name'=>'Подшипник задний ПР-23/123-9877','count'=>'9','price'=>'1209'));
        $this->insert($this->table, array('name'=>'Тормозная колодка 345-у3','count'=>'2','price'=>'1245'));
        $this->insert($this->table, array('name'=>'Тросик тормоза 1м','count'=>'92','price'=>'323'));
        $this->insert($this->table, array('name'=>'Фильтр масла','count'=>'23','price'=>'1200'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210524_080555_add_products_in_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210524_080555_add_products_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}

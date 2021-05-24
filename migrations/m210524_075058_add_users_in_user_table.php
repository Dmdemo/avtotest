<?php

use yii\db\Migration;

/**
 * Class m210524_075058_add_users_in_user_table
 */
class m210524_075058_add_users_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public $table = "{{user}}";

    public function safeUp()
    {
        {
            $this->insert($this->table, array('username'=>'dima','password'=>'$2y$13$LpMr1ffKwP71zPm809K.dOBAvFjSGAQME27QFijMMIpkz2lV8g/x2','role'=>'admin'));
            $this->insert($this->table, array('username'=>'soso','password'=>'$2y$13$fifU1xKQD7cdzgOKXS4lRu2jdcEIu.urjH9jkZJrUVBRd4B3PBpv.','role'=>'user'));
        }
         
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210524_075058_add_users_in_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210524_075058_add_users_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m190205_125526_migration_magazine
 */
class m190205_125526_migration_magazine extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%magazine}}', [ 
            'id' => $this ->primaryKey(), 
            'address' => $this ->string(), 
            'brend' => $this ->string(), 
            'price' => $this ->integer(), 
            'category' => $this ->string(),
            'country' => $this ->string(),
            'rating' => $this ->float()
            ]); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%magazine}}'); 
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190205_125526_migration_magazine cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m190205_125541_migration_post
 */
class m190205_125541_migration_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [ 
            'id' => $this ->primaryKey(), 
            'magazine_id' => $this ->integer(), 
            'name' => $this ->string(), 
            ]); 

        $this->addForeignKey( 
                'fk-post-magazine_id', 
                'post', 
                'magazine_id', 
                'magazine', 
                'id', 
                'CASCADE' 
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}'); 
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190205_125541_migration_post cannot be reverted.\n";

        return false;
    }
    */
}

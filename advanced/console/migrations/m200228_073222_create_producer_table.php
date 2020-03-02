<?php

use yii\db\Migration;

/**
 * Class m200228_073222_create_producer_table
 */
class m200228_073222_create_producer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->createTable('producer', [
				    'id' => $this->primaryKey(),
				    'name' => $this->string()->notNull(),
				    'surname' => $this->string()->notNull()
		    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       // echo "m200228_073222_create_producer_table cannot be reverted.\n";

		    $this->dropTable('producer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_073222_producer cannot be reverted.\n";

        return false;
    }
    */
}

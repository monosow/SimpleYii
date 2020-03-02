<?php

use yii\db\Migration;

/**
 * Class m200228_130716_insert_producer_table
 */
class m200228_130716_insert_producer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->batchInsert('producer',['name','surname'],[
		    		['prod1','prod1surname'],
				    ['prod2','prod2surname'],
				    ['prod3','prod3surname'],
		    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m200228_130716_insert_producer_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_130716_insert_producer_table cannot be reverted.\n";

        return false;
    }
    */
}

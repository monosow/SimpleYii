<?php

use yii\db\Migration;

/**
 * Class m200228_130743_insert_genre_table
 */
class m200228_130743_insert_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->batchInsert('genre',['name'],[
				    ['genre1'],
				    ['genre2'],
				    ['genre3']
		    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m200228_130743_insert_genre_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_130743_insert_genre_table cannot be reverted.\n";

        return false;
    }
    */
}

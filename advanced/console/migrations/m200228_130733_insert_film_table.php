<?php

use yii\db\Migration;

/**
 * Class m200228_130733_insert_film_table
 */
class m200228_130733_insert_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->batchInsert('film',['name','description','producer_id'],[
				    ['film1','film1description','1'],
				    ['film2','film2description','1'],
				    ['film3','film3description','2'],
				    ['film4','film4description','2'],
				    ['film5','film5description','3']
		    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m200228_130733_insert_film_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_130733_insert_film_table cannot be reverted.\n";

        return false;
    }
    */
}

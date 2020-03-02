<?php

use yii\db\Migration;

/**
 * Class m200228_130831_insert_genre_film_table
 */
class m200228_130831_insert_genre_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->batchInsert('genre_film',['genre_id','film_id'],[
				    ['1', '1'],
				    ['1', '2'],
				    ['2', '3'],
				    ['3', '2']
		    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200228_130831_insert_genre_film_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_130831_insert_genre_film_table cannot be reverted.\n";

        return false;
    }
    */
}

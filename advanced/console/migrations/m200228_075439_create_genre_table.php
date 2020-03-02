<?php

use yii\db\Migration;

/**
 * Class m200228_075439_create_genre_table
 */
class m200228_075439_create_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->createTable('genre', [
				    'id' => $this->primaryKey(),
				    'name' => $this->string()->notNull()
		    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200228_075439_create_genre_table cannot be reverted.\n";
        $this->dropTable('genre');
        //return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_075439_create_genre_table cannot be reverted.\n";

        return false;
    }
    */
}

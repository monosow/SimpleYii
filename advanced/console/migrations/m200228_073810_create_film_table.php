<?php

use yii\db\Migration;

/**
 * Class m200228_073810_create_film_table
 */
class m200228_073810_create_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->createTable('film', [
				    'id' => $this->primaryKey(),
				    'name' => $this->string()->notNull(),
				    'description' => $this->string(),
				    'producer_id' => $this->integer()
		    ]);

		    $this->addForeignKey(
				    'fk-film-producer_id',
				    'film',
				    'producer_id',
				    'producer',
				    'id',
				    'CASCADE',
				    'CASCADE'
		    );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200228_073810_create_film_table cannot be reverted.\n";
		    $this->dropForeignKey(
				    'fk-film-producer_id',
				    'film'
		    );
		    $this->dropTable('film');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_073810_create_films_table cannot be reverted.\n";

        return false;
    }
    */
}

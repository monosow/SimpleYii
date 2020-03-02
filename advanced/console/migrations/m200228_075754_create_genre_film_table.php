<?php

use yii\db\Migration;

/**
 * Class m200228_075754_create_genre_film_table
 */
class m200228_075754_create_genre_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		    $this->createTable('genre_film', [
		    		'id' => $this->primaryKey(),
				    'genre_id' => $this->integer(),
				    'film_id' => $this->integer()
		    ]);

		    $this->addForeignKey(
				    'fk-genre-film-film_id',
				    'genre_film',
				    'film_id',
				    'film',
				    'id',
				    'CASCADE',
				    'CASCADE'
		    );

		    $this->addForeignKey(
				    'fk-genre-film-genre_id',
				    'genre_film',
				    'genre_id',
				    'genre',
				    'id',
				    'CASCADE',
				    'CASCADE'
		    );

		    $this->createIndex(
				    'id',
				    'genre_film',
				    array('film_id','genre_id'),
				    true
		    );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200228_075754_create_genre_film_table cannot be reverted.\n";
		    $this->dropForeignKey(
				    'fk-genre-film-film_id',
				    'genre_film'
		    );
		    $this->dropForeignKey(
				    'fk-genre-film-genre_id',
				    'genre_film'
		    );
		    $this->dropIndex('id','genre_film');
		    $this->dropTable('genre_film');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_075754_create_genre_film_table cannot be reverted.\n";

        return false;
    }
    */
}

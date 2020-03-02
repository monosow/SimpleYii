<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "genre_film".
 *
 * @property int $id
 * @property int|null $genre_id
 * @property int|null $film_id
 *
 * @property Film $film
 * @property Genre $genre
 */
class GenreFilm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre_film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_id', 'film_id'], 'integer'],
            [['film_id', 'genre_id'], 'unique', 'targetAttribute' => ['film_id', 'genre_id']],
            [['film_id'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['film_id' => 'id']],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genre_id' => 'Genre ID',
            'film_id' => 'Film ID',
        ];
    }

    /**
     * Gets query for [[Film]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'film_id']);
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }
}

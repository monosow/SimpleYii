<?php

namespace frontend\models;

use yii\base\model;

/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $producer_id
 *
 * @property Producer $producer
 * @property GenreFilm[] $genreFilms
 * @property Genre[] $genres
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['producer_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
            [['producer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producer::className(), 'targetAttribute' => ['producer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'producer_id' => 'Producer ID',
        ];
    }

    /**
     * Gets query for [[Producer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(Producer::className(), ['id' => 'producer_id']);
    }

    /**
     * Gets query for [[GenreFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenreFilms()
    {
        return $this->hasMany(GenreFilm::className(), ['film_id' => 'id']);
    }

    /**
     * Gets query for [[Genres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genre::className(), ['id' => 'genre_id'])->viaTable('genre_film', ['film_id' => 'id']);
    }
}

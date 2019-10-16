<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m190813_144519_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer()
        ]);

        //индекс и внешний ключ для таблицы 'user'
        $this->createIndex(
            'ind-post-user_id',
            'comments',
            'user_id'
        );

        $this->addForeignKey(
            'fk-post-user_id',
            'comments',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        //индекс и внешний ключ для таблицы 'article'
        $this->createIndex(
            'ind-post-article_id',
            'article',
            'article_id'
        );

        $this->addForeignKey(
            'fk-post-article_id',
            'article',
            'article_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-post-user_id',
            'comments'
        );

        $this->dropIndex(
            'ind-post-user_id',
            'comments'
        );


        $this->dropForeignKey(
            'fk-post-article_id',
            'article'
        );

        $this->dropIndex(
            'ind-post-article_id',
            'article'
        );

        $this->dropTable('comments');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%goods_attr_value}}`.
 */
class m180610_024824_create_goods_attr_value_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT = \'商品spu值表\'';
        }

        $this->createTable('{{%goods_attr_value}}', [
            'id' => $this->primaryKey(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%goods_attr_value}}');
    }
}

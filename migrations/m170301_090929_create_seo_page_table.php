<?php

use yii\db\Migration;

/**
 * Handles the creation of table `seo_page`.
 */
class m170301_090929_create_seo_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('seo_page', [
            'id' => $this->primaryKey(),
            'route' =>$this->string()->notNull()->unique(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('seo_page');
    }
}

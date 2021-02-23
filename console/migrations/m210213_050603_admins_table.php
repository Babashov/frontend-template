<?php

use yii\db\Migration;

/**
 * Class m210213_050603_admins_table
 */
class m210213_050603_admins_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('admins',[
           'id'=>$this->primaryKey(),
           'username'=>$this->string()->notNull()->unique(),
           'password'=>$this->string()->notNull(),
           'rememberMe'=>$this->bigInteger()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210213_050603_admins_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210213_050603_admins_table cannot be reverted.\n";

        return false;
    }
    */
}

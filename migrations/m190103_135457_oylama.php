<?php

use yii\db\Migration;

/**
 * Class m190103_135457_oylama
 */
class m190103_135457_oylama extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
		$this->createTable('ballot', [
            'ballot_id' => $this->primaryKey(),
            'ballot_type' => "ENUM('active','passive')",
			'user_type' => $this->integer(255)->notNull(),
			'user_id' => $this->integer(128)->notNull(),
			'ballot_started' => $this->dateTime(20)->notNull(),
            'ballot_ended' => $this->dateTime()->notNull(),
			'ballot_created' => $this->dateTime(20)->notNull(),
			'choise_id' => $this->integer(255)->notNull(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
		$this->createTable('choise', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'position' => $this->string(20)->notNull(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
		

        $this->createTable('results', [
            'result_id' => $this->primaryKey(),
            'user_id' => $this->integer(20)->notNull(),
            'choise_id' => $this->integer(20)->notNull(),
            'ballot_id' => $this->integer(20)->notNull(),
            
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'); 
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('ballot');
        $this->dropTable('choise');
  
	
        $this->dropTable('user');
        $this->dropTable('results');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_135457_oylama cannot be reverted.\n";

        return false;
    }
    */
}

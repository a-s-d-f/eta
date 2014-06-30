<?php

namespace Fuel\Migrations;

class Create_menus
{
	public function up()
	{
		\DBUtil::create_table('menus', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'type' => array('constraint' => 100, 'type' => 'varchar'),
			'comment' => array('type' => 'text'),
			'imgurl' => array('constraint' => 255, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('menus');
	}
}
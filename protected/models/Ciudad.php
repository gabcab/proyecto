<?php
/**
 * This is the model class for table "tbl_ciudad".
 *
 * The followings are the available columns in table 'tbl_marca':
 * @property string $id_ciudad
 * @property string $nombre
 */

class Ciudad extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ciudad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nombre', 'safe', 'on'=>'search'),
		);
	}




}
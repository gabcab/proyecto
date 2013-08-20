<?php

/**
 * This is the model class for table "tbl_vehiculo_venta".
 *
 * The followings are the available columns in table 'tbl_vehiculo_venta':
 * @property string $id_vehiculo
 * @property integer $id_vendedor
 * @property integer $marca_id
 * @property integer $id_modelo
 * @property integer $id_traccion
 * @property integer $year
 * @property double $precio
 * @property integer $kilometraje
 * @property string $color_ext
 * @property string $color_int
 * @property integer $id_tipo_combustible
 * @property string $condicion_vehiculo
 * @property integer $id_transmision
 * @property string $cilindros
 * @property string $accesorios
 * @property string $comentario
 * @property string $fecha_creacion
 * @property string $fecha_vencimiento
 * @property integer $id_ciudad
 * @property integer $activo
 */
class Vehiculo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vehiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_vehiculo_venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_vendedor, marca_id, id_modelo, id_traccion, year, precio, kilometraje, color_ext, color_int, id_tipo_combustible, condicion_vehiculo, id_transmision, cilindros, accesorios, fecha_creacion, fecha_vencimiento, id_ciudad', 'required'),
			array('id_vendedor, marca_id, id_modelo, id_traccion, year, kilometraje, id_tipo_combustible, id_transmision, id_ciudad, activo', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('color_ext, color_int, condicion_vehiculo, cilindros, accesorios, comentario', 'length', 'max'=>255),
			array('fecha_creacion, fecha_vencimiento', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_vehiculo, id_vendedor, marca_id, id_modelo, id_traccion, year, precio, kilometraje, color_ext, color_int, id_tipo_combustible, condicion_vehiculo, id_transmision, cilindros, accesorios, comentario, fecha_creacion, fecha_vencimiento, id_ciudad, activo', 'safe', 'on'=>'search'),
		);
	}

	/**
	*RELACION MUCHOS A UNO => BELONGS_TO
	*Relacion Uno a Muchos => HAS_MANY	
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		// Parametros(TipoRelacion, "Modelos", "Campo")
		return array(
			'ciudad' => array(self::BELONGS_TO, "Ciudad", "id_ciudad"), 
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vehiculo' => 'Id Vehiculo',
			'id_vendedor' => 'Id Vendedor',
			'marca_id' => 'Marca',
			'id_modelo' => 'Modelo',
			'id_traccion' => 'Traccion',
			'year' => 'Year',
			'precio' => 'Precio',
			'kilometraje' => 'Kilometraje',
			'color_ext' => 'Color Ext',
			'color_int' => 'Color Int',
			'id_tipo_combustible' => 'Tipo Combustible',
			'condicion_vehiculo' => 'Condicion Vehiculo',
			'id_transmision' => 'Transmision',
			'cilindros' => 'Cilindros',
			'accesorios' => 'Accesorios',
			'comentario' => 'Comentario',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_vencimiento' => 'Fecha Vencimiento',
			'id_ciudad' => 'Ciudad',
			'activo' => 'Activo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_vehiculo',$this->id_vehiculo,true);
		$criteria->compare('id_vendedor',$this->id_vendedor);
		$criteria->compare('marca_id',$this->marca_id);
		$criteria->compare('id_modelo',$this->id_modelo);
		$criteria->compare('id_traccion',$this->id_traccion);
		$criteria->compare('year',$this->year);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('kilometraje',$this->kilometraje);
		$criteria->compare('color_ext',$this->color_ext,true);
		$criteria->compare('color_int',$this->color_int,true);
		$criteria->compare('id_tipo_combustible',$this->id_tipo_combustible);
		$criteria->compare('condicion_vehiculo',$this->condicion_vehiculo,true);
		$criteria->compare('id_transmision',$this->id_transmision);
		$criteria->compare('cilindros',$this->cilindros,true);
		$criteria->compare('accesorios',$this->accesorios,true);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_vencimiento',$this->fecha_vencimiento,true);
		$criteria->compare('id_ciudad',$this->id_ciudad);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
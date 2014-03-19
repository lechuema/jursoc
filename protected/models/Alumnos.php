<?php

/**
 * This is the model class for table "alumnos".
 *
 * The followings are the available columns in table 'alumnos':
 * @property integer $id_alumno
 * @property integer $nro_alumno
 * @property integer $digito_verificador
 * @property integer $id_tipo_documento
 * @property integer $nro_documento
 * @property string $nomyap
 * @property integer $anio_ingreso
 * @property string $direccion
 * @property string $telefono
 * @property string $mail
 * @property string $contrasenia
 * @property string $ultima_actualizacion
 * @property integer $id_estado_alumno
 * @property integer $id_usuario
 * @property integer $modificado_por_departamento
 * @property integer $graduado
 */
class Alumnos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ultima_actualizacion', 'required'),
			array('nro_alumno, digito_verificador, id_tipo_documento, nro_documento, anio_ingreso, id_estado_alumno, id_usuario, modificado_por_departamento, graduado', 'numerical', 'integerOnly'=>true),
			array('nomyap', 'length', 'max'=>250),
			array('direccion, mail', 'length', 'max'=>150),
			array('telefono', 'length', 'max'=>60),
			array('contrasenia', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_alumno, nro_alumno, digito_verificador, id_tipo_documento, nro_documento, nomyap, anio_ingreso, direccion, telefono, mail, contrasenia, ultima_actualizacion, id_estado_alumno, id_usuario, modificado_por_departamento, graduado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_alumno' => 'Id Alumno',
			'nro_alumno' => 'Nro Alumno',
			'digito_verificador' => 'Digito Verificador',
			'id_tipo_documento' => 'Id Tipo Documento',
			'nro_documento' => 'Nro Documento',
			'nomyap' => 'Nomyap',
			'anio_ingreso' => 'Anio Ingreso',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'mail' => 'Mail',
			'contrasenia' => 'Contrasenia',
			'ultima_actualizacion' => 'Ultima Actualizacion',
			'id_estado_alumno' => 'Id Estado Alumno',
			'id_usuario' => 'Id Usuario',
			'modificado_por_departamento' => 'Modificado Por Departamento',
			'graduado' => 'Graduado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_alumno',$this->id_alumno);
		$criteria->compare('nro_alumno',$this->nro_alumno);
		$criteria->compare('digito_verificador',$this->digito_verificador);
		$criteria->compare('id_tipo_documento',$this->id_tipo_documento);
		$criteria->compare('nro_documento',$this->nro_documento);
		$criteria->compare('nomyap',$this->nomyap,true);
		$criteria->compare('anio_ingreso',$this->anio_ingreso);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('contrasenia',$this->contrasenia,true);
		$criteria->compare('ultima_actualizacion',$this->ultima_actualizacion,true);
		$criteria->compare('id_estado_alumno',$this->id_estado_alumno);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('modificado_por_departamento',$this->modificado_por_departamento);
		$criteria->compare('graduado',$this->graduado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumnos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

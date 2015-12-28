<?php
class Clusuario
{
	public $nombres;
	public $apellidos;
	public $alias;
	public $contrasenia;
	public $email;

	public function _setnombres($n)
	{
		$this->nombres=$n;
	}

	public function _setapellidos($n)
	{
		$this->apellidos=$n;
	}

	public function _setalias($n)
	{
		$this->alias=$n;
	}

	public function _setcontrasenia($n)
	{
		$this->contrasenia=$n;
	}

	public function _setemail($n)
	{
		$this->email=$n;
	}




	public function _getnombres()
	{
		return $this->nombres;
	}

	public function _getapellidos()
	{
		return $this->apellidos;
	}

	public function _getalias()
	{
		return $this->alias;
	}

	public function _getcontrasenia()
	{
		return $this->contrasenia;
	}


	public function _getemail()
	{
		return $this->email;
	}
}
?>

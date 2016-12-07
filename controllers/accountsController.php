<?php
/**
 * Clase accountsController
 * @author Carlos Canepa <carlos.canepa09@gmail.com>
 */
cLass accountsController extends AppsController
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Metodo Index
	 * Metodo que permite hacer el listado de las cuentas
	 * @return array Conjunto de cuentas a mostrar
	 * @author Carlos Canepa <carlos.canepa09@gmail.com>
	 */
	public function index()
	{
		$conditions = array(
		"conditions" => "accounts.user_id = users.id"
		);
		$accounts = $this->accounts->find("accounts, users", "all", $conditions);
		$accountsCount = $this->accounts->find("accounts", "count");
		$this->set(compact("accounts", "accountsCount"));
	}

	/**
	 * Metodo Add
	 * Metodo que permite hacer la insercion de las cuentas
	 * @author Carlos Canepa <carlos.canepa09@gmail.com>
	 */
	public function add()
	{
		/*if ($_SESSION["type_name"] == "administrador") 
		{*/
			if ($_POST) 
			{

				if ($this->accounts->save("accounts", $_POST)) 
				{
					$this->redirect(array("controller"=>"accounts"));
				} else 
				{
					$this->redirect(array("controller"=>"accounts", "method"=>"add"));
				}
			}

			$this->set("users", $this->accounts->find("users"));
			$this->_view->setView("add");
		/*} else 
		{
			$this->redirect(array("controller"=>"accounts"));
		}*/
	}

	/**
	 * Metodo Edit
	 * Metodo que permite hacer la actualizacion de los registros de cuentas
	 * @author Carlos Canepa <carlos.canepa09@gmail.com>
	 */
	public function edit($id)
	{
		if ($id) 
		{
			$options = array(
			"conditions" => "id=".$id
			);
			$account = $this->accounts->find("accounts","first", $options);
			$this->set("account", $account);
			$this->set("users", $this->accounts->find("users"));
		}

		if ($_POST) 
		{
			
			if ($this->accounts->update("accounts", $_POST)) 
			{
				$this->redirect(
					array(
						"controller"=>"accounts"
					)
				);
			} else 
			{
				$this->redirect(
					array(
						"controller"=>"accounts",
						"method"=>"edit/".$_POST["id"]
					)
				);
			}
		}
	}

	/**
	 * Metodo Delete
	 * Metodo que permite hacer la eliminacion de registros de cuentas
	 * @author Carlos Canepa <carlos.canepa09@gmail.com>
	 */
	public function delete($id)
	{
		if ($_GET) 
		{
			$conditions = "id=".$id;
			if ($this->accounts->delete("accounts", $conditions)) 
			{
				$this->redirect(array("controller"=>"accounts"));
			} else 
			{
				$this->redirect(array("controller"=>"accounts", "method"=>"add"));
			}
		}
	}

}

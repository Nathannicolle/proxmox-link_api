<?php
namespace controllers;
 use Ajax\JsUtils;
 use PHPMV\ProxmoxApi;
 use Ubiquity\attributes\items\router\Route;

 /**
  * Controller ServerController
  * @property JsUtils $jquery
  */
 #[Route('server')]
class ServerController extends \controllers\ControllerBase{

	public function index(){
		$this->loadView("ServerController/index.html");
	}

	#[Route(path: "vms", name: "sever.name")]
	public function add(){
		$api = new ProxmoxApi("62.210.189.39", "sio2a", "sio2a");
        $vms= $api->getVMs();
        $dt = $this->jquery->semantic()->dataTable('dt-vms', \stdClass::class, $vms);
        $dt->setFields(['vmid', 'name']);
		$this->jquery->RenderView('ServerController/add.html');

	}

}

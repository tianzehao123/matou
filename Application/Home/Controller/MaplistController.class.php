<?php
namespace Home\Controller;
use Think\Controller;
class MaplistController extends Controller 
{
	public function index(){
		//上下线
		$this->display('maplist/maplist');

	}
}
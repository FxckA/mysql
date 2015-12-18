<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
    public function index(){
		$this -> show('Menu page!', 'utf-8');
    }
}
<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home(){
		return View('pages.home');
	}

	public function quienes(){
		return View('pages.quienes');
	}

	public function socios(){
		return View('pages.socios');
	}

	public function reguladoras(){
		return View('pages.reguladoras');
	}

	public function precios(){
		return View('pages.precios');
	}

	public function normatividad(){
		return View('pages.normatividad');
	}

	public function riesgos(){
		return View('pages.riesgos');
	}

	public function contacto(){
		return View('pages.contacto');
	}
}

<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Gracenote\Gracenote;
use CodeIgniter\HTTP\IncomingRequest;

class Search extends Controller {
	
	public function index()
	{
		$request = new IncomingRequest(new \Config\App(), new \CodeIgniter\HTTP\URI());

		echo view("artist");	
		echo view("gracenote");		
		
		$name = (string) $request->getPostGet("name");
		$id = (string) $request->getPostGet("gracenoteID");
		$tag = (string) $request->getPostGet("gracenoteTag");
		$artist = (string) $request->getPostGet("artistName");
		//$userId = (string) $request->getPostGet("gracenoteUserId");

		error_log("crap" . $name, 0);
		error_log($id,0);
		error_log($tag,0);
		//error_log($userId,0);
		
		$gracenote = new Gracenote($id, $tag, null);				
		$gracenote->register();
		$return = $gracenote->searchArtist($artist);
		echo "<pre>";
		print_r($return);
		echo "</pre>";		
	}
}
?>
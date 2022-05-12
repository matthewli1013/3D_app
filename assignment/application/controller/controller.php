<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageMethod = null)
	{
		// echo $pageURI;
		$this->load = new Load();
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageMethod();
	}
	// Load the home page mmethod — this method is loaded by default — http://localhost:8888/3D_Apps_2019/lab9/index.php/
	// The view here is my Coca Cola Virtual Museum, which s simply a repository of all the things we have done from lab 1 to Lab 8
    function home()
	{
		// At the moment data is input from a JSON file directly from the getJsonData.js file using the JQuery AJAX method .getJson()
		// $.getJSON('../application/model/data.json', function(jsonObj) {handler goes here} — The URL here should really be a path to this home() method.
		// Then you would:
		
		// Insert code to access a method in the Model class that returns a PHP array with the data you need, e.g.
		// $data = $this->model->apiGetJsonMuseumData();
		$this->load->view('viewCocaCola');
		// Echo the data out to the browser and trap it in the $.getJSON() handler and inject it into the view as before
		// echo ($data);

	}

	// Note the way that the Model class is written, such that the constructor in the Model 
	// makes a conection to the database when the new Model class in instatiated the constructor above.
	// These three methods folling are only examples of what you could do to play aorund with storing and 
	// accessing your data — you might show a deeper understanding by developing other CRUD (Create, Read, Update, and Delete) methods 
	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  

    function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  	

    // API call to select 3D images — not data is being requested from the Model class and injected into the view
	// There is no JS file associated with this API call, you test it on the browser as indicated above.
	// But, the viewDrunks.php has JS associated that byopassing the Controller class to access the data
	// Again, as indicated in the tutorial 8, think about how you can moduify and improve this API method to better fit MVC
	function apiLoadImage()
	{
	   $data = $this->model->dbGetBrand();
	   // Note, the viewDrinks.php view being loaded here calls a new model
	   // called modelDrinkDetails.php, which is not part of the Model class
	   // It is a separate model illustrating that you can have many models
	   $this->load->view('viewDrinks', $data);
	}

	// Load the Coca Cola view and get data from the model — this is the same as the home() method.
	function apiCocaCola()
	{
		$this->load->view('viewCocaCola');	
	}

	// We can see from this method how to get data from the model and echo it out to the view
	// You should be able to see how to combine this with the method above to arrive at the suggested home() method.
	function apiGetCokeData()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  	  	
	
}
?>
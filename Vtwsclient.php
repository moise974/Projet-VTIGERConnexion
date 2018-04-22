<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vtwsclient extends CI_Controller 
{

	function __construct()
	{
        parent::__construct();
        $this->data = array();
        $this->data2 = array();
    }


    //function appeler par défaut : charge la vue connexion
    public function index()
	{
        session_unset(); 
        session_destroy();
        $this->load->view("connexion");
	}


    //connection a vtiger et chargement de la vue accueil
    public function vtigerapi()
    {   
        $this->load->helper('vtigerConnect');

        $uName = $this->input->post('u_name');
		$uAccessKey = $this->input->post('userak');
        $url = 'https://demo.vtiger.com';

        $_SESSION["url"] = $url;
		$_SESSION["user_name"] = $uName;
		$_SESSION["user_access_key"] = $uAccessKey;


        $userName = $_SESSION["user_name"];
        $userAccessKey = $_SESSION["user_access_key"];
        

        $client = new Vtiger_WSClient($url);
        $login = $client->doLogin($userName, $userAccessKey);
        if (!$login) 
        {
            echo '<pre>'.print_r($client, true).'</pre>';
            die("Login Failed");
        } 
        else 
        {    
            $data = array(
            'username' => $this->input->post('u_name'),
            'useraccesskey' => $this->input->post('userak'),);
            $this->load->view('templates/header');
            $this->load->view("accueil", $data);
            $this->load->view("templates/footer");
            
        }
    }


    //Affiche l'accueil
    public function accueil()
    {
    	$this->load->view("templates/header");
    	$this->load->view("accueil");
    	$this->load->view("templates/footer");
    }


    //Affiche le formulaire d'interrogation de donnée vtiger
    public function afficherform() 
        {
        	$this->load->helper('html');
        	$this->load->helper('url');
        	$this->load->view('templates/header');
         	$this->load->view("vtigerAffichage");
         	$this->load->view("templates/footer");
        }
    
    
    //Traitement de l'affichage d'un compte aprés l'entrer de caractére
    public function traiterform()
    {
        /**connection a vtiger + requete**/
        $this->load->library('form_validation');
        $this->load->helper('vtigerConnect');
        $this->load->helper('html');
        $this->load->helper('url');

        $userName = $_SESSION["user_name"];
        $userAccessKey = $_SESSION["user_access_key"];


        //$url = 'https://vtigercrm.rsoft.re';
        $url = $_SESSION["url"];
        $client = new Vtiger_WSClient($url);
        $login = $client->doLogin($userName, $userAccessKey);
        if (!$login) 
        {
            echo '<pre>'.print_r($client, true).'</pre>';
            die("Login Failed");
        } 
        else 
        {   
            $donner = $this->input->post('nameU');     
            $query = "select * from Accounts where accountname LIKE '%$donner%' LIMIT 1;";
            $response = $client->doQuery($query);
            //$data['nom']= $this->User_model->liste();
        }

        $this->data['nom']= $response;
        //echo json_encode($response2);
        //echo json_encode($response);
        //$this->load->view('vtigerReponse',$this->data);
        $this->load->view('templates/header');
        $this->load->view('affichagecompte',$this->data);
        $this->load->view("templates/footer");
    }


    //Traitement de l'affichage d'une des tables sélectionner
    public function traiterform2()
    {
        /**connection a vtiger + requete**/
        $this->load->library('form_validation');
        $this->load->helper('vtigerConnect');
        $this->load->helper('html');
        $this->load->helper('url');

        $userName = $_SESSION["user_name"];
        $userAccessKey = $_SESSION["user_access_key"];


        //$url = 'https://vtigercrm.rsoft.re';
        $url = $_SESSION["url"];
        $client = new Vtiger_WSClient($url);
        $login = $client->doLogin($userName, $userAccessKey);
        if (!$login) 
        {
            echo '<pre>'.print_r($client, true).'</pre>';
            die("Login Failed");
        } 
        else 
        {   
        	//Récupere le choix de l'utilisateur
            $choix = $this->input->post('choix_table');
            $limit = $this->input->post('limit');        
            $query2 = "select * from $choix LIMIT $limit;";
            $response2 = $client->doQuery($query2);
            //$data['nom']= $this->User_model->liste();
            $this->data2['choix'] = $response2;
            //var_dump($choix);
            //$_SESSION["choixtable"] = $this->data2['choix'];
        }
        
        //Si choix de la table contacts
        if ($choix == "Contacts") 
        {
        	$this->load->view('templates/header');
        	$this->load->view('affichechoixtable1',$this->data2);
        	$this->load->view("templates/footer");
        }

        //Sinon choix de la table accounts
        else if ($choix == "Accounts") 
        {
        	$this->load->view('templates/header');       
        	$this->load->view('affichechoixtable2',$this->data2);
        	$this->load->view("templates/footer");
    	}

    	else if ($choix == "Vendors")
    	{
    		$this->load->view('templates/header');       
        	$this->load->view('affichechoixtable3',$this->data2);
        	$this->load->view("templates/footer");
    	}
    	
    }


    /*
    public function Affichechoixtable()
    {
        $this->load->view('choixtable');
    }
    */


    //Affiche le formulaire d'envoi de table aux format csv
    public function afficheformucsv()
    {
        $this->load->view('templates/header');
        $this->load->view('formucsv');
        $this->load->view("templates/footer");
    }


    public function vtigerchoixtable()
    {
        $choix = $this->input->post('choix_table');
        $limit = $this->input->post('limit');
        $_SESSION["choix_table"] = $choix;
        $_SESSION["limit"] = $limit;

        if ($choix == "Contacts")
        {
            $this->load->view('templates/header'); 
            $this->load->view("choixcsv/Choixcontactcsv");
            $this->load->view("templates/footer");
        }

        //Sinon choix de la table accounts
        else if ($choix == "Accounts") 
        {
            $this->load->view('templates/header');       
            $this->load->view("choixcsv/Choixaccountcsv");
            $this->load->view("templates/footer");
        }

        else if ($choix == "Vendors")
        {
            $this->load->view('templates/header');       
            $this->load->view("choixcsv/Choixvendorcsv");
            $this->load->view("templates/footer");
        }
    }


    //Récupération donner du formulaire et traitement de l'envoie au format csv
    public function vtigercsvexport()
    {
        //connection a vtiger + requete
        $this->load->helper('file');        
        $this->load->library('form_validation');
        $this->load->helper('vtigerConnect');
        $this->load->helper('html');
        $this->load->helper('url');

        $userName = $_SESSION["user_name"];
        $userAccessKey = $_SESSION["user_access_key"];


        //$url = 'https://vtigercrm.rsoft.re';
        $url = $_SESSION["url"];
        $client = new Vtiger_WSClient($url);
        $login = $client->doLogin($userName, $userAccessKey);
        if (!$login) 
        {
            echo '<pre>'.print_r($client, true).'</pre>';
            die("Login Failed");
        } 
        else 
        {   
            //Récupere le choix de table et colonne de l'utilisateur
            $choix = $_SESSION["choix_table"];
            $limit = $_SESSION["limit"];
            $choixcolonne = $this->input->post('choix_colonne');
            if ($choixcolonne != "*") 
            {
                $choixcolonne2 = $this->input->post('choix_colonne2');
                $choixcolonne3 = $this->input->post('choix_colonne3');
                $choixcolonne4 = $this->input->post('choix_colonne4');
                $query3 = "select $choixcolonne,$choixcolonne2,$choixcolonne3,$choixcolonne4 from $choix LIMIT $limit;";
            }
            else
            {                
                $query3 = "select $choixcolonne from $choix LIMIT $limit;";
            }  

            $response3 = $client->doQuery($query3);
            $this->data3['choix'] = $response3;
        }
        //Récupere le nom du fichier
        $nomfichier = $this->input->post('namefichier');

        //Si l'utilisateur n'entre rien comme nom de fichier
        if (empty($nomfichier)){
            $nomfichier = "envoi.csv";
        }
        //chmod($nomfichier,0770);
        /*  fopen : Ouvre un fichier
        w+ : Ouvre en lecture et écriture ;
        Place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0.
        Si le fichier n'existe pas, on tente de le créer.*/
        $fichier = fopen($nomfichier, 'w+') or die ("Erreur d'ouverture du fichier");

        foreach ($response3 as $value) 
		{
            //fputcsv formate une ligne en CSV et l'écrit dans un fichier ($fichier ici)        
        	if (!fputcsv($fichier, $value))
  			{
   				echo 'Un problème est survenu lors de la génération du fichier CSV';
   			}
   	    }
                $this->load->view('templates/header');
                $this->load->view("resultcsv");
                $this->load->view("templates/footer");
            
               
        // fermeture du fichier csv
        //fclose($fichier);
    }

	

    /*
    public function vtigercsvimport()
    {
        $fichier = 'test.csv';
        // On instancie l'objet SplFileObject
        $csv = new SplFileObject($fichier);
        // On indique que le fichier est de type CSV 
        $csv->setFlags(SplFileObject::READ_CSV);
        // On indique le caractère délimiteur, ici c'est la virgule 
        $csv->setCsvControl(',');     
        foreach($csv as $ligne)
        {
            print_r($ligne);
            echo "<br />";
        }
    }
    */

    /*

    public function vtigercsvimport2()
    {
    	$row = 1;
     	if (($handle = fopen("test.csv", "r")) !== FALSE) 
     	{
     		while (($data = fgetcsv($handle,0, ",")) !== FALSE) 
     		{
     			$num = count($data);
     			echo "<p> $num champs à la ligne $row: <br /></p>\n";
     			$row++;
     			for ($c=0; $c < $num; $c++) 
     			{
     				echo $data[$c] . "\n";
     			}
     		}
     	fclose($handle);
     	}
 	}
	*/

}
?>
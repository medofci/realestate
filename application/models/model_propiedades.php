<?php

class Model_Propiedades extends CI_Model{
	
	function __construct(){
		
		parent::__construct();
		$this->load->database();
		
	}

	//INSERTAR PROPIEDADES
	public function insertarPropiedades($campos, $imagenes, $locations ,$features){
		
		if($this->db->insert('properties', $campos)){
			$id = $this->db->insert_id();
			
			//INSERTAR PHOTOS
			foreach($imagenes as $values){
				
				$this->insertarPropiedadesFotos($id, $values);
			}
			
			
			//INSERTAR LOCATION
			$this->insertarPropiedadesLocacion($id, $locations[0], $locations[1]);
		
			//INSERTAR FEATURES (AMENIDADES)
			foreach($features as $values){
				
				$this->insertarPropiedadesFeatures($id, $values);
				
		    }
		    
			return true;
			
		}else{
			
			return false;
		}
		
		
	}
	
	//INSERTAR FOTOS
	private function insertarPropiedadesFotos($property_id, $imagenes){
		
		$campos = array(
		'property_id'=> $property_id,
		'type'=> '',
		'photo_path'=>$imagenes,
		'photo_status'=> ''
		);
		
		if($this->db->insert('properties_photos', $campos)){
			return true;
		}else{
			return false;
		}
	}
	
	//INSERTAR LOCATION
	private function insertarPropiedadesLocacion($property_id, $latitude, $longitude){
		
		$campos = array(
		'property_id'=> $property_id,
		'latitude'=> $latitude,
		'longitude'=> $longitude
		);
		
		if($this->db->insert('properties_locations', $campos)){
			return true;
		}else{
			return false;
		}
	}
	
		//INSERTAR FEATURES(AMENIDADES)
	private function insertarPropiedadesFeatures($property_id, $features){
		
		$campos = array(
		'property_id'=> $property_id,
		'feature_id'=>$features,
		);
		
		if($this->db->insert('properties_features', $campos)){
			return true;
		}else{
			return false;
		}
	}
	
	
	
	
  //MOSTRAR PROPIEDADES HOME
	public function mostrarPropiedadesHome(){
		
		$query = $this->db->query("SELECT * FROM properties, properties_photos, provinces , sectors WHERE properties.province_id = provinces.province_id AND properties.sector_id = sectors.sector_id AND properties_photos.property_id = properties.property_id  GROUP BY properties.property_id ORDER BY properties.property_id DESC ");
		
		return $query->result_array();
		
	}
	
   //MOSTRAR PROPIEDADES
	public function mostrarPropiedades($limit, $offset, $sort_by, $sort_order){
		
		//$order_by = 'properties.property_id';
		//$sort_by = 'properties.sale_price';
		//$sort_order = 'DESC';
		
		$query = $this->db->query("SELECT * FROM properties, properties_photos, provinces , sectors WHERE properties.province_id = provinces.province_id AND properties.sector_id = sectors.sector_id AND properties_photos.property_id = properties.property_id  GROUP BY properties.property_id ORDER BY properties.$sort_by $sort_order LIMIT $offset, $limit ");
		
		return $query->result_array();
		
	}
	
	//MOSTRAR DETALLE DE LA PROPIEDAD
	public function mostrarPropiedad($property_id){
		
		$query = $this->db->query("SELECT * FROM properties, provinces ,sectors, users WHERE property_id = $property_id AND properties.province_id = provinces.province_id AND properties.sector_id = sectors.sector_id AND properties.user_id = users.user_id ORDER BY properties.property_id DESC");
		
		return $query->result_array();
		
	}
	
	//MOSTRAR FEATURES
	public function mostrarFeatures(){
		
		$query = $this->db->query("SELECT * FROM features");
		
		return $query->result_array();
		
	}
	
	//MOSTRAR PROPIEDADES FEATURES
	public function mostrarPropiedadesFeatures($property_id){
		
		$query = $this->db->query("SELECT * FROM features f, properties_features pf WHERE pf.property_id = $property_id AND f.feature_id = pf.property_feature_id");
		
		return $query->result_array();
		
	}
	
	//MOSTRAR PROPIEDADES FOTOS
	public function mostrarPropiedadesFotos($property_id){
		
		$query = $this->db->query("SELECT * FROM properties_photos WHERE property_id = $property_id");
		
		return $query->result_array();
		
	}
	
	//MOSTRAR PROPIEDADES LOCATIONS
	public function mostrarPropiedadesLocations($property_id){
		
		$query = $this->db->query("SELECT * FROM properties_locations WHERE property_id = $property_id");
		
		return $query->result_array();
		
	}
	
	//OBTENER TOTAL DE PROPIEDADES
	public function obtenerTotalPropiedades(){
		
		$query = $this->db->query("SELECT COUNT(*) AS 'total' FROM properties");
		
		return $query->result_array();

	}
	
	
	//OBTENER TIPOS DE PROPIEDADES
	public function obtenerPropertiesType(){
		
		$query = $this->db->query("SELECT * FROM properties_type");
		
		return $query->result_array();
		
	}
	
	
	
	//BUSCAR PROPIEDADES
	
	public function buscarPropiedades($limit, $offset, $sort_by, $sort_order){
		
		$query = $this->db->query("SELECT * FROM properties, properties_photos, provinces , sectors WHERE properties.province_id = provinces.province_id AND properties.sector_id = sectors.sector_id AND properties_photos.property_id = properties.property_id  GROUP BY properties.property_id ORDER BY properties.$sort_by $sort_order LIMIT $offset, $limit ");
		
		return $query->result_array();
		
		
	}
	

	//BEGIN PAGINATION
	
public function record_count() {
        return $this->db->count_all("sectors");
    }
 

    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sectors");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	function search($limit, $offset, $sort_by, $sort_order) {
		
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('sector_id', 'sector_name');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'sector_id';
		
		// results query
		$q = $this->db->select('sector_id, sector_name')
			->from('sectors')
			->limit($limit, $offset)
			->order_by($sort_by, $sort_order);
		
		$ret['rows'] = $q->get()->result();
		
		// count query
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('sectors');
		
		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
		
		return $ret;
	}
   
   
	//END PAGINATION
}
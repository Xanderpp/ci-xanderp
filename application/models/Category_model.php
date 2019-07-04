<?php
	class Category_model extends CI_Model	{
		public function __construct()	{
			$this -> load -> database();
		}
		
		public function create_category()	{
			$data = array(
				'name' => $this -> input -> post('name')
			);
			
			return $this -> db -> insert('categories', $data);
		}
		
		public function get_categories()	{
			$this -> db -> order_by('name');
			$qry = $this -> db -> get('categories');
			
			return $qry -> result_array();
		}
		
		public function get_category($id)	{
			$qry = $this -> db -> get_where('categories', array('id' => $id));
			
			return $qry -> row();
		}
	}
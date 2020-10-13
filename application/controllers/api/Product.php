<?php
   
   /** Developed by Amoko Ivan **/
   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;
     
class Product extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        // echo $_SERVER['REQUEST_METHOD'];
        if(!empty($id)){
            $data = $this->db->get_where("products", ['id' => $id])->row_array();
            print_r($data);
            // if(sizeof($data) < 1){
            //     $this->response(['Product created successfully.'], REST_Controller::HTTP_NO_CONTENT);
            // }
        }else{
            $data = $this->db->get("products")->result();
            // print_r($data);
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {

        $method = $_SERVER['REQUEST_METHOD'];
        $param = $_REQUEST;
        // $input = array(
        //     'name'  => 
        // );
        // print_r($param);
       /* $input = $this->input->post('name', true);
        echo "none";
        echo $input;
        print_r($input);*/
        // echo $input;
        // $this->db->set($input);
        $this->db->insert('products',$param);
     
        $this->response(['Product created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('products', $input, array('id'=>$id));
     
        $this->response(['Product updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('products', array('id'=>$id));
       
        $this->response(['Product deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}
?>

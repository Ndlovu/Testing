<?php Class Main_model extends CI_Model
{

	public function details($data)
	{
		$query = $this->db->get_where('details',array('phone'=>$data['phone'],'email'=>$data['email']));

		if($query->num_rows()>0)
		{
			return "EXISTS";
		}

		else
		{     	

			$this->db->insert('details',$data);
			return "SUCCESS";
		}

	}

	public function fetch()
	{
        $details = $this->db->get('details');
        return $details->result();
    }

	   	
}


<?php
class data extends CI_Model{

	function get_data()
{
    $this->db->select('ItemName, QuantitySold');
    $query = $this->db->get('transactions');

    $results = array();

    foreach ($query->result_array() as $row)
    {
        if(!isset($results[$row['ItemName']]))
            $results[$row['ItemName']] = array('name' => $row['ItemName'], 'data' => array());
        $results[$row['ItemName']]['data'][] = $row['QuantitySold'];
    }

    //Rekey arrays so they aren't associative
    $results = array_values($results);
    return $results;
}

	
}

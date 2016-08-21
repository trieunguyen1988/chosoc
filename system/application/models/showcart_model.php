<?php
#****************************************#
# * @Author: lehieu008                   #
# * @Email: lehieu008@gmail.com          #
# * @Website: http://www.iscvietnam.net  #
# * @Copyright: 2008 - 2009              #
#****************************************#
class Showcart_model extends Model
{
    function __construct()
	{
		parent::Model();
	}

	function get($select = "*", $where = "")
	{
        $this->db->cache_off();
		$this->db->select($select);
		if($where && $where != "")
		{
			$this->db->where($where);
		}
		#Query
		$query = $this->db->get("tbtt_showcart");
		$result = $query->row();
		$query->free_result();
		return $result;
	}

	function fetch_join($select = "*", $join_1, $table_1, $on_1, $join_2, $table_2, $on_2, $where = "", $order = "shc_id", $by = "DESC", $start = -1, $limit = 0, $distinct = false)
	{
        $this->db->cache_off();
		$this->db->select($select);
		if($join_1 && ($join_1 == "INNER" || $join_1 == "LEFT" || $join_1 == "RIGHT") && $table_1 && $table_1 != "" && $on_1 && $on_1 != "")
		{
			$this->db->join($table_1, $on_1, $join_1);
		}
		if($join_2 && ($join_2 == "INNER" || $join_2 == "LEFT" || $join_2 == "RIGHT") && $table_2 && $table_2 != "" && $on_2 && $on_2 != "")
		{
			$this->db->join($table_2, $on_2, $join_2);
		}
		if($where && $where != "")
		{
			$this->db->where($where);
		}
		if($order && $order != "" && $by && ($by == "DESC" || $by == "ASC"))
		{
            $this->db->order_by($order, $by);
		}
		if((int)$start >= 0 && $limit && (int)$limit > 0)
		{
			$this->db->limit($limit, $start);
		}
		if($distinct && $distinct == true)
		{
			$this->db->distinct();
		}
		#Query
		$query = $this->db->get("tbtt_showcart");
		$result = $query->result();
		$query->free_result();
		return $result;
	}

	function add($data)
	{
		return $this->db->insert("tbtt_showcart", $data);
	}

	function update($data, $where = "")
	{
    	if($where && $where != "")
    	{
			$this->db->where($where);
    	}
		return $this->db->update("tbtt_showcart", $data);
	}

	function delete($value_1, $field_1 = "shc_id", $value_2 = "", $field_2 = "", $in = true)
    {
		if($in == true)
		{
			$this->db->where_in($field_1, $value_1);
		}
		else
		{
            $this->db->where($field_1, $value_1);
		}
		if($value_2 && $value_2 != "" && $field_2 && $field_2 != "")
		{
            $this->db->where($field_2, $value_2);
		}
		return $this->db->delete("tbtt_showcart");
    }
}
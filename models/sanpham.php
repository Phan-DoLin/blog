<?php 


class sanpham extends Model
{
	
	public $table = 'san_pham';
    public $primary_key = 'ma_sp';



    public function lay_bang($postdata)
    {
    	return db_get_all($postdata);
    }

    public function xoa_sp($postdata)
    {
    	$id='ma_sp='.$postdata;

    	return db_delete($this->table,$id);
    }
    public function sua_sp($ma)
    {
        
        $where='ma_sp='.$ma;
        $bienso=postdata();

        return db_update($this->table,$bienso,$where);
    }
    public function them_sp($postdata)
    {
        return db_insert($this->table,$postdata);
    }

    public function phan_trang($page, $per = 2, $where = ''){

        $start = ($page-1)*$per;

        $sql = "SELECT * FROM `$this->table` {$where} limit $start,$per";

        return db_get_all($sql);
    }

    public function dem_so_trang($where=''){

        $sql = "SELECT * FROM `$this->table` {$where}";

        return count_row($sql);

    }

    
}



?>
<?php

class DB {

    private $pdo = null;
    public $table = '';

    public function __construct($dsn, $uname, $pwd) {
        $this->pdo = new PDO($dsn, $uname, $pwd);
    }

    //查询
    public function query($fileds = '*', $condition = '1=1') {
        $sql = sprintf('select %s from %s where %s', $fileds, $this->table, $condition);
        $sth = $this->pdo->query($sql);
        return $sth->fetchAll(2);
    }

    //修改
    public function update($data, $condition) {
        $result = '';
        foreach ($data as $k => $v) {
            $result .= $k . '="' . $v . '",';
        }
        $result = rtrim($result, ',');
        $sql = sprintf('update %s set %s  where %s', $this->table, $result, $condition);
        $sth = $this->pdo->exec($sql);
        return $sth ;
    }
    //删除
      public  function del($condition){
        $sql = sprintf('delete from %s where %s', $this->table,$condition);
        $sth = $this->pdo->exec($sql);
       return $sth;
    }

    //增加
    public function add($data) {
        $fields = '';
        $values = '';
        foreach ($data as $k => $v) {
            $fields.= $k . ',';
            $values.= '"' . $v . '",';
        }
        $fields = rtrim($fields, ',');
        $values = rtrim($values, ',');
        $sql = sprintf('insert into %s (%s) value(%s)', $this->table, $fields, $values);
        $sth = $this->pdo->exec($sql);
       return $sth;
    }

}

function M($table) {
    $db = new DB('mysql:dbname=advmysql;host=127.0.0.1;charset=utf8', 'root', '');
    $db->table = $table;
    return $db;
}

//print_r($db->query('students'));
print_r(M('students')->query('sname'));

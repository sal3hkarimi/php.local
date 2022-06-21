<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

class DB
{
    const HOST = "192.168.1.25";
    public $table;
    public static $prefix;
    public static $name;

    public function all()
    {
        $name = static::$name;
        return "SELECT * FROM {$this->table}. {$name}";
    }

    public function find($id, $columns = null)
    {
        $columns = !is_null($columns) ? implode(',', $columns) : '*';
        return "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }

    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }

    private function sort()
    {
        self::$prefix;
        static::HOST;

    }

    public static function export()
    {
        self::HOST;
        return "export";

    }

    public function action()
    {
        return $this->delete(25);
    }

}


$connections = new DB();

$connections->table = "users";
dd($connections->find(56, array('id', 'name', 'tabel', 'delete')));

dd($connections::export());

dd($connections->all());

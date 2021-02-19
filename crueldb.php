<?php 

/* Meanings
*
* 000 = True
* 404 = False
* 184 = Database exists
* 042 = Database does not exists
* 111 = Database created
* 222 = Database opened
* 555 = Database deleted
* 444 = Could not delete the database
*
*/

function encrypt($plain, $pin)
{
    for ($x = 0; $x < strlen($plain); $x++) {
        $cipher[] = ord($plain[$x]) + $pin + ($x * $pin);
    }
    return implode('/', $cipher);
}

function decrypt($cipher, $pin)
{
    $data = explode('/', $cipher);
    $plain = '';
    for ($x = 0; $x < count($data); $x++) {
        $plain .= chr($data[$x] - $pin - ($x * $pin));
    }
    return $plain;
}

class crdb {
    public $db;

    public $dbname;

    public $pin;

    public $answer;

    public $tf_answer;

    // Create a new Database

    public function newdb($dbnam = "mydatabase", $pin)
    {
        if (!file_exists($dbnam . ".cdb")){
            $this->dbname = $dbnam . ".cdb";
            $this->db = fopen($this->dbname, "x+");
            file_put_contents($this->dbname, "<?php", FILE_APPEND);

            $this->pin = $pin;

            $this->answer = 111;
            $this->tf_answer = 000;
        }
        else {
            $this->dbname = $dbnam;
        }
    }

    // Open a Database

    public function opendb($dbnam, $pin)
    {
        if (file_exists($dbnam . ".cdb")) {
            $this->db = file($dbnam . ".cdb");
            $this->dbname = $dbnam . ".cdb";

            $this->pin = $pin;
            $fil = file_get_contents($this->dbname);
            $file = decrypt($fil, $this->pin);
            file_put_contents($this->dbname, $file);

            $this->answer = 222;
            $this->tf_answer = 000;
        }
        else {
            return false;
            $this->answer = 042;
            $this->tf_answer = 404;
        }
    }

    // Delete database

    public function deletedb($dbname)
    {
        if (file_exists($dbname . ".cdb")){
            $del = unlink($dbname . ".cdb");

            if ($del) {
                $this->answer = 555;
                $this->tf_answer = 000;
            }
            else {
                $this->answer = 444;
                $this->tf_answer = 404;
            }
        }
        else {
            $this->answer = 444;
            $this->tf_answer = 404;
        }
    }

    // Check if the database exists

    public function db_exists($db)
    {
        if (file_exists($db . ".cdb")) {
            $this->answer = 184;
            $this->tf_answer = 000;
            return true;
        }
        else {
            $this->answer = 042;
            $this->tf_answer = 404;
            return false;
        }
    }

    // Create a variable

    public function set($objex, $value)
    {
        $co = "\n$" . $objex . " = $value;";
        $file = $this->dbname;
        file_put_contents($file, $co, FILE_APPEND);
    }

    // Get a variable

    public function get($objext)
    {    
        include $this->dbname;
        $n = $$objext;
        return $n;
    }

    // Check if the virable is set

    public function is_set($var)
    {
        include $this->dbname;
        if (isset($$var)) {
            $this->answer = 184;
            $this->tf_answer = 000;
            return true;
        }
        else {
            $this->answer = 042;
            $this->tf_answer = 404;
            return false;
        }
    }

    // Close the database

    public function closedb()
    {
        $fil = file_get_contents($this->dbname);
        $file = encrypt($fil, $this->pin);
        file_put_contents($this->dbname, $file);
    }
}
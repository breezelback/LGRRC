<?php
class LGRRCManager
{
    public $conn = '';
    public $default_table = '';
    public $default_year = '';
    public $hostname         = 'localhost';
    public $dbUser             = 'calabarzondilggo_lgrrcuser';
    public $dbPassword         = "`(q/*kTRV366'mqD@=eS-";
    public $dbName             = 'calabarzondilggo_lgrrc';





    function __construct()
    {
        if (!isset($this->db)) {
            $conn = new mysqli($this->hostname, $this->dbUser, $this->dbPassword, $this->dbName);
            if ($conn->connect_error) {
                die("Database is not connected: " . $conn->connect_error);
            } else {
                $this->db = $conn;
            }
        }
    }

    public function fetchListofBooks()
    {

        $sql = 'SELECT kp.id, c.CATEGORY_TITLE,sc.SUB_CATEGORY_TITLE, kp.title,kp.author,kp.quantity,kp.publication_year FROM `tbl_knowledge_products` kp left join tbl_category c on c.ID = kp.category_id left join tbl_subcategory sc on sc.ID = kp.sub_category_id ORDER BY sc.ID ASC';
        $query = $this->db->query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = [
                'id'    => $row['id'],
                'title'    => $row['title'],
                'author'    => $row['author'],
                'quantity'    => $row['quantity'],
                'category'    => $row['CATEGORY_TITLE'],
                'subcategory'    => $row['SUB_CATEGORY_TITLE'],
                'publication_year'    => $row['publication_year'],
            ];
        }
        return $data;
    }
    public function fetchLinawinNatinSeason()
    {
        $sql = ' SELECT DISTINCT(`videoSeason`) FROM `tbl_videos` WHERE `category` = "linawin natin" ORDER BY `videoSeason` LIMIT 10 ';
        $query = $this->db->query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = [
                'videoSeason'    => $row['videoSeason'],
            ];
        }
        return $data;
    }

    public function fetchSagisagSeason()
    {
        $sql = 'SELECT DISTINCT(`videoSeason`) FROM `tbl_videos` WHERE `category` = "sagisag ng pagasa" ORDER BY `videoSeason` ';
        $query = $this->db->query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = [
                'videoSeason'    => $row['videoSeason'],
            ];
        }
        return $data;
    }
    public function fetchLinawinVideo()
    {
        $sql = 'SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category` FROM `tbl_videos` WHERE `category` = "linawin natin" order by id asc';
        $query = $this->db->query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = [
                'id'    => $row['id'],
                'videoLink'    => $row['videoLink'],
                'videoTitle'    => $row['videoTitle'],
                'dateUploaded'    => $row['dateUploaded'],
                'category'    => $row['category'],
            ];
        }
        return $data;
    }
    public function fetchSagisagVideo()
    {
        $sql = 'SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category` FROM `tbl_videos` WHERE `category` = "sagisag ng pagasa" order by id asc';
        $query = $this->db->query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = [
                'id'    => $row['id'],
                'videoLink'    => $row['videoLink'],
                'videoTitle'    => $row['videoTitle'],
                'dateUploaded'    => $row['dateUploaded'],
                'category'    => $row['category'],
            ];
        }
        return $data;
    }
}

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
    public function fetchMessage($id)
    {
        $sql = 'SELECT * from tbl_quotations where id = "' . $id . '"';
        $query = $this->db->query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data = [
                'quotation'    => $row['quotation'],
            ];
        }
        return $data;
    }
    public function fetchAboutCarousel()
    {
        $sql = ' SELECT `id`, `position`, `imageName`, `dateUploaded` FROM `tbl_about` ORDER BY `position` ASC';
        $query = $this->db->query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = [
                'id'    => $row['id'],
                'position'    => $row['position'],
                'imageName'    => $row['imageName'],
                'dateUploaded'    => $row['dateUploaded'],
            ];
        }
        return $data;
    }
     public function fetchExperts()
    {
        $directory = 'images/expert/dilg4a/Regional Office/';
        $files1 = scandir($directory, 0);
        $fileLimit = 44;
        $fileCount = 1;
        $data = [];

        foreach ($files1 as $i => $value) {
            // Exclude entries for the current directory (.) and parent directory (..)
            if ($value !== '.' && $value !== '..') {
                // Build the SQL query
                $sql = "SELECT id, `name`, imageName FROM tbl_expert WHERE province = 'DILG IV-A Regional Office' and name LIKE '%" . substr($value, 2, -4) . "%'";
                // Execute the query
                $query = $this->db->query($sql);

                // Fetch and store the result
                while ($row = mysqli_fetch_assoc($query)) {
                    $data[] = [
                        'id'    => $row['id'],
                        'name'  => $row['name'],
                        'img'   => $row['imageName'],
                    ];
                    // Build the SQL query to update data
                    $newFilename = $value; // Adjust as needed
                    $updateSql = "UPDATE tbl_expert SET imageName = '$newFilename' WHERE id = " . $row['id'];

                    // Execute the update query
                    $this->db->query($updateSql);
                }

                // Check if the file limit is reached
                $fileCount++;
                if ($fileCount > $fileLimit) {
                    break;
                }
            }
        }

        return $data;
    }
}

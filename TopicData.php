
<?php

class TopicData {
    
}
?>


<?php

class TopicData {
 protected $connection;
    
    public function connect()
    {
    $this->connection = new PDO("mysql:host=localhost;dbname=topics", "root", "root");     
    }      
}
?>


<?php
class TopicData {

    protected $connection = null;

    public function connect()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=suggestotron", "root", null);
    }

    public function getAllTopics()
    {
        $query = $this->connection->prepare("SELECT * FROM topics");
        $query->execute();

        return $query;
    }
}
?>





















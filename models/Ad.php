<?php

require_once "../bootstrap.php";

class Ad extends Model
{

    protected static $table = 'ads';

    protected function insert()
    {

    }

    protected function update()
    {

    }

    public static function all()
    {
        self::dbConnect();
        $stmt = self::$dbc->query("SELECT * from ads");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public static function insertComment($arrayOfCommentProperties)
    {
        $insert = "INSERT INTO comments (post_id, user_id, comment) VALUES (:post_id, :user_id, :comment);"

        $statement = self::$dbc->prepare($insert);
        $statement->bindValue(':post_id', $arrayOfCommentProperties['post_id'], PDO::PARAM_STR);
        $statement->bindValue(':user_id', $arrayOfCommentProperties['user_id'], PDO::PARAM_STR);
        $statement->bindValue(':comment', $arrayOfCommentProperties['comment'], PDO::PARAM_STR);
        $statement->execute();

    }
}

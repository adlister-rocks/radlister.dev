<?php

require_once 'Model.php';

class User extends Model
{
    protected static $table = "users";

    public static function insert()
    {
        self::dbConnect();
        $insert = "INSERT INTO static::$table
            (first_name, last_name, email, password)
            VALUES (:first_name, :last_name, :email, :password);";

        $statement = self::$dbc->prepare($insert);
        $statement->bindValue(':first_name', $this->first_name, PDO::PARAM_STR);
        $statement->bindValue(':last_name', $this->last_name, PDO::PARAM_STR);
        $statement->bindValue(':email', $this->email, PDO::PARAM_STR);
        $statement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $statement->execute();

        $lastInsertId = self::$dbc->lastInsertId();

        $this->id = $lastInsertId;
        return $lastInsertId;
    }

    public static function update()
    {
        $update = "UPDATE users SET
            first_name = :first_name,
            last_name = :last_name,
            email = :email,
            password = :password
            WHERE id = :id);";

        $statement = self::$dbc->prepare($update);
        $statement->bindValue(':first_name', $this->first_name, PDO::PARAM_STR);
        $statement->bindValue(':last_name', $this->last_name, PDO::PARAM_STR);
        $statement->bindValue(':email', $this->email, PDO::PARAM_STR);
        $statement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $statement->execute();

        $lastInsertId = self::$dbc->lastInsertId();
    }
}

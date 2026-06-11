<?php

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}


function tambahCharacter($data)
{
    global $conn;

    $name = $data["name"];
    $description = $data["description"];
    $image = $data["image"];

    mysqli_query(
        $conn,
        "INSERT INTO characters(name, description, image)
        VALUES
        ('$name','$description','$image')"
    );

    return mysqli_affected_rows($conn);
}


function hapusCharacter($id)
{
    global $conn;

    mysqli_query(
        $conn,
        "DELETE FROM characters
        WHERE id_character = $id"
    );

    return mysqli_affected_rows($conn);
}


function editCharacter($data)
{
    global $conn;

    $id = $data["id_character"];
    $name = $data["name"];
    $description = $data["description"];
    $image = $data["image"];

    mysqli_query(
        $conn,
        "UPDATE characters SET
        name='$name',
        description='$description',
        image='$image'
        WHERE id_character=$id"
    );

    return mysqli_affected_rows($conn);
}

?>

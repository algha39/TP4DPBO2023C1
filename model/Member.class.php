<?php
class Member extends DB
{
    function getMember()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $id_pesanan = $data['id_pesanan'];

        $query = "INSERT INTO `members`(`name`, `email`, `phone`, `join_date`, `id_pesanan`) VALUES ('$name', '$email', '$phone', '$join_date', '$id_pesanan')";
        return $this->execute($query);
    }

    function update($data)
    {
        $id = $data['id_edit'];
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $id_pesanan = $data['id_pesanan'];

        $query = "UPDATE members SET name = '$name', email = '$email', phone = '$phone', join_date = '$join_date', id_pesanan = '$id_pesanan' WHERE id = '$id'";
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM members WHERE id = $id";
        return $this->execute($query);
    }
}

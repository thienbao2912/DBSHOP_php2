<?php
namespace App\Models;
class Calendar extends BaseModels
{
    protected $table = 'calendarwork';

    // Danh sách
    public function getAll()
    {
        $sql = "SELECT calendarWork.id AS calendarWork_id, calendarWork.*, user.* 
        FROM calendarWork 
        JOIN user 
        ON calendarWork.idUser = user.id ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getUsersWithCalendar($idUser)
    {
        //laasy ra danh sách lịch làm việc của 1 nhân viên cụ thể va thong tin cua nhân viên đó
        $sql = "SELECT calendarWork.id AS calendarWork_id, calendarWork.*, user.* 
        FROM calendarWork 
        JOIN user 
        ON calendarWork.idUser = user.id 
        WHERE calendarWork.idUser = $idUser";


        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    //xóa
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $this->setQuery($sql);
        return $this->execute();
    }
    //thêm
    public function insert($idUser, $status, $timeStart, $timeEnd)
    {
        $sql = "INSERT INTO $this->table (idUser, status, timeStart, timeEnd) VALUES (?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$idUser, $status, $timeStart, $timeEnd]);
    }
    //sửa
    public function update($id,$timeStart, $timeEnd, $status, $idUser)
    {
        $sql = "UPDATE $this->table SET timeStart = ?, timeEnd = ?, status = ?, idUser = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$timeStart, $timeEnd, $status, $idUser, $id]);
    }
    //lấy ra 1 bản ghi
    public function findById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    //duyệt
    public function approve($id, $status)
    {
        $sql = "UPDATE $this->table SET status = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$status, $id]);
    }
}
?>
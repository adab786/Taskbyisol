<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'admin';  // The table name
    protected $primaryKey = 'id';   // The primary key
    protected $allowedFields = ['Name', 'Email', 'Phone', 'Course'];  // Fields allowed for insertion or updating
    // protected $useTimestamps = true;  // To use created_at and updated_at timestamps
    public function addStudent($data)
    {
        // This method will insert the provided student data
        return $this->insert($data);
        
    } 

    public function getStudentById($id)
    {
        return $this->where('id', $id)->first();  // Fetches the first record where the 'id' matches
    }


    public function updateStudent($id, $data)
    {
        // Ensure that the ID is part of the data
        $data['id'] = $id;

        // Use the update method to update the student data
        return $this->update($id, $data);
    }

    public function deleteStudent($id)
    {
        // Use the delete method to delete the student record
        return $this->delete($id);
    }
   
    public function getStudentdetail($id)
    {
        return $this->where('id', $id)->first();
    }
    
}

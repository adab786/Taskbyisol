<?php
namespace App\Controllers;

use App\Models\StudentModel;

class Home extends BaseController
{
    // Property to hold the student model instance
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }

    public function index(){
        return view('welcome_message');
    }

    // Method to display student details
    public function view_student($id)
    {
        // Initialize the StudentModel
        $studentModel = new StudentModel();

        // Get the student details using the model
        $student = $studentModel->getStudentDetail($id);

        // If the student doesn't exist, redirect or show an error
        if (!$student) {
            return redirect()->to('/student')->with('error', 'Student not found.');
        }

        // Pass the student data to the view for displaying
        return view('view_student', ['student' => $student]);
    }

    public function add_student_form(){
        return view('add_student_form');
    }

    // Display all students
    public function student_view()
    {
        // Get all students from the database
        $students = $this->studentModel->findAll();

        // Pass the data to the view
        return view('student_view', ['students' => $students]);
    }

    // Handle adding a new student
    public function add_student()
    {
        // Validate and sanitize input data
        $data = [
            'Name' => $this->request->getPost('name'),
            'Email' => $this->request->getPost('email'),
            'Phone' => $this->request->getPost('phone'),
            'Course' => $this->request->getPost('course')
        ];

        // Insert the new student into the database
        if ($this->studentModel->addStudent($data)) {
            
            // Redirect to the student list page after success
            return redirect()->to('/student');
        } else {
            // Handle errors, you can show a message or log the error
            return redirect()->back()->with('error', 'Failed to add student!');
        }
    }

    // Edit student - Load data for editing
    public function edit_student($id)
    {
        // Get the student by ID
        $student = $this->studentModel->getStudentById($id);

        // If the student doesn't exist, redirect or show an error
        if (!$student) {
            return redirect()->to('/student')->with('error', 'Student not found.');
        }

        // Pass the student data to the view for editing
        return view('edit_student', ['student' => $student]);
    }

    // Update student - Handle form submission for updating student data
    

    public function update_student_post($id)
    {
        if ($this->request->getMethod() === 'post') {
            // Log the request data for debugging
            log_message('debug', 'Updating student with ID: ' . $id);
            log_message('debug', 'Form Data: ' . json_encode($this->request->getPost()));

            // Prepare the data to be updated
            $data = [
                'Name' => $this->request->getPost('Name'),
                'Email' => $this->request->getPost('Email'),
                'Phone' => $this->request->getPost('Phone'),
                'Course' => $this->request->getPost('Course'),
            ];

            // Load the model
            $model = new StudentModel();

            // Update the student record
            if ($model->updateStudent($id, $data)) {
                return redirect()->to('/student')->with('success', 'Student updated successfully');
            } else {
                log_message('error', 'Failed to update student ID: ' . $id);
                return redirect()->back()->with('error', 'Failed to update student');
            }
        }
    }

    // Delete student

    public function delete_student($id)
    {
        // Load the model
        $model = new StudentModel();

        // Delete the student record
        if ($model->delete($id)) {
            return redirect()->to('/student')->with('success', 'Student deleted successfully');
        } else {
            log_message('error', 'Failed to delete student ID: ' . $id);
            return redirect()->back()->with('error', 'Failed to delete student');
        }
    }   
    

    
}


namespace App\Controllers;

use App\Models\StudentModel;



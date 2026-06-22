<?php
    class StudentController extends Controller{
        private StudentService $studentService;

        public function __construct(){
            $this->layout = 'main';
            $this->studentService = new StudentService();
        }

        public function index(){
            $students = $this->studentService->getStudentList();

            $this->view('students/index', [
                'students'=> $students
            ]);
        }

        public function delete(){
            $id = $_GET['id'] ?? null;
            $this->studentService->deleteStudent($id);
            $students = $this->studentService->getStudentList();

            $this->renderPartial('students/table', [
                'students'=> $students
            ]);
        }

        public function table(){
            $students = $this->studentService->getStudentList();

            $this->renderPartial('student/table', [
                'students'=> $students
            ]);
        }
    }
?>
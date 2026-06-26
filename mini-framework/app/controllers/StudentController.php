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

            $this->renderPartial('students/table', [
                'students'=> $students
            ]);
        }

        public function create(){
            $this->view('students/create');
        }

        public function store(){
            $this->studentService->addStudent(
                $_POST['name'],
                $_POST['course']
            );
            header('Location: ?url=students');
            exit;
        }
    }
?>
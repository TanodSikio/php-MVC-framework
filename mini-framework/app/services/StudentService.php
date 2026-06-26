<?php
    class StudentService{
        private Student $studentModel;
        
        public function __construct(){
            $this->studentModel = new Student();
        }

        public function getStudentList(): array{
            $students = $this->studentModel->getAllStudents();
            return $this->sortStudentsByName($students);
        }

        public function deleteStudent($id): bool{
            if(!$id){
                return false;
            }
            return $this->studentModel->deleteStudent((int) $id);
        }

        private function sortStudentsByName(array $students): array{
            usort($students, function(Student $first, Student $second){
                return strcmp($first->getName(), $second->getName());
            });
            return $students;
        }

        public function addStudent($name, $course): bool{
            if(!$name || !$course){
                return false;
            }
            return $this->studentModel->insertStudent($name, $course);
        }
    }
?>
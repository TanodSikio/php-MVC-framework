<?php
    class Student{
        private $id;
        private $name;
        private $course;

        public function __construct($id='', $name='', $course=''){
            $this->id = $id;
            $this->name = $name;
            $this->course = $course;
        }

        public function getId(){return $this->id;}
        public function setId($id){$this->id = $id;}

        public function getName(){return $this->name;}
        public function setName($name){$this->name = $name;}

        public function getCourse(){return $this->course;}
        public function setCourse($course){$this->course = $course;}

        public function getAllStudents(){
            $pdo = Database::connect();
            $stmt = $pdo->query('SELECT id, student_name, course FROM students');
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $students = [];
            foreach($rows as $row){
                $students[] = new Student($row['id'], $row['student_name'], $row['course']);
            }
            return $students;
        }

        public function deleteStudent($id):bool{
            $pdo = Database::connect();
            $stmt = $pdo->prepare('DELETE FROM students WHERE id=?');

            return $stmt->execute([$id]);
        }

        public function insertStudent($name, $course): bool{
            $pdo = Database::connect();
            $stmt = $pdo->prepare('INSERT INTO students (student_name, course) VALUES (?, ?)');
            
            return $stmt->execute([$name, $course]);
        }
    }
?>
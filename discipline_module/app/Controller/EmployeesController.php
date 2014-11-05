<?php
class EmployeesController extends AppController {
    // Function to find the verbal disciplines of an employee array
    private function findDisciplineByType($employee, $type)
    {
        $disciplinebyType = array();

        foreach ($employee['Discipline'] as $discipline) {
            if ($discipline['type'] == $type) {
                $disciplinebyType[] = $discipline;
            }
        }
        return $disciplinebyType;
    }

    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('employees', $this->Employee->find('all'));
    }

    public function view($id=null) 
    {
        if(!$id) {
            throw new NotFoundException(__('Invalid Employee'));
        }
        $employee = $this->Employee->findById($id);
        if(!$employee) {
            throw new NotFoundException(__('Invalid Employee'));
        }
        // Find the verbal disciplines
        $verbalDiscipline = $this->findDisciplineByType($employee, 0);
        $writtenDiscipline = $this->findDisciplineByType($employee, 1);

        $this->set('verbalDiscipline', $verbalDiscipline);
        $this->set('writtenDiscipline', $writtenDiscipline);
        $this->set('employee', $employee);
    }

    public function add_employee() 
    {
        if($this->request->is('post')) {
            $this->Employee->create();
            // Validate and save data;
            if($this->Employee->save($this->request->data)) {
                $this->Session->setFlash(__('New Employee Added'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add employee'));
        }
    }

    public function add_discipline($id=null)
    {
        if(!$id) {
            throw new NotFoundException(__('Invalid Employee'));
        }
        $employee = $this->Employee->findById($id);
        if(!$employee) {
            throw new NotFoundException(__('Invalid Employee'));
        } else {
            $this->set('employee', $employee);
        }
        if($this->request->is('post')) {
            $this->Employee->Discipline->create();
            $this->Employee->Discipline->set('employee_id', $id);
            $this->Employee->Discipline->set('added', date('Y-m-d H:i:s'));

            if($this->Employee->Discipline->save($this->request->data)) {
                $this->Session->setFlash(__('Discipline Added'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add discipline'));
        }
    }


}
<?php
	class DisciplinesController extends AppController {
		public $helpers = array('Html', 'Form');

		public function add_discipline($id=null)
		{
			if(!$id) {
				throw new NotFoundException(__('Invalid Employee'));
			}
			$employee = $this->Employee->findById($id);
			if(!$employee) {
				throw new NotFoundException(__('Invalid Employee'));
			}
			if($this->request->is('post')) {
				$this->Discipline->create();
				if($this->Discipline->save($this->request->data)) {
					$this->Discipline->set('employee_id', $id);
					$this->Discipline->save();

					return $this->redirect(array('action' => 'index'));
				}
			}
		}

	}
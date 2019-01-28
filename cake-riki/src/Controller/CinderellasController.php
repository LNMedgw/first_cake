<?php
namespace App\Controller;

class CinderellasController extends AppController {
    public function index() {
        $data = $this->Cinderellas->find('all', array(
            'fields' => array('name','kana')));
        $this->set('data',$data);
        $this->set('entity',$this->Cinderellas->newEntity());
    }

    public function list() {
        $data = $this->Cinderellas->find('all');
        $this->set('data',$data);
        $this->set('entity',$this->Cinderellas->newEntity());
    }

    public function new() {
        $this->set('entity',$this->Cinderellas->newEntity());
    }

    public function addRecord() {
        if ($this->request->is('post')) {
            $cinderella = $this->Cinderellas->newEntity($this->request->data);
            $this->Cinderellas->save($cinderella);
        }
        return $this->redirect(['action' => 'index']);
    }

    public function search() {
        $this->set('entity',$this->Cinderellas->newEntity());
        if ($this->request->is('post')) {
            $data = $this->Cinderellas->find('all', array(
                'conditions' => array('kana like' => "%{$this->request->data['kana']}%"))
                );
        } else {
            $data = $this->Cinderellas->find('all');
        }
        $data->order(['kana'=>'ASC','id'=>'ASC']);
        $this->set('data',$data->toArray());
        $this->set('count',$data->count());
    }

    public function update($id = null) {
        $this->set('entity',$this->Cinderellas->newEntity());
        if ($id != null) {
            try {
                $entity = $this->Cinderellas->get($id);
                $this->set('entity',$entity);
            } catch(Exception $e) {
                Logg:write('debug',$e->getMessage());
            }
        }
        $data = $this->Cinderellas->find('all')->order(['id'=>'DESC']);
        $this->set('data',$data->toArray());
        $this->set('count',$data->count());
    }

    public function editRecord() {
        if ($this->request->is('put')) {
            try {
                $entity = $this->Cinderellas->get($this->request->data['id']);
                $this->Cinderellas->patchEntity($entity,$this->request->data);
                $this->Cinderellas->save($entity);
            } catch(Exception $e) {
                Logg:write('debug',$e->getMessage());
            }
            return $this->redirect(['action' => 'index']);
        }
    }

    public function delete() {
        $data = $this->Cinderellas->find('all');
        $this->set('data',$data);
        $this->set('entity',$this->Cinderellas->newEntity());
    }

    public function delRecord() {
        if ($this->request->is('post')) {
            try {
                $entity = $this->Cinderellas->get($this->request->data['id']);
                $this->Cinderellas->delete($entity);
            } catch(Exception $e) {
                Log::write('debug', $e->getMessage());
            }
        }
        $this->redirect(['action' => 'index']);
    }
}

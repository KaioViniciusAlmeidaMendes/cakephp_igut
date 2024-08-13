<?php 
class MedicosController extends AppController{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
        public function index() {
            $this->layout = 'ajax';
            $this->set('medicos', $this->Medico->find('all'));
        }
    public function edit($id = null){
            $this->layout = 'ajax';
            if(!$id){
                throw new NotFoundException(__('invalid post'));
            }
            $medico = $this->Medico->findById($id);
            if(!$medico){
                throw new NotFoundException(__('Invalid Post'));
            }
            $this->set('medico', $medico);
          
        }

    public function add(){
        $this->layout = 'ajax';
        if($this->request->is('post')){
            $this->Medico->create();
            if($this->Medico->save($this->request->data)){
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function save($id = null){
        $this->layout = 'ajax';
        if(!$id){
            throw new NotFoundException(__('Invalid post'));
        }
        $medico = $this->Medico->findById($id);
        if(!$medico){
            throw new NotFoundException(__('Invalid post'));
        }
        if($this->request->is(array('post', 'put'))){
            $this->Medico->id = $id;
            if($this->Medico->save($this->request->data)){
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        if(!$this->request->data){
            $this->request->data = $medico;
        }
    }
    public function delete($id){
        $this->layout = 'ajax';
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }

        if($this->Medico->delete($id)){
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            ); 
        }else{
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
        return $this->redirect(array('action' => 'index'));
    }
    }

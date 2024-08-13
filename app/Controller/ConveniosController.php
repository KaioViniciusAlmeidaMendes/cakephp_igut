<?php 
class ConveniosController extends AppController{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
        public function index() {
            $this->layout = 'ajax';
            $this->set('convenios', $this->Convenio->find('all'));
        }
    public function edit($id = null){
            $this->layout = 'ajax';
            if(!$id){
                throw new NotFoundException(__('invalid post'));
            }
            $convenio = $this->Convenio->findById($id);
            if(!$convenio){
                throw new NotFoundException(__('Invalid Post'));
            }
            $this->set('convenio', $convenio);
          
        }

    public function add(){
        $this->layout = 'ajax';
        if($this->request->is('post')){
            $this->Convenio->create();
            if($this->Convenio->save($this->request->data)){
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
        $convenio = $this->Convenio->findById($id);
        if(!$convenio){
            throw new NotFoundException(__('Invalid post'));
        }
        if($this->request->is(array('post', 'put'))){
            $this->Convenio->id = $id;
            if($this->Convenio->save($this->request->data)){
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        if(!$this->request->data){
            $this->request->data = $convenio;
        }
    }
    public function delete($id){
        $this->layout = 'ajax';
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }

        if($this->Convenio->delete($id)){
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

    










?>
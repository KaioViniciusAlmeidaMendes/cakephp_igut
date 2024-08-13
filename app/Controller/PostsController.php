<?php 

class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index() {
        $this->layout = 'ajax';
        $this->loadModel('Tipo');
        
        $query = "
        SELECT *,
        Tipo.id,
        Tipo.titulo
        FROM
            posts as Post
        INNER JOIN tipos as Tipo ON Tipo.id = Post.tipo_id
        ";

        $posts =  $this->Post->query($query);     

        //echo '<pre>'; print_r($posts);exit;
        $this->set('posts', $posts);       
    }

    public function edit($id = null) {
        $this->layout = 'ajax';
        $this->loadModel('Tipo');
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->findById($id);
        
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
        $this->set('tipos', $this->Tipo->find('all'));
    }

    public function add() {
        $this->layout = 'ajax';

        $this->loadModel('Tipo');
        $tipos = $this->Tipo->find('all');
        $this->set('tipos', $tipos);
        
        //  echo '<pre>'; print_r($tipos);exit;
        if ($this->request->is('post')) {

            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function save($id = null) {
        $this->layout = 'ajax'; 
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
    
        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id) {
        $this->layout = 'ajax';
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
    
        if ($this->Post->delete($id)) {
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
    
        return $this->redirect(array('action' => 'index'));
    }


}
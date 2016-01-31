<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

	public $components = ['Paginator', 'RequestHandler', 'Session'];
	public function index() {
		$this->set('posts', $this->Paginator->paginate());
	}

	public function add() {
		debug($data);
		if ($this->request->is('post')) {

// 			$this->Post->create($this->request->data);
// 			if ($this->Post->save()) {
// 				$this->Session->setFlash(
// 						__('新しい記事を受け付けました。'),
// 						'alert',
// 						['plugin' => 'BoostCake', 'class' => 'alert-success']
// 				);

// 				return $this->redirect(['action' => 'index', 'user_account' => $current_user['username']]);
// 			} else {
// 				$this->Session->setFlash(
// 						__('記事の投稿に失敗しました。入力内容を確認して再度投稿してください。'),
// 						'alert',
// 						['plugin' => 'BoostCake', 'class' => 'alert-success']
// 				);
// 			}
 		}
	}
}

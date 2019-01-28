<?php
namespace App\Controller;

/**
	 * 
	 */
	class HelloController extends AppController {
		// public $name = 'Hello';
		// public $autoRender = true;

		public function initialize(){
			// $this->name = 'Hello';
			// $this->autoRender = false;
			// $this->viewBuilder()->autoLayout(true);
			$this->viewBuilder()->Layout('Hello');
			$this->set('msg','Hello/index');
			$this->set('footer','Hello/footer2');
		}

		public function index(){
			// echo "Hello world!";
			// $this->setAction("other"); //フォワード
			// $this->redirect("hello/other"); //リダイレクト
			// $this->viewBuilder()->autoLayout(true);
			// $this->autoRender = true;

			// $this->set('msg', 'ヘッダーエレメント!!');
			// $n = rand(1,2);
			// $this->set('footer','Hello/footer'.$n);

			$result = "";
			if ($this->request->isPost()){
				$result = "<pre>※送信された情報<br/>";
				foreach ($this->request->data['HelloForm'] as $key => $val){
					$result .= $key . ' => ' . $val;
				}
				$result .= "</pre>";
			} else {
				$result = "なんか書け";
			}
			$this->set("result", $result);
		}

		public function sendForm(){
			// $str = $this->request->query['text1'];
			$str = $this->request->data('text1');
			$result = "";
			if ($str != ""){
				$result = "you type: " . $str;
			} else {
				$result = "empty.";
			}
			// foreach ($this->request->query as $key => $val){
			// 	$result .= $key . " => " . $val . "<br/>";
			// }
			$this->set("result",h($result));
		}

		public function other(){
			// echo "otherだよ";
			$this->viewBuilder()->autoLayout(false);
			$this->autoRender = true;			
		}
	}	
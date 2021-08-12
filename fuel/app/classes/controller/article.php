<?php 
class Controller_Article extends Controller_Template{
    public function action_index(){
        // $data['user_form'] = Fieldset::forge('user_form');
        // $article = Model_Article::forge();
        // $article_form = Fieldset::forge('article_form');
        // $article_form->add_model($article);
        // $view = View::forge("article/form");
        // $view->set('form', $article_form);
        // $this->template->title = 'hello';
        // $this->template->content = 'how are you?';
        // $this->template->form = View::forge('article/form.php');
        // $this->template->form->set_safe('form', $article_form->build());

        // $user_form = Fieldset::forge('user_form');
        // $user_form->add('name', 'お名前', array('type'=>'text', 'size'=>40, 'value'=>'ここに名前が入ります'));
        // $user_form->add('sex', '性別', array('type'=>'radio', 'options'=>array(1=>'男性', 2=>'女性'), 'value'=>1));
        // $user_form->add('submit', '', array('type'=>'submit', 'value'=>'送信'));
        // echo $user_form->build('member/send');
        // $data['articles'] = Model_Article::query()->get();
        $this->template->title = '記事一覧';
        // $this->template->form = View::forge('article/form', $data);
        // $this->template->content = View::forge('article/list', $data);

        // $article = Model_Article::forge();

        // $add_form = Fieldset::forge('add_form');
        // $add_form->add_model($article);
    
        // $view = View::forge('article/form');
        // $view->set('form', $add_form->build(), false);
        // return Response::forge($view);


    $form = Fieldset::forge('article')->add_model("Model_article");
    return $form;
    }

    //     $form = Fieldset::forge();

	// 	$form->add('name', '名前')
	// 		->add_rule('trim')
	// 		->add_rule('required')
	// 		->add_rule('no_controll')
	// 		->add_rule('max_length', 20);

	// 	$form->add('email', 'メールアドレス')
	// 		->add_rule('trim')
	// 		->add_rule('required')
	// 		->add_rule('no_controll')
	// 		->add_rule('valid_email');

	// 	$form->add('comment', 'コメント', 
	// 				array('type' => 'textarea', 'cols' => 70, 'rows' => 6))
	// 		->add_rule('required')
	// 		->add_rule('max_length', 400);
        
    //         $form->add('type','試合区分',
	// 		array(
	// 			'options' => array('シングル','ダブルス','混合','混合なしSW','混合ありW','混合ありSW','団体'),
	// 			'type' => 'select',
	// 		)
	// 	);	

	// 	$ops = array(
	// 		'男性' => '男性', 
	// 		'女性' => '女性',
	// 	);
	// 	$form->add('gender', '性別', 
	// 				array('options' => $ops, 'type' => 'radio'))
	// 		->add_rule('in_array', $ops);
		
	// 	$ops = array(
	// 		''                         => '',
	// 		'製品購入前のお問い合わせ' => '製品購入前のお問い合わせ', 
	// 		'製品購入後のお問い合わせ' => '製品購入後のお問い合わせ', 
	// 		'その他'                   => 'その他',
	// 	);
	// 	$form->add('kind', '問い合わせの種類', 
	// 				array('options' => $ops, 'type' => 'select'))
	// 		->add_rule('in_array', $ops);
		
	// 	$ops = array(
	// 		'PHP'    => 'PHP', 
	// 		'Perl'   => 'Perl', 
	// 		'Python' => 'Python',
	// 	);
	// 	$form->add('lang', '使用プログラミング言語', 
	// 				array('options' => $ops, 'type' => 'checkbox'))
	// 		->add_rule('in_array', $ops)
	// 		->add_rule('not_required_array');
		
    //     $form->repopulate();
	// 	$form->add('submit', '', array('type'=>'submit', 'value' => '確認'));
    //     $this->template->title = '記事一覧';
    //     $this->template->html_form = $form;
    // }
//     public function action_view($id){
//         $data['article'] = Model_Article::find($id);
//         if(!$data['article']){
//             Response::redirect('articles');
//         }
//         $this->template->title = $data['article'] -> title;
//         $this->template->content = View::forge('article/view', $data);
//     }
//     public function action_create(){
//         $article = Model_Article::forge();
//         $article->user_id = 1;
//         $fieldset = Fieldset::forge()->add_model('model_Article');
//         $this->template->title = '新規登録';
//         $this->template->set('content', $form->build(), false);
//     }
}
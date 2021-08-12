<?php 
class Controller_Article extends Controller_Template{
    public function action_index(){
        $data['articles'] = Model_Article::query()->get();
        $this->template->title = '記事一覧';
        $this->template->content = View::forge('article/list', $data);
    }
    public function action_view($id){
        $data['article'] = Model_Article::find($id);
        if(!$data['article']){
            Response::redirect('articles');
        }
        $this->template->title = $data['article'] -> title;
        $this->template->content = View::forge('article/view', $data);
    }
}
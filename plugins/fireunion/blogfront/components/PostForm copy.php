<?php namespace FireUnion\BlogFront\Components;

use Cms\Classes\ComponentBase;
use Redirect;
use System\Classes\PluginManager;
use RainLab\Blog\Models\Post as BlogPost;
use Bedard\BlogTags\Models\Tag;
use Input;
use DB;

class PostForm extends ComponentBase {
	use \FireUnion\BlogFront\Traits\Loaders;
	use \FireUnion\BlogFront\Traits\Mailer;
	public $listPage;
	public $postPage;
	public $tags;

	public function componentDetails() {
		return [
			'name' => 'fireunion.blogfront::lang.form_comp.name',
			'description' => 'fireunion.blogfront::lang.form_comp.description',
		];
	}

	public function defineProperties() {
		return $this->propertiesFor('form');
	}

	public function init() {

		$this->initFor('form');
		$this->post = $this->loadPost();
		if ($this->allow_images) {
			$manager = PluginManager::instance();
			if ($manager->exists('Responsiv.Uploader')) {

				$component = $this->addComponent(
					'Responsiv\Uploader\Components\ImageUploader',
					'imageUploader',
					[
						'placeholderText' => 'Add Image',
						'deferredBinding' => true,
						//'fileTypes' => 'jpg',
						'maxSize' => '3',
					]
				);
				$component->bindModel('featured_images', $this->post);
			} else {
				$this->allow_images = false;
				die('You must have <strong>Responsive.Uploader</strong> plugin installed and enabled to allow image uploading.  Disabling "Allow Image Uploading" should prvent this error from showing.');
			}
		}
	}

	public function onRun() {
		$this->runFor('form');

		//dd($post->id);
		/*numthang find current tags*/
		if($this->param('slug')) {
			$query = BlogPost::where('slug', '=', $this->param('slug'))
					->with('tags');
			$post = $query->get();
			foreach ($post[0]->tags as $key => $value) {
				$this->tags[] = $value['id'];
			}
		}
		/*end numthang*/
	}

	/**
	 * Ajax handler to save an event from form
	 * triggers onRun to show list after delete
	 * @return array for a flash like error message if there is a problem with form validation
	 */
	public function onSave() {
		//return false;
		//dd(post());
		if (!$result=$this->save()) {
			return null;
		}
		/*numthang insert tag*/
		post('id') ? $id = post('id') : $id = DB::table('rainlab_blog_posts')->max('id');
		$post = BlogPost::find($id);
		//delete all tags loop value
		$post->tags()->detach();
		//insert new tag relationship
		$post->tags()->attach(post('tags'));
		/*end numthang*/

		// Redirect to the intended page after successful update
		if(empty($this->param('slug')) || !post('published')) //create new blog
			$redirectUrl = $this->pageUrl($this->property('listPage'));
		else { //in case of edit blog
			$redirectUrl = $this->pageUrl($this->property('postPage'));
		}

		//dd($redirectUrl);
		if(post('redirect'))
			return Redirect::to($redirectUrl);
	}
	public function onDelete() {
		$blogpost = new BlogPost();
		$blogpost->where('slug', '=', $this->param('slug'))->delete();
		$redirectUrl = $this->pageUrl($this->property('listPage'));
		return Redirect::to($redirectUrl);

	}
}
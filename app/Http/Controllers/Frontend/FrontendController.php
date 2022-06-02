<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Count;
use App\Models\Department;
use App\Models\Feature;
use App\Models\Insurance;
use App\Models\Package;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Services\Helper;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function __construct()
    {
        view()->share('logo', Helper::get_static_option('logo'));
        view()->share('about', Helper::get_static_option('about'));
        view()->share('twitter', Helper::get_static_option('twitter'));
        view()->share('facebook', Helper::get_static_option('facebook'));
        view()->share('instagram', Helper::get_static_option('instagram'));
        view()->share('linkedin', Helper::get_static_option('linkedin'));
        view()->share('youtube', Helper::get_static_option('youtube'));
        view()->share('google_business', Helper::get_static_option('google_business'));
        view()->share('embed_map_link', Helper::get_static_option('embed_map_link'));
        view()->share('email', Helper::get_static_option('email'));
        view()->share('contact_no', explode(')', Helper::get_static_option('contact_no')));
        view()->share('address', Helper::get_static_option('address'));
    }

    public function index()
    {
        /**
         * @get('/')
         * @name('homepage')
         * @middlewares('web')
         */
        $slider_images = Slider::where('on', 'homepage')->get();
        if (\Jenssegers\Agent\Facades\Agent::isMobile() && !\Jenssegers\Agent\Facades\Agent::isTablet()) {
            $services = Service::with('department')->orderBy('clicks', 'DESC')->limit(2)->get();
        } else {
            $services = Service::with('department')->orderBy('clicks', 'DESC')->limit(3)->get();
        }
        $services_excerpt = Helper::get_static_option('services_excerpt');
        $count_image = Helper::get_static_option('count_image');
        $count_excerpt = Helper::get_static_option('count_excerpt');
        $review_excerpt = Helper::get_static_option('review_excerpt');
        $team_excerpt = Helper::get_static_option('team_excerpt');
        $counts = Count::where('on', 'homepage')->get();
        $gr_api = Helper::get_static_option('gr_api');
        $gr_count_api = Helper::get_static_option('gr_count_api');
        $tag_line = Helper::get_static_option('tag_line');
        $tag_action_button_link = Helper::get_static_option('tag_action_button_link');
        $tag_action_button_text = Helper::get_static_option('tag_action_button_text');
        $hero_image = Helper::get_static_option('hero_image');
        $hero_video = Helper::get_static_option('hero_video');
        $features = Feature::get();
        $welcome_message = Helper::get_static_option('welcome_message');
        $mission_message = Helper::get_static_option('mission_message');
        $vision_message = Helper::get_static_option('vision_message');

        return view('pages.frontend.home_page', compact([
            'slider_images',
            'services',
            'services_excerpt',
            'count_image',
            'count_excerpt',
            'review_excerpt',
            'team_excerpt',
            'counts',
            'gr_api',
            'gr_count_api',
            'tag_line',
            'tag_action_button_link',
            'tag_action_button_text',
            'hero_image',
            'hero_video',
            'features',
            'welcome_message',
            'mission_message',
            'vision_message'
        ]));
    }

    public function departments()
    {
        /**
         * @get('/departments')
         * @name('departments')
         * @middlewares('web')
         */
        $data = Department::get();

        return view('pages.frontend.departments', compact('data'));
    }

    public function department_single($id)
    {
        $data = Department::findOrFail($id);
        $services = Service::where('department_id', $id)->with('department')->get();
        $teams = Team::where('department_id', $id)->with('services', 'department')->get();

        return view('pages.frontend.department_single', compact('data', 'services', 'teams'));
    }

    public function blogs()
    {
        /**
         * @get('/blogs')
         * @name('blogs')
         * @middlewares('web')
         */
        return view('pages.frontend.blogs');
    }

    public function blog_single($id)
    {
        /**
         * @get('/blog_single')
         * @name('blog_single')
         * @middlewares('web')
         */
        $data = Blog::findOrFail($id);
        $related = Blog::where('department_id', $data->department_id)->with('department', 'team')->orderBy('clicks', 'DESC')->limit(3)->get();
        Blog::where('id', $id)->increment('clicks');

        return view('pages.frontend.blog_single', compact('data', 'related'));
    }

    public function services()
    {
        /**
         * @get('/services')
         * @name('services')
         * @middlewares('web')
         */
        return view('pages.frontend.services');
    }

    public function service_single($id)
    {
        /**
         * @get('/service_single')
         * @name('service_single')
         * @middlewares('web')
         */
        $data = Service::with('department')->findOrFail($id);
        $related = Service::where('department_id', $data->department_id)->with('department')->orderBy('clicks', 'DESC')->limit(3)->get();
        Service::where('id', $id)->increment('clicks');

        return view('pages.frontend.service_single', compact('data', 'related'));
    }

    public function teams()
    {
        /**
         * @get('/teams')
         * @name('teams')
         * @middlewares('web')
         */
        return view('pages.frontend.teams');
    }

    public function team_single($id)
    {
        $data = Team::with(['services' => function ($query) {
            $query->with('department');
        }])->findOrFail($id);
        $related = Team::where('department_id', $data->department_id)->with('department')->whereNotIn('id', [$data->id])->limit(3)->get();

        return view('pages.frontend.team_single', compact('data', 'related'));
    }

    public function insurance()
    {
        /**
         * @get('/insurance')
         * @name('insurance')
         * @middlewares('web')
         */
        $data = Insurance::get();

        return view('pages.frontend.insurance', compact('data'));
    }

    public function packages()
    {
        $data = Package::get();

        return view('pages.frontend.packages', compact('data'));
    }

    public function package_single($id)
    {
        $data = Package::with('packages')->findOrFail($id);

        return view('pages.frontend.package_single', compact('data'));
    }

    public function reviews()
    {
        /**
         * @get('/reviews')
         * @name('reviews')
         * @middlewares('web')
         */
        return view('pages.frontend.reviews');
    }

    public function career()
    {
        /**
         * @get('/career')
         * @name('career')
         * @middlewares('web')
         */
        $data = Helper::get_static_option('career_description');

        return view('pages.frontend.career', compact('data'));
    }

    public function privacy()
    {
        $data = Helper::get_static_option('privacy_description');

        return view('pages.frontend.privacy', compact('data'));
    }

    public function terms()
    {
        $data = Helper::get_static_option('terms_description');

        return view('pages.frontend.terms', compact('data'));
    }

    public function gallery()
    {
        /**
         * @get('/gallery')
         * @name('gallery')
         * @middlewares('web')
         */
        $directories = Storage::disk('public')->directories('files/1');

        return view('pages.frontend.gallery', compact('directories'));
    }

    public function about_us()
    {
        /**
         * @get('/about_us')
         * @name('about_us')
         * @middlewares('web')
         */
        $welcome_message = Helper::get_static_option('welcome_message');
        $mission_message = Helper::get_static_option('mission_message');
        $vision_message = Helper::get_static_option('vision_message');
        $tag_line = Helper::get_static_option('tag_line');
        $hero_image = Helper::get_static_option('hero_image');
        $hero_video = Helper::get_static_option('hero_video');

        return view('pages.frontend.about_us', compact(
            'tag_line',
            'welcome_message',
            'mission_message',
            'vision_message',
            'hero_image',
            'hero_video'
        ));
    }

    public function contact_us()
    {
        /**
         * @get('/contact_us')
         * @name('contact_us')
         * @middlewares('web')
         */
        return view('pages.frontend.contact_us');
    }

    public function book_appointment($tem_id = null)
    {
        /**
         * @get('/book_appointment')
         * @name('book_appointment')
         * @middlewares('web')
         */
        $team_id = $tem_id;

        return view('pages.frontend.book_appointment', compact('team_id'));
    }

    public function feedback()
    {
        /**
         * @get('/feedback')
         * @name('feedback')
         * @middlewares('web')
         */
        return view('pages.frontend.feedback');
    }
}

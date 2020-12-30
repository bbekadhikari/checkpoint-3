<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::prefix('admin')->group(function(){
    Route::middleware('adminGuest')->group(function (){
        Route::get('/login','Back\LoginController@showLoginForm')->name('admin.login');
        Route::post('/checklogin','Back\LoginController@checklogin')->name('admin.logincheck');
    });
    Route::middleware('adminAuth')->group(function (){
        Route::get('/',"Back\HomeController@index")->name('admin.home');
        Route::get('/logout','Back\ProfileController@logout')->name('admin.logout');


        Route::get('/changepassword','Back\ProfileController@ChangePassword')->name('admin.changepassword');
        Route::patch('/updatepassword','Back\ProfileController@UpdatePassword')->name('admin.updatepassword');
        Route::get('/editprofile','Back\ProfileController@EditProfile')->name('admin.editprofile');
        Route::patch('/update','Back\ProfileController@update')->name('admin.update');

        Route::get('/admins/index','Back\AdminController@index')->name('admin.index')->middleware('adminType');
        Route::post('/admins/store','Back\AdminController@store')->name('admins.store')->middleware('adminType');
        Route::delete('/admins/delete/{admin}','Back\AdminController@destroy')->name('admins.destroy')->middleware('adminType');

        Route::get('/addadmins','Back\AdminController@RegestrationForm')->name('admin.addadmin')->middleware('adminType');


        //-----------------------------Category-------------------------------
        Route::get('/categories','Back\CategoryController@index')->name('category.index');
        Route::post('/categories/store','Back\CategoryController@store')->name('category.store');
        Route::get('/categories/{category}/edit','Back\CategoryController@edit')->name('category.edit');
        Route::patch('/categories/update/{weprovide}','Back\CategoryController@update')->name('category.update');
        Route::get('/categories/delete/{category}','Back\CategoryController@delete')->name('category.delete');
        Route::patch('category/status/{cat}','Back\CategoryController@status')->name('status.category');

       Route::get('/shortnnotice','Back\ShortnoticeController@index')->name('shortnotice');
       Route::patch('/shortnnotice/update/{shortnotice}','Back\ShortnoticeController@update')->name('notice.update');
        //-----------------------------Sub Category-------------------------------
        Route::get('/subcategories','Back\SubCategory@index')->name('saubcat');
        Route::post('/subcategories/store','Back\SubCategory@store')->name('subcategory.store');
        Route::get('/subcategories/{subcategory}/edit','Back\SubCategory@edit')->name('subcategory.edit');
        Route::patch('/subcategories/update/{subcategory}','Back\SubCategory@update')->name('subcategory.update');
        Route::get('/subcategories/delete/{subcategory}','Back\SubCategory@delete')->name('subcategory.delete');
        //-----------------------------Banner-------------------------------
        Route::get('/banner','Back\BanerController@index')->name('banner');
        Route::post('/banner/store','Back\BanerController@store')->name('banner.store');
        Route::get('/banner/{banner}/edit','Back\BanerController@edit')->name('banner.edit');
        Route::patch('/banner/update/{banner}','Back\BanerController@update')->name('banner.update');
        Route::get('/banner/delete/{banner}','Back\BanerController@delete')->name('banner.delete');

        //----------------------------Why Choose US-------------------------------
        Route::get('/choose','Back\ChooseController@index')->name('choose');
        Route::post('/choose/store','Back\ChooseController@store')->name('choose.store');
        Route::get('/choose/{choose}/edit','Back\ChooseController@edit')->name('choose.edit');
        Route::patch('/choose/update/{choose}','Back\ChooseController@update')->name('choose.update');
        Route::get('/choose/delete/{choose}','Back\ChooseController@delete')->name('choose.delete');


//*********************Footer**********************//
        Route::get('/footer','Back\FooterController@index')->name('footer');
        Route::post('/footer/store','Back\FooterController@store')->name('footer.store');
        Route::get('/footer/{footer}/edit','Back\FooterController@edit')->name('footer.edit');
        Route::patch('/footer/update/{footer}','Back\FooterController@update')->name('footer.update');
        Route::get('/footer/delete/{footer}','Back\FooterController@delete')->name('footer.delete');

//*********************Services**********************//
        Route::get('/service','Back\ServiceController@index')->name('service');
        Route::post('/service/store','Back\ServiceController@store')->name('service.store');
        Route::get('/service/{service}/edit','Back\ServiceController@edit')->name('service.edit');
        Route::patch('/service/update/{service}','Back\ServiceController@update')->name('service.update');
        Route::get('/service/delete/{service}','Back\ServiceController@delete')->name('service.delete');

//*********************About us**********************//
        Route::get('/about-us','Back\AboutusController@index')->name('aboutus');
        Route::post('/aboutus/store','Back\AboutusController@store')->name('about.store');
        Route::get('/aboutus/{aboutus}/edit','Back\AboutusController@edit')->name('aboutus.edit');
        Route::patch('/aboutus/update/{aboutus}','Back\AboutusController@update')->name('aboutus.update');
        Route::get('/aboutus/delete/{aboutus}','Back\AboutusController@delete')->name('aboutus.delete');
        //*********************Classes**********************//
        Route::get('/classes','Back\ClassController@index')->name('classes');
        Route::post('/classes/store','Back\ClassController@store')->name('classes.store');
        Route::get('/classes/{class}/edit','Back\ClassController@edit')->name('classes.edit');
        Route::patch('/classes/update/{class}','Back\ClassController@update')->name('classes.update');
        Route::get('/classes/delete/{classes}','Back\ClassesController@delete')->name('classes.delete');

         //******************Register---------------------------

        Route::get('Register/index','Back\RegisterController@index')->name('register');
         Route::get('/register/update/{register}/seen/{view}','Back\registerController@seen')->name('register.seen');
        Route::get('/register/delete/{register}','Back\registerController@delete')->name('register.delete');



        //*********************Portfollio**********************//
        Route::get('/portfollio','Back\PortfollioController@index')->name('portfollio');
        Route::post('/portfollio/store','Back\PortfollioController@store')->name('portfollio.store');
        Route::get('/portfollio/{portfollio}/edit','Back\PortfollioController@edit')->name('portfollio.edit');
        Route::patch('/portfollio/update/{portfollio}','Back\PortfollioController@update')->name('portfollio.update');
        Route::get('/portfollio/delete/{portfollio}','Back\PortfollioController@delete')->name('portfollio.delete');
        //*********************Researches**********************//
        Route::get('/research','Back\ResearchController@index')->name('research');
        Route::post('/research/store','Back\ResearchController@store')->name('research.store');
        Route::get('/research/{research}/edit','Back\ResearchController@edit')->name('research.edit');
        Route::patch('/research/update/{research}','Back\ResearchController@update')->name('research.update');
        Route::get('/research/delete/{research}','Back\ResearchController@delete')->name('research.delete');
        //*********************Teams**********************//
        Route::get('/team','Back\TeamController@index')->name('team');
        Route::post('/team/store','Back\TeamController@store')->name('team.store');
        Route::get('/team/{team}/edit','Back\TeamController@edit')->name('teams.edit');
        Route::patch('/team/update/{team}','Back\TeamController@update')->name('team.update');
        Route::get('/team/delete/{team}','Back\TeamController@delete')->name('teams.delete');

        //*********************Teams**********************//
        Route::get('/page','Back\PageController@index')->name('page');
        Route::post('/page/store','Back\PageController@store')->name('page.store');
        Route::get('/page/{page}/edit','Back\PageController@edit')->name('page.edit');
        Route::patch('/page/update/{page}','Back\PageController@update')->name('page.update');
        Route::get('/page/delete/{page}','Back\PageController@delete')->name('page.delete');


        //*********************Footer**********************//
        Route::get('/footer','Back\FooterController@index')->name('footer');
        Route::post('/footer/store','Back\FooterController@store')->name('footer.store');
        Route::get('/footer/{footer}/edit','Back\FooterController@edit')->name('footer.edit');
        Route::patch('/footer/update/{footer}','Back\FooterController@update')->name('footer.update');
        Route::get('/footer/delete/{footer}','Back\FooterController@delete')->name('footer.delete');
        //*********************Footer**********************//
        Route::get('/heading','Back\HeadingController@index')->name('heading');
        Route::post('/heading/store','Back\HeadingController@store')->name('heading.store');
        Route::get('/heading/{heading}/edit','Back\HeadingController@edit')->name('heading.edit');
        Route::patch('/heading/update/{heading}','Back\HeadingController@update')->name('heading.update');
        Route::get('/heading/delete/{heading}','Back\HeadingController@delete')->name('heading.delete');
        //*********************Video**********************//
        Route::get('/video','Back\VideoController@index')->name('video');
        Route::post('/video/store','Back\VideoController@store')->name('video.store');
        Route::get('/video/{video}/edit','Back\VideoController@edit')->name('video.edit');
        Route::patch('/video/update/{video}','Back\VideoController@update')->name('video.update');
        Route::get('/video/delete/{video}','Back\VideoController@delete')->name('video.delete');
//*********************GALLERY**********************//
        Route::get('/gallery','Back\GalleryController@index')->name('gallery.index');
        Route::post('/gallery/store','Back\GalleryController@store')->name('gallerystore');
        Route::get('/gallery/{gallery}/edit','Back\GalleryController@edit')->name('gallery.edit');
        Route::patch('/gallery/update/{gallery}','Back\GalleryController@update')->name('gallery.update');
        Route::get('/gallery/delete/{gallery}','Back\GalleryController@delete')->name('gallerydestroy');
        //*********************Back Notice**********************//
        Route::get('/notice','Back\NoticeController@index')->name('back.notice');
        Route::post('/notice/store','Back\NoticeController@store')->name('back.notice.store');
        Route::get('/notice/{notice}/edit','Back\NoticeController@edit')->name('back.notice.edit');
        Route::patch('/notice/update/{notice}','Back\NoticeController@update')->name('back.notice.update');
        Route::get('/notice/delete/{notice}','Back\NoticeController@delete')->name('back.noticedestroy');
        //*********************Back Downloads**********************//
        Route::get('/download','Back\DownloadController@index')->name('back.download');
        Route::post('/download/store','Back\DownloadController@store')->name('back.download.store');
        Route::get('/download/{download}/edit','Back\DownloadController@edit')->name('back.download.edit');
        Route::patch('/download/update/{download}','Back\DownloadController@update')->name('back.download.update');
        Route::get('/download/delete/{download}','Back\DownloadController@delete')->name('back.downloaddestroy');

        
          Route::get('/logo','Back\FeaturedController@index')->name('featuredimage');
        Route::post('/logo/store','Back\FeaturedController@store')->name('featured.store');
        Route::get('/logo/delete/{featured}','Back\FeaturedController@delete')->name('featured.delete');




        //*********************Form Attributes**********************//
        Route::get('/formattr','Back\FormattrController@index')->name('back.formattr');
        Route::post('/level','Back\FormattrController@level')->name('level');
        Route::post('/sex','Back\FormattrController@sex')->name('sex');
        Route::post('/district','Back\FormattrController@district')->name('district');
        Route::post('/cast','Back\FormattrController@cast')->name('cast');
        Route::post('/religion','Back\FormattrController@religion')->name('religion');
        Route::post('/marital','Back\FormattrController@marital')->name('marital');
        Route::post('/employment','Back\FormattrController@employment')->name('employment');
        Route::post('/motherlanguage','Back\FormattrController@motherlanguage')->name('motherlang');
        Route::post('/phusically','Back\FormattrController@phusically')->name('physically');
        Route::post('/fatheredu','Back\FormattrController@level')->name('fatheredu');
        Route::post('/motheredu','Back\FormattrController@level')->name('motheredu');
        Route::post('/occu','Back\FormattrController@occu')->name('occu');
        Route::post('/about','Back\FormattrController@about')->name('about');
        Route::post('/level','Back\FormattrController@level')->name('level');



        Route::get('/level/{level}','Back\FormattrController@leveldelete')->name('level.delete');
        Route::get('/sex/{sex}','Back\FormattrController@sexdelete')->name('sex.delete');
        Route::get('/district/{district}','Back\FormattrController@districtdelete')->name('district.delete');
        Route::get('/cast/{cast}','Back\FormattrController@castdelete')->name('cast.delete');
        Route::get('/religion/{religion}','Back\FormattrController@religiondelete')->name('religion.delete');
        Route::get('/marital/{maritalstatus}','Back\FormattrController@maritaldelete')->name('marital.delete');
        Route::get('/employment/{employment}','Back\FormattrController@employmentdelete')->name('employment.delete');
        Route::get('/motherlanguage/{motherlanguage}','Back\FormattrController@motherlanguagedelete')->name('motherlang.delete');
        Route::get('/phusically/{physically}','Back\FormattrController@phusicallydelete')->name('physically.delete');
        Route::get('/fatheredu/{fatheredu}','Back\FormattrController@fatheredudelete')->name('fatheredu.delete');
        Route::get('/motheredu/{motheredu}','Back\FormattrController@motheredudelete')->name('motheredu.delete');
        Route::get('/occu/{occu}','Back\FormattrController@occudelete')->name('occu.delete');
        Route::get('/about/{about}','Back\FormattrController@aboutdelete')->name('about.delete');

        //*********************Back Downloads**********************//
        Route::get('/form/index','Back\FormController@indexback')->name('back.form');
        //*********************Back Status**********************//
        Route::patch('/form/status/{form}','Back\FormController@status')->name('form.status');
        Route::get('/form/delete/{form}','Back\FormController@delete')->name('form.delete');
        Route::get('/candidate/view/{form}','Back\FormController@view')->name('view.candidate');
        Route::get('/otherdocument/view/{form}','Back\FormController@docs')->name('otherdocs');
        Route::patch('/symbol/{form}','Back\FormController@symbol')->name('symbol');

        //--------------------------Contact--------------------------------------
        Route::get('/contact','Front\ContactController@bkindex')->name('message');
        Route::get('/contact/edit/{contact}/edit','Front\ContactController@edit')->name('contact.edit');
        Route::get('/contact/update/{contact}/seen/{view}','Front\ContactController@seen')->name('contact.seen');
        Route::get('/contact/delete/{contact}','Front\ContactController@delete')->name('contact.delete');
        //--------------------------BackPopup--------------------------------------
        Route::get('/popup','Back\PopupController@index')->name('popup');
        Route::post('/popup/store','Back\PopupController@store')->name('popup.store');
        Route::get('/popup/edit/{dialogue}/edit','Back\PopupController@edit')->name('popup.edit');
        Route::patch('/popup/update/{dialogue}','Back\PopupController@update')->name('popup.update');
        Route::get('/popup/delete/{dialogue}','Back\PopupController@delete')->name('popup.delete');
        //--------------------------Back page--------------------------------------
        Route::get('/page','Back\PageController@index')->name('page');
        Route::post('/page/store','Back\PageController@store')->name('page.store');
        Route::get('/page/edit/{page}/edit','Back\PageController@edit')->name('page.edit');
        Route::patch('/page/update/{page}','Back\PageController@update')->name('page.update');
        Route::get('/page/delete/{page}','Back\PageController@delete')->name('page.delete');

        //--------------------------Back page--------------------------------------

        //*********************BLog**********************//
        Route::get('/blog','Back\BlogController@index')->name('blog');
        Route::post('/blog/store','Back\BlogController@store')->name('blog.store');
        Route::get('/blog/{blog}/edit','Back\BlogController@edit')->name('blog.edit');
        Route::patch('/blog/update/{blog}','Back\BlogController@update')->name('blog.update');
        Route::get('/blog/delete/{blog}','Back\BlogController@delete')->name('blog.delete');


        //*********************Product Category**********************//
        Route::get('/product/category','Back\ProductcatCatController@index')->name('productcategory');
        Route::post('/product/category/store','Back\ProductcatCatController@store')->name('productcategory.store');
        Route::get('/product/category/{productcategory}/edit','Back\ProductcatCatController@edit')->name('productcat.edit');
        Route::patch('/product/category/update/{productcategory}','Back\ProductcatCatController@update')->name('productcat.update');
        Route::get('/product/category/delete/{productcategory}','Back\ProductcatCatController@delete')->name('productcat.delete');
        //*********************Product SubCategory**********************//
        Route::get('/product/sub-category','Back\ProductsubcatController@index')->name('productsubcategory');
        Route::post('/product/sub-category/store','Back\ProductsubcatController@store')->name('productsubcategory.store');
        Route::get('/product/sub-category/{productcategory}/edit','Back\ProductsubcatController@edit')->name('productsubcat.edit');
        Route::patch('/product/sub-category/update/{productcategory}','Back\ProductsubcatController@update')->name('productsubcat.update');
        Route::get('/product/sub-category/delete/{productcategory}','Back\ProductsubcatController@delete')->name('productsubcat.delete');

        //*********************Product**********************//
        Route::get('/item','Back\ItemController@index')->name('item');
        Route::get('/item/create','Back\ItemController@create')->name('items.create');
        Route::post('/item/store','Back\ItemController@store')->name('item.store');
        Route::post('/item/attribute/store','Back\ItemController@image_store')->name('image.store');
        Route::get('/item/{item}/edit','Back\ItemController@edit')->name('item.edit');
        Route::get('/item-attributr/{proimage}/edit','Back\ItemController@attribute_edit')->name('attribute.edit');
        Route::patch('/item/update/{item}','Back\ItemController@update')->name('item.update');
        Route::get('/item/delete/{item}','Back\ItemController@delete')->name('item.delete');
        Route::get('/attribute/delete/{proimage}','Back\ItemController@attribute_delete')->name('attribute.delete');

        Route::get('qutoe/index','Back\QutoeController@index')->name('qutoe');
        Route::get('qutoe/delete/{qutoe}','Back\QutoeController@delete')->name('qutoe.delete');
        Route::get('/qutoe/update/{qutoe}/seen/{view}','Back\QutoeController@seen')->name('qutoe.seen');

        Route::get('/get-slug/{text}',function ($text) {
            $result = ['slug' => Str::slug($text)];
            return response()->json($result);
        });





    });

});
Route::get('/','Front\Home@main')->name('home');
Route::get('product/category/{productcategory}','Front\Home@productpage')->name('product.category');
Route::get('/search/product','Back\SearchController@index')->name('search');

Route::post('recovery/link','Back\VerifyController@verify')->name('email.verify');
Route::get('password/recovery/{id}','Back\VerifyController@recover')->name('password.recovery');
Route::post('update/password','Back\VerifyController@update')->name('update.recover');

//*********************GALLERY**********************//
Route::get('/form','Back\FormController@index')->name('form');
Route::post('/form/store','Back\FormController@store')->name('form.store');

Route::get('cart/add/{product}/{qty}/{eye}/{power}','Front\CartController@add');
Route::get('cart/details','Front\CartController@details');
Route::get('cart','Front\CartController@index')->name('front.cart');
Route::patch('cart/update','Front\CartController@update')->name('front.cart.update');
Route::get('cart/remove/{slug}','Front\CartController@remove')->name('front.cart.remove');



Route::get('/comment','Back\ComentController@index')->name('comment');
Route::get('/comment/delete/{coment}','Back\ComentController@delete')->name('coment.delete');

//-------------------------------Fabulous-----------------------------------------

Route::get('/servises','Front\Home@services')->name('services');

//---------------------------------------------------------------------------------
Route::get('product/detail/{product}','Front\Home@product')->name('product.detail');

Route::get('/email',function () {

    return view('email');
});



//----------------Gallery----------------------------
Route::get('/Galleries','Front\GalleryController@index')->name('gallery');
Route::get('front/{page}','Front\PageController@page')->name('front.page');
Route::get('contact','Back\ContactController@index')->name('contact');
Route::get('fronts/blog','Front\BlogController@index')->name('fronts.blog');
Route::get('fronts/allblog','Front\BlogController@allblog')->name('allblog');
Route::get('fronts/blogpage/{blog}','Front\BlogController@blogpage')->name('blogpage');
Route::get('page/services/{page}','Front\PageController@service')->name('page.service');
Route::get('page/projects/{page}','Front\PageController@project')->name('page.project');
Route::get('page/research/{page}','Front\PageController@research')->name('page.research');
Route::get('page/allresearch','Front\PageController@allresearch')->name('page.allresearch');
Route::get('page/allteam','Front\PageController@allteam')->name('page.allteam');
Route::get('page/team/{page}','Front\PageController@team')->name('page.team');
Route::get('pages/category/{page}','Front\Home@nav')->name('nav.page');
Route::get('pages/subcategory/{page}','Front\Home@subnav')->name('subcat.page');
Route::get('testimonials','Front\Home@testimonial')->name('front.testimonials');
Route::get('services/{service}','Front\Home@services')->name('front.services');

Route::get('study/abroad/{port}','Front\Home@abroad')->name('front.abroad');
Route::get('study/abroads/{port}','Front\Home@abroads')->name('front.abroads');

//----------------Contact----------------------------

Route::post('Contact/store','Front\ContactController@store')->name('contact.store');
Route::get('chooseus/{choose}','Back\ChooseController@choose')->name('choose.view');

Route::post('qutoe/store','Back\QutoeController@store')->name('qutoe.store');


//------------------------------Comment-------------------------------------

Route::post('/comment','Back\ComentController@store')->name('comment.store');
Route::get('view-all-universities','Front\Home@universities')->name('alluniversities');
Route::get('view-all-abroad','Front\Home@allabroad')->name('allabroad');
Route::get('classes','Front\Home@grade')->name('classes');
Route::get('contact','Front\Home@contact')->name('front.contact');
Route::get('about/{aboutus}','Front\Home@about')->name('front.about');
Route::get('universities/{research}','Front\Home@singleuniversity')->name('front.university');
Route::get('whychoose/{whychoose}','Front\Home@whychoose')->name('whychoose');
Route::post('Register','Back\RegisterController@register')->name('register.store');
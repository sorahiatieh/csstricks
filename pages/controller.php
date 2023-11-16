<?php
    defined('_AA') or die('Access Denied!');

    $setting=new Setting();
    
    Base::setSiteTitle($setting->getSetting('site_title'));
    Base::setSiteKeywords($setting->getSetting('site_keywords'));
    Base::setSiteDescription($setting->getSetting('site_description'));

    Head::addScript("assets/js/jquery-3.0.0.min.js");
    Head::addScript("assets/js/bootstrap.min.js");
    Head::addScript("assets/js/script.js");
    
    Head::addStylesheet("assets/css/bootstrap.min.css");
    Head::addStylesheet("assets/css/font-icon.css");
    Head::addStylesheet("assets/css/font-awesome.min.css");
    Head::addStylesheet("assets/css/style.min.css");
    
    //برای قسمت جستجو که در فیلد جستجو مقدار جستجو شده بماند
	Base::setData("_search",array(
		"Value"=>""
	));
    
    if (!isset($_GET['page']))
        $_GET['page']='main';
    
    
    $pagename=secure($_GET['page']);

    // چک شود که صفحه در دیتابیس وجود دارد یا نه
    $page=new Page();
    
    try 
    {
        if (!Validator::is_az09($pagename))
        {
            throw new NotFound();
        }
        
        $pageDetails=$page->setWhere(array(
            "name"=>$pagename
        ))->getDetails()->run();
        
        if (empty($pageDetails))
        {
            throw new NotFound();
        }

        Base::setPagename($pagename);

        Base::setSiteTitle($pageDetails['seo_title']);
        Base::setSiteKeywords($pageDetails['keywords']);
        Base::setSiteDescription($pageDetails['description']);


        Base::setData("_page_details",$pageDetails);


        if ($pageDetails['custom_page']==1)
        {
            $filename=SECTIONS.$pageDetails['name'].'.controller.php';
            if (file_exists($filename))
            {
                Base::setIsCustomPage(true);
                require $filename;
            }

            $filename=SECTIONS.Base::getPagename().'.view.php';
            if (Base::getIsCustomPage() && file_exists($filename))
            {
                Base::setHasView(true);

            }
        }
    }
    catch (NotFound $e)
    {
        Base::setSiteTitle("یافت نشد!");
        Base::setHasView(true);
        Base::setPagename('404');
    }

    // این باید پایین باشه تا درست کار کنه
	require "pages/requires/header.controller.php";
       
       /* echo '<pre>';
        print_r(Base::$data);
        echo '</pre>';
        exit;*/
   
?>
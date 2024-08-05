<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
        
    }


    public function charts_apexcharts(){
        return view('admin.charts-apexcharts');
    }


    public function charts_chartjs(){
        return view('admin.charts-chartjs');
    }



    public function charts_echarts(){
        return view('admin.charts-echarts');
    }



    public function components_accordion(){
        return view('admin.components-accordion');
    }



    public function components_alerts(){
        return view('admin.components-alerts');
    }



    public function components_badges(){
        return view('admin.components-badges');
    }



    public function components_breadcrumbs(){
        return view('admin.components-breadcrumbs');
    }



    public function components_buttons(){
        return view('admin.components-buttons');
    }



    public function components_cards(){
        return view('admin.components-cards');
    }



    public function components_carousel(){
        return view('admin.components-carousel');
    }



    public function components_list_group(){
        return view('admin.components-list-group');
    }



    public function components_modal(){
        return view('admin.components-modal');
    }



    public function components_pagination(){
        return view('admin.components-pagination');
    }



    public function components_progress(){
        return view('admin.components-progress');
    }



    public function components_spinners(){
        return view('admin.components-spinners');
    }



    public function components_tabs(){
        return view('admin.components-tabs');
    }



    public function components_tooltips(){
        return view('admin.components-tooltips');
    }


    public function forms_editors(){
        return view('admin.forms-editors');
    }



    public function forms_elements(){
        return view('admin.forms-elements');
    }



    public function forms_layouts(){
        return view('admin.forms-layouts');
    }



    public function forms_validation(){
        return view('admin.forms-validation');
    }


    public function icons_bootstrap(){
        return view('admin.icons-bootstrap');
    }




    public function icons_boxicons(){
        return view('admin.icons-boxicons');
    }



    public function icons_remix(){
        return view('admin.icons-remix');
    }



    public function pages_blank(){
        return view('admin.pages-blank');
    }



    public function pages_contact(){
        return view('admin.pages-contact');
    }



    public function pages_error_404(){
        return view('admin.pages-error-404');
    }



    public function pages_faq(){
        return view('admin.pages-faq');
    }



    public function pages_register(){
        return view('admin.pages-register');
    }



    public function tables_data(){
        return view('admin.tables-data');
    }



    public function tables_general(){
        return view('admin.tables-general');
    }



    public function users_profile(){
        return view('admin.users-profile');
    }


    public function loginr(){
        return view('admin.loginr');
    }
   
}


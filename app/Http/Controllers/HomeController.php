<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function aboutUS()
    {
        return view('pages.about');
    }

    public function contactUs()
    {
        return view('pages.contact');
    }

    public function ourBrands()
    {
        return view('pages.brands');
    }

    public function ourBlog()
    {
        return view('pages.all_articles');
    }

    public function article()
    {
        return view('pages.article');
    }

    public function articleCategories()
    {
        return view('pages.categories_articles');
    }

    public function qualityAssurance()
    {
        return view('pages.quality_assurance');
    }

    public function nutritionalIntegrity()
    {
        return view('pages.nutritional_integrity');
    }

    public function ingredientGlossary()
    {
        return view('pages.ingredient_glossary');
    }

    public function familyGallery()
    {
        return view('pages.gallery');
    }

    public function petsCalculator()
    {
        return view('pages.pets_calculator');
    }

    public function dogCaloriesCalculator()
    {
        return view('pages.dog_calc');
    }

    public function catCaloriesCalculator()
    {
        return view('pages.cat_calc');
    }

    public function dogPregnancyCalculator()
    {
        return view('pages.dog_preg');
    }

    public function catPregnancyCalculator()
    {
        return view('pages.cat_preg');
    }

}

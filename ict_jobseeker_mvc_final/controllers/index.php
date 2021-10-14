<?php

class Index extends Controller{

    function __construct()
    {
        parent:: __construct();
    }
    //default function
    function index()
    {
        echo "Hi, I'm the index controller" ;
    }
}
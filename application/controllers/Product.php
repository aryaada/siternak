<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('admin/product/product_list');
    }

    public function p_add() {
        $this->load->view('admin/product/form_add_product');
    }

    public function p_category() {
        $this->load->view('admin/product/product_category');
    }
}
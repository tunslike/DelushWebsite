<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function faq() {
        $data = [
            'title' => 'FAQ - Delush Foods Restaurant'
        ];

        $this->view('faq', $data);
    }

    public function privacy_policy() {
        $data = [
            'title' => 'Privacy Policy - Delush Foods Restaurant'
        ];

        $this->view('privacyPolicy', $data);
    }

    public function index() {
        $data = [
            'title' => 'Delush Foods Restaurant'
        ];

        $this->view('index', $data);
    }
}

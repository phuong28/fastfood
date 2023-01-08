<?php 

require_once('app/Controllers/Admin/BackendController.php');

require_once('app/Models/Order.php');

class OrdersController extends BackendController
{
    private $order;

    public function __construct()
    {
        $this->order = new Order();
    }
    public function index()
    {
        return $this->view('orders/index.php');
    }
    public function confirm(){
        return $this->view('orders/confirm_ok.php');
    }
    public function watingSuccess(){
        $id = $_GET['id'];
        $_POST['status'] = 1;
        $this->order->update($_POST, $id);
        return $this->view('orders/confirm_ok.php');
    }

}
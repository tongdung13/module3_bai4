<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
          '0' => [
              'id'    => '1',
              'name'  => 'customer1',
              'bod'   => '1989-06-13',
              'email' => 'vkoff@sfss.com'
          ]  ,
          '1' => [
              'id'    => '2',
              'name'  => 'customer2',
              'bod'   => '4245-55-64',
              'email' => 'customer2@gmail.com'
          ],
          '2' => [
              'id'    => '3',
              'name'  => 'customer3',
              'bod'   => '1313-43-43',
              'email' => 'customer3@gmail.com'
          ]
        ];

        return view('customers.list', compact('customers'));
    }


}

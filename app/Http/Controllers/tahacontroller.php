<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Order;
use App\Models\bagModel;
use App\Models\cartModel;
use App\Models\OrderItem;
use App\Models\tahamodel;
use App\Models\OrderModel;
use App\Models\tshirtModel;
use App\Models\ContactModel;
use App\Models\perfumeModel;
use Illuminate\Http\Request;
use App\Models\productsModel;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\signinRequest;
use App\Http\Requests\signupRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\contactRequest;
use App\Mail\OrderPlacedConfirmation;
use Illuminate\Validation\ValidationException;

class tahacontroller extends Controller
{
    public function registration(signupRequest $request)
    {
        $data = new tahamodel();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = $request->input('pswd');
        $data->dob = $request->input('dob');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->role = 'User';

        if ($data->save()) {
            $request->session()->put('uemail', $data->email);

            return redirect('/')->with('success', 'Data inserted successfully.');
        } else {
            return redirect('/user_registration')->with('error', 'Error inserting data.');
        }
    }

    public function signin(signinRequest $request)
    {
        $data = tahamodel::where('email', $request->input('email'))->first();

        if (session()->has('uemail')) {
            return redirect('/user_login')->with('error', 'Another User logged in.');
        } else
        if ($data && $data->Role == 'User') {
            if ($data->password === $request->input('pswd')) {
                $request->session()->put('uemail', $data->email);
                return redirect('/')->with('success', 'User Logged in.');
            } else {
                return redirect('/user_login')->with('error', 'Invalid credentials.');
            }
        } else if ($data && $data->Role == 'Admin') {
            if ($data->password === $request->input('pswd')) {
                $request->session()->put('adminemail', $data->email);
                return redirect('/my_admin_panel')->with('success', 'Logged in as admin.');
            } else {
                return redirect('/user_login')->with('error', 'Invalid credentials.');
            }
        } else {
            return redirect('/user_registration')->with('error', 'Please register yourself first');
        }
    }

    // UPLOAD TSHIRT DATA 
    public function tshirt(Request $request)
    {
        $product = new productsModel();
        $product->product_title = $request->input('tname');
        $product->product_price = $request->input('tprice');
        $product->product_description = $request->input('tdescription');
        $product->product_discount = $request->input('tdiscount');
        $product->product_stock = $request->input('stock');
        $product->product_category = $request->input('category');
        $product->product_type = $request->input('type');
        $sizes = $request->input('size');

        if ($sizes) {
            $product->product_size = json_encode($sizes);
        }

        if ($request->hasFile('timage')) {
            $image = $request->file('timage');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $product->product_image = $imageName; // Save the image path to the database
        }

        if ($product->save()) {
            return redirect('/my_admin_panel')->with('success', 'Product Uploaded successfully.');
        } else {
            return redirect('/my_admin_panel')->with('error', 'Error inserting data.');
        }
    }


    // UPLOAD BAG DATA 


    public function bag(Request $request)
    {
        $data = new productsModel();
        $data->product_title = $request->input('bname');
        $data->product_price = $request->input('bprice');
        $data->product_description = $request->input('bdescription');
        $data->product_discount = $request->input('bdiscount');
        $data->product_type = $request->input('type');
        $data->product_category = $request->input('category');
        $data->product_stock = $request->input('stock');

        if ($request->hasFile('bimage')) {

            $image = $request->file('bimage');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data->product_image = $imageName; // Save the image path to the database
        }

        if ($data->save()) {
            return redirect('/my_admin_panel')->with('success', 'Product Uploaded successfully.');
        } else {
            return redirect('/my_admin_panel')->with('error', 'Error inserting data.');
        }
    }

    // UPLOAD PERFUME 

    public function perfume(Request $request)
    {
        $data = new productsModel();
        $data->product_title = $request->input('pname');
        $data->product_price = $request->input('pprice');
        $data->product_description = $request->input('pdescription');
        $data->product_discount = $request->input('pdiscount');
        $data->product_stock = $request->input('stock');
        $data->product_type = $request->input('type');
        $data->product_category = $request->input('category');

        if ($request->hasFile('pimage')) {
            $image = $request->file('pimage');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data->product_image = $imageName; // Save the image path to the database
        }

        if ($data->save()) {
            return redirect('/my_admin_panel')->with('success', 'Product Uploaded successfully.');
        } else {
            return redirect('/my_admin_panel')->with('error', 'Error inserting data.');
        }
    }

    // UPLOAD GLASSES 

    public function glasses(Request $request)
    {
        $data = new productsModel();
        $data->product_title = $request->input('gname');
        $data->product_price = $request->input('gprice');
        $data->product_description = $request->input('gdescription');
        $data->product_discount = $request->input('gdiscount');
        $data->product_stock = $request->input('stock');
        $data->product_type = $request->input('type');
        $data->product_category = $request->input('category');

        if ($request->hasFile('gimage')) {
            $image = $request->file('gimage');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data->product_image = $imageName; // Save the image path to the database
        }

        if ($data->save()) {
            return redirect('/  my_admin_panel')->with('success', 'Product Uploaded successfully.');
        } else {
            return redirect('/my_admin_panel')->with('error', 'Error inserting data.');
        }
    }

    public function productdetails(Request $request, $name)
    {
        $allProducts = productsModel::where('product_title', $name)->first();
        $sizes = productsModel::pluck('product_size')->unique();

        if (!$allProducts) {
            return redirect()->back()->with('error', 'Product not found');
        }

        return view('productdetails', compact('allProducts', 'sizes'));
    }

    // FETCH PRODUCTS DATA IN INDEX
    public function FetchProducts()
    {
        try {
            $allProducts = productsModel::all('*');
            $newArrival = productsModel::where('product_type', 'New Arrival')->get();


            return view('index', compact('allProducts', 'newArrival'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No products found, Contact Admin');
        }
    }

    public function FetchProductShop()
    {
        try {
            $allProducts = productsModel::all('*');

            $newArrival = productsModel::where('product_type', 'New Arrival')->get();

            // Pass the data to another view
            return view('products', compact('newArrival', 'allProducts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No products found, Contact Admin');
        }
    }

    public function AddToCart(Request $request, $id = null)
    {
        try {
            if (session()->has('uemail')) {

                $cart = new cartModel();

                $cart->product_id = $id;
                $cart->ordered_by = session('uemail');
                $cart->quantity = $request->input('quantity');
                $cart->color = $request->input('color');
                $cart->product_name = $request->input('product_name');


                $cart->size = $request->input('size');


                $cart->save();

                return redirect()->back()->with('success', 'Added to cart');
            } else {
                return redirect('/user_login')->with('error', 'login to purchase');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Cart Error');
        }
    }

    public function readCart()
    {
        try {
            $myCart = ProductsModel::join('usercart', 'usercart.product_id', '=', 'products_models.product_id')
                ->select('products_models.product_title', 'products_models.product_image', 'products_models.product_size', 'usercart.quantity', 'usercart.size', 'usercart.order_id', 'usercart.color', 'usercart.size', 'products_models.product_color', 'products_models.product_description', 'products_models.product_price')
                ->where('usercart.ordered_by', session('uemail'))
                ->get();

            return view('cart', compact('myCart'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No Products Found, Contact Admin');
        }
    }




    public function myorder()
    {
        try {
            $userEmail = session('uemail');

            $myOrders = OrderModel::where('ordered_by', '=', $userEmail)->get();
            // dd($myOrders);
            // die();
            return view('myorders', compact('myOrders'));
        } catch (\Exception $e) {
            return redirect('cart')->with('error', 'No Orders Found');
        }
    }

    public function cancleOrderByProductTitle($name)
    {
        try {
            $cancel = OrderModel::where('order_number', '=', $name);
            if ($cancel) {
                $cancel->delete();
                return redirect()->back()->with('success', 'Order Canceled');
            }
        } catch (\Exception $e) {
            // echo $e;
            return redirect()->back()->with('error', 'Error Canceling');
        }
    }




    public function orderPlaced(Request $request)
    {
        $userEmail = session('uemail');
        $cartItems = cartModel::where('ordered_by', '=', $userEmail)->get();
        $orderNumber = uniqid();

        try {
            foreach ($cartItems as $cartItem) {

                $order = new OrderModel();

                $order->ordered_by = $cartItem->ordered_by;
                $order->order_number = $orderNumber;
                $order->address = $request->address;
                $order->phone = $request->phone;
                $order->product_name = $cartItem->product_name;
                $order->quantity_ordered = $cartItem->quantity;
                $order->product_id = $cartItem->product_id;
                $order->ordered_size = $cartItem->size;
                $order->bill = $request->bill;
                $order->image = null; // Initialize the image

                // Fetch product details using the product_id
                $productDetails = productsModel::where('product_id', $cartItem->product_id)->first();
                if ($productDetails) {
                    $order->image = $productDetails->product_image;
                    $order->actual_product_price = $productDetails->product_price;
                }

                $order->ordered_color = $cartItem->color;
                $order->delivery_status = "Pending";

                $order->save();


                // $data = ['name' => $userEmail, 'message' => "Order placed successfully"];

                // $emailTo = $userEmail;

                // Mail::to($emailTo)->send(new OrderPlacedConfirmation($data));

                $cartItem = cartModel::where('ordered_by', '=', $userEmail)->delete();
            }

            return redirect('cart')->with('success', 'Order Placed Successfully');
        } catch (\Exception $e) {
            return redirect('cart')->with('error', 'Error Ordering');
        }
    }

    public function removeFromCart($id = null)
    {
        try {
            $cartItem = CartModel::where('order_id', '=', $id);
            $cartItem->delete();
            return redirect()->back()->with('success', 'Item removed');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unknown error occurred');
        }
    }

    public function contact(contactRequest $request)
    {
        try {
            $data = $request->all();

            ContactModel::create($data);
            return redirect()->back()->with('success', 'Message Sent, We will reply ASAP');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unknown error occurred');
        }
    }

    // ADMIN CONTROLS 

    public function FetchOrders()
    {
        try {
            $Orders = OrderModel::all('*');
            return view('admin.orders', compact('Orders'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unknown error occurred');
        }
    }

    public function FetchCustomers()
    {
        try {
            $Customers = tahamodel::all('*');
            return view('admin.registeredusers', compact('Customers'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unknown error occurred');
        }
    }


    // ORDER SHIPPED 

    protected function orderShipped($order)
    {
        try {
            $shipped = OrderModel::where('order_number', $order)->update([
                'delivery_status' => 'Shipped', 'updated_at' => now()
            ]);

            return redirect()->back()->with('success', 'Order marked as shipped');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unknown error occurred');
        }
    }
}

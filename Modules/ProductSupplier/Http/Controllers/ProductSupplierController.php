<?php

namespace Modules\ProductSupplier\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProductSupplier\Entities\ProductSupplier;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Auth;
class ProductSupplierController extends Controller
{

    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'productsupplier';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'required' => 'Trường <strong>:attribute</strong> là bắt buộc.',
    ];
    public function __construct(){
        $this->cr_model     = ProductSupplier::class;

        $user = User::find(1);
        Auth::login($user);
        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
      return true;
      return Gate::forUser($this->cr_user)->allows($action, $option);
    }

    public function index(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();
        $query = $this->cr_model::where('id','!=','');
        //handle search and sort
        if( $request->search ){
            $query->where('name','LIKE','%'.$request->search.'%');
        }
        if( isset($request->filter) && count( $request->filter ) ){
            foreach( $request->filter as $field => $value ){
                if( $value ){
                    $query->where($field,$value);
                }
            }
        }
        if( $request->sort_by ){
            switch ($request->sort_by) {
                case 'id_desc':
                    $query->orderBy('id','DESC');
                    break;
                case 'id_asc':
                    $query->orderBy('id','ASC');
                    break;
                default:
                    # code...
                    break;
            }
        }
        $productsuppliers = $query->paginate($this->limit);

        return view($this->cr_module.'::index',[
          
            'productsuppliers'   => $productsuppliers
        ]);
    }
    public function create()
    {
        if( !$this->userCan($this->cr_module.'_create') ) $this->_show_no_access();

        return view($this->cr_module.'::create');
    }

    public function store(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_store') ) $this->_show_no_access();

        $request->validate([    
            'name'          => 'required',
        ],$this->messages);

        $this->cr_model::create($request->all());

        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');

    }
  
    public function show($id)
    {
        if( !$this->userCan($this->cr_module.'_show') ) $this->_show_no_access();

        $item = $this->cr_model::find($id);

        return view($this->cr_module.'::show',[
            'item' => $item
        ]);
    }
 
    public function edit($id)
    {
        if( !$this->userCan($this->cr_module.'_edit') ) $this->_show_no_access();

        $productsupplier = $this->cr_model::find($id);
        
        return view($this->cr_module.'::edit',[
            'productsupplier' => $productsupplier
        ]);
    }
   
    public function update(Request $request, ProductSupplier $productsupplier)
    {
        if( !$this->userCan($this->cr_module.'_update') ) $this->_show_no_access();


        $request->validate([
            'name'          => 'required'
        ],$this->messages);

        $productsupplier->update($request->all());

        return redirect()->route($this->cr_module.'.index')->with('success','Cập nhật thành công !');
    }

    public function destroy(ProductSupplier $productsupplier)
    {
        if( !$this->userCan($this->cr_module.'_destroy') ) $this->_show_no_access();

        $productsupplier->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
}

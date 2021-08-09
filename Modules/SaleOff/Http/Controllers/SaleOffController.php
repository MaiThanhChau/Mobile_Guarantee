<?php

namespace Modules\SaleOff\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SaleOff\Entities\SaleOff;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Auth;
use Gate;

class SaleOffController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'saleoff';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    public function __construct(){
        $this->cr_model     = SaleOff::class;

        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
        return true;
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
    public function index(Request $request) 
    {
        
        if( !$this->userCan('saleoff_index')) $this->_show_no_access();
        $query = $this->cr_model::where('id','!=','');
        if( $request->search){
            $query->where('name','LIKE','%',$request->search.'%');
        }
        if( isset($request->filter) && count( $request->filter) ){
            foreach($request->filter as $field => $value){
                if( $value ){
                    $query->where($field,'LIKE','%',$value,'%');
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
                    break;
                
            }
        }
        $saleoffs =$query->paginate($this->limit);

        return view($this->cr_module.'::index',[
            'saleoffs' => $saleoffs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        if( !$this->userCan('saleoff_create') ) $this->_show_no_access();
        return view('saleoff::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        if( !$this->userCan('saleoff_store') ) $this->_show_no_access();
        $this->cr_model::create($request->all());

        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('saleoff::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        if( !$this->userCan('saleoff_edit') ) $this->_show_no_access();
        $saleoff = $this->cr_model::find($id);
        return view($this->cr_module.'::edit',[
            'saleoff' => $saleoff
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        if( !$this->userCan('saleoff_update') ) $this->_show_no_access();
        $saleoff->update($request->all());
        
        return redirect()->route($this->cr_module.'.index')->with('success','Cập nhật thành công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(SaleOff $saleoff)
    {
        if( !$this->userCan('saleoff_destroy') ) $this->_show_no_access();

        $saleoff->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
}

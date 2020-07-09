<?php 
namespace App\Controllers;

use App\Models\CategoryModel;

class Categories extends BaseController
{
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index()
	{
        if ($this->request->isAJAX()) {
            $categories = new CategoryModel();
    
            $data = $categories->where('parent_id', null)->findAll();
    
            return $this->response->setJSON($data);
        }
        echo "Through Ajax Request Only";
    }

    /**
     * Retrieve Item / Items by ID
     * 
     * @param int|null $id
     * @return Response
     */
    public function show($id)
    {
        if ($this->request->isAJAX()) {
            $categories = new CategoryModel();

            $data = $categories->where('parent_id', $id)->findAll();

            return $this->response->setJSON($data);
        }
        
        echo "Through Ajax Request Only";
    }
}
